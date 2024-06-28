<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\Tbdataparkir;

use App\Models\Tbriwayatparkir;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil data transaksi hari ini
        $todayTransactions = $this->getTodayTransactions();

        // Menghitung total transaksi hari ini
        $totalTransaksiHariIni = $todayTransactions->sum('hargaparkir');

        // Mengambil jumlah sisa slot parkir yang tersedia
        $sisaSlotParkir = Tbdataparkir::where('status', 'Tersedia')->count();

        // Mengambil data kendaraan yang parkir hari ini
        $kendaraanHariIni = Tbriwayatparkir::whereDate('waktu_masuk', today())->get();

        return view('dashboard', [
            'todayTransactions' => $todayTransactions,
            'totalTransaksiHariIni' => $totalTransaksiHariIni,
            'sisaSlotParkir' => $sisaSlotParkir,
            'kendaraanHariIni' => $kendaraanHariIni,
        ]);
    }

    public function getTodayTransactions()
    {
        $todayTransactions = DB::table('tbtransaksi')
            ->whereDate('waktupembayaran', Carbon::today())
            ->get();

        return $todayTransactions;
    }
}

