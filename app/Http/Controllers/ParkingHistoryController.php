<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbtransaksi;

class ParkingHistoryController extends Controller
{
    public function index()
    {
        // Mengambil semua riwayat parkir
        $parkingHistories = Tbtransaksi::with('user', 'dataparkir')->get();

        return view('admin.riwayatparkir', compact('riwayatparkir'));
    }
}
