<?php

namespace App\Http\Controllers;

use App\Models\Tbtransaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
    {
        return view('kasir.dashboard');
    }

    public function dashboard()
    {
        // Ambil data transaksi sebagai contoh
        $transaksiHariIni = Tbtransaksi::whereDate('created_at', today())->get();
        $totalTransaksiHariIni = $transaksiHariIni->sum('jumlah'); // Sesuaikan dengan field di tabel transaksi Anda

        return view('cashier.dashboard', [
            'transaksiHariIni' => $transaksiHariIni,
            'totalTransaksiHariIni' => $totalTransaksiHariIni,
        ]);
    }

    // Method untuk menampilkan form masuk kendaraan
    public function showMasukForm()
    {
        return view('kasir.masuk');
    }

    // Method untuk menyimpan data masuk kendaraan
    public function simpanMasuk(Request $request)
    {
        // Validasi request jika diperlukan

        // Simpan data masuk kendaraan ke dalam database
        Tbtransaksi::create([
            'iduser' => $request->iduser, // Sesuaikan dengan cara Anda mengelola user
            'idkendaraan' => $request->idkendaraan,
            'hargaparkir' => $this->hitungHargaParkir($request->jenis_kendaraan),
            'waktupembayaran' => Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Data masuk kendaraan berhasil disimpan.');
    }

    // Method untuk menampilkan form keluar kendaraan
    public function showKeluarForm()
    {
        return view('kasir.keluar');
    }

    // Method untuk menyimpan data keluar kendaraan dan pembayaran
    public function simpanKeluar(Request $request)
    {
        // Validasi request jika diperlukan

        // Ambil data transaksi terakhir untuk kendaraan ini
        $transaksi = Tbtransaksi::where('idkendaraan', $request->idkendaraan)
                                ->orderBy('waktupembayaran', 'desc')
                                ->first();

        if (!$transaksi) {
            return redirect()->back()->with('error', 'Data transaksi tidak ditemukan.');
        }

        // Update data keluar kendaraan dan harga bayar
        $transaksi->update([
            'waktukeluar' => Carbon::now(),
            'hargabayar' => $this->hitungHargaParkir($request->jenis_kendaraan, $transaksi->waktupembayaran),
        ]);

        return redirect()->back()->with('success', 'Data keluar kendaraan berhasil disimpan.');
    }

    // Method untuk menghitung harga parkir berdasarkan jenis kendaraan
    private function hitungHargaParkir($jenis_kendaraan, $waktu_masuk = null)
    {
        $tarif_motor = 2000;
        $tarif_mobil = 5000;
        $tarif_truk = 8000;

        $tarif_per_jam = 1000; // Misalnya tarif per jam

        // Hitung selisih waktu untuk mendapatkan jumlah jam parkir
        if ($waktu_masuk) {
            $waktu_masuk = Carbon::parse($waktu_masuk);
            $waktu_keluar = Carbon::now();
            $durasi_parkir = $waktu_keluar->diffInHours($waktu_masuk); // Hitung selisih dalam jam
        } else {
            $durasi_parkir = 1; // Jika waktu masuk tidak ada, asumsikan 1 jam
        }

        // Hitung harga parkir berdasarkan jenis kendaraan
        switch ($jenis_kendaraan) {
            case 'Motor':
                return $tarif_motor * $durasi_parkir;
            case 'Mobil':
                return $tarif_mobil * $durasi_parkir;
            case 'Truk':
                return $tarif_truk * $durasi_parkir;
            default:
                return 0; // Default jika jenis kendaraan tidak dikenali
        }
    }

    

    
   
}
