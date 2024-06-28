<?php

namespace App\Http\Controllers;

use App\Models\Tbkendaraan;
use App\Models\Tbriwayatparkir;
use App\Models\Tbtransaksi;
use Illuminate\Http\Request;

class DashborController extends Controller
{
    public function index()
    {
        // Mengambil data statistik
        $parkirMasuk = Tbriwayatparkir::whereNotNull('waktu_masuk')->count();
        $parkirKeluar = Tbriwayatparkir::whereNotNull('waktu_keluar')->count();
        $jenisKendaraan =Tbkendaraan::select('jenis_kendaraan', \DB::raw('count(*) as total'))
                            ->groupBy('jenis_kendaraan')
                            ->get();
        $jumlahJam = Tbriwayatparkir::sum('durasi');

        return view('dashboard.index', compact('parkirMasuk', 'parkirKeluar', 'jenisKendaraan', 'jumlahJam'));
    }
}
