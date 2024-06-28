<?php

namespace App\Http\Controllers;

use App\Models\Tbriwayatparkir;
use Illuminate\Http\Request;
use App\Models\RiwayatParkir; // Pastikan model RiwayatParkir sudah diimport

class UserDashboardController extends Controller
{
    public function index()
    {
        // Ambil riwayat parkir hanya untuk pengguna yang sedang login
        $riwayatParkir = Tbriwayatparkir::where('user_id', auth()->user()->id)->get();

        return view('users.dashboard', compact('riwayatParkir'));
    }
}

