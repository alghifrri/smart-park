<?php

namespace App\Http\Controllers;

use App\Models\Tbdataparkir;
use App\Models\Tbtransaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SlotParkirController extends Controller
{
    public function index()
    {
        // Ambil data transaksi hari ini
        $todayTransactions = Tbtransaksi::whereDate('waktupembayaran', Carbon::today())->get();

        // Hitung status setiap slot berdasarkan transaksi hari ini
        $slotParkir = [];

        // Simulasikan jumlah slot parkir
        $jumlahSlot = 3; // Misalnya ada 5 slot
        for ($i = 1; $i <= $jumlahSlot; $i++) {
            $status = 'Tersedia'; // Default slot kosong

            // Cek apakah ada transaksi untuk slot ini
            foreach ($todayTransactions as $transaksi) {
                if ($transaksi->slot_parkir == $i) {
                    $status = 'Terisi';
                    break;
                }
            }

            // Buat objek slot parkir
            $slotParkir[] = (object) [
                'id' => $i,
                'status' => $status
            ];
        }

        // Tampilkan view dengan data slot parkir
        return view('slotparkir.index', compact('slotParkir'));
    }

    public function create()
    {
        return view('slotparkir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'slot_parkir' => 'required|integer',
            'status' => 'required|in:Tersedia,Tidak Tersedia',
        ]);

        Tbdataparkir::create($request->all());

        return redirect()->route('slotparkir.index')
            ->with('success', 'Slot Parkir berhasil ditambahkan');
    }

    public function edit(Tbdataparkir $slotParkir)
    {
        return view('slotparkir.edit', compact('slotParkir'));
    }

    public function update(Request $request, Tbdataparkir $slotParkir)
    {
        $request->validate([
            'slot_parkir' => 'required|integer',
            'status' => 'required|in:Tersedia,Tidak Tersedia',
        ]);

        $slotParkir->update($request->all());

        return redirect()->route('slotparkir.index')
            ->with('success', 'Slot Parkir berhasil diperbarui');
    }

    public function destroy(Tbdataparkir $slotParkir)
    {
        $slotParkir->delete();

        return redirect()->route('slotparkir.index')
            ->with('success', 'Slot Parkir berhasil dihapus');
    }
}
