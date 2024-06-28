<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbriwayatparkir;

class RiwayatParkirController extends Controller
{
    public function index()
    {
        $riwayatParkir = Tbriwayatparkir::with(['user', 'kendaraan'])->get();
        return view('admin.riwayatparkir.index', compact('riwayatParkir'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:tbuser,Id_user',
            'idkendaraan' => 'required|exists:tbkendaraan,id_kendaraan',
            'waktu_masuk' => 'required|date',
            'waktu_keluar' => 'required|date',
            'hargabayar' => 'required|integer',
        ]);

        $riwayat = new Tbriwayatparkir($request->all());
        $riwayat->calculateDuration();
        $riwayat->save();

        return redirect()->route('riwayat.index')->with('success', 'Riwayat parkir berhasil ditambahkan');
    }

    public function update(Request $request, Tbriwayatparkir $riwayat)
    {
        $request->validate([
            'user_id' => 'required|exists:tbuser,Id_user',
            'idkendaraan' => 'required|exists:tbkendaraan,id_kendaraan',
            'waktu_masuk' => 'required|date',
            'waktu_keluar' => 'required|date',
            'hargabayar' => 'required|integer',
        ]);

        $riwayat->fill($request->all());
        $riwayat->calculateDuration();
        $riwayat->save();

        return redirect()->route('riwayat.index')->with('success', 'Riwayat parkir berhasil diperbarui');
    }

    
}

