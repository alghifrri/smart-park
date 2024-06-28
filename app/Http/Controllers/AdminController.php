<?php

namespace App\Http\Controllers;

use App\Models\Tbdataparkir;
use App\Models\Tbkendaraan;
use App\Models\Tbtransaksi;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Mengambil statistik data
        $totalUsers = User::count();
        $totalSlots = Tbdataparkir::count();
        $totalVehicles = Tbkendaraan::count();
        $totalTransactions = Tbtransaksi::count();
        $totalRevenue = Tbtransaksi::sum('hargaparkir');

        return view('admin.dashboard', compact('totalUsers', 'totalSlots', 'totalVehicles', 'totalTransactions', 'totalRevenue'));
    }

    
    

    // Metode lainnya untuk admin seperti manajemen pengguna, statistik, dll.
}
