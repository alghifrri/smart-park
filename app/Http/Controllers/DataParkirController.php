<?php

namespace App\Http\Controllers;

use App\Models\Tbdataparkir;
use Illuminate\Http\Request;

class DataParkirController extends Controller
{
    public function index()
    {
        $dataparkirs = Tbdataparkir::all();
        return view('dataparkir.index', compact('dataparkirs'));
    }

    public function create()
    {
        return view('dataparkir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'slot_parkir' => 'required|integer',
            'status' => 'required|in:Tersedia,Tidak Tersedia',
        ]);

        Tbdataparkir::create($request->all());

        return redirect()->route('dataparkir.index')
            ->with('success', 'Slot Parkir berhasil ditambahkan');
    }

    public function edit(Tbdataparkir $dataparkir)
    {
        return view('dataparkir.edit', compact('dataparkir'));
    }

    public function show(Tbdataparkir $dataparkir)
    {
        return view('dataparkir.show', compact('dataparkir'));
    }
    public function update(Request $request, Tbdataparkir $dataparkir)
    {
        $request->validate([
            'slot_parkir' => 'required|integer',
            'status' => 'required|in:Tersedia,Tidak Tersedia',
        ]);

        $dataparkir->update($request->all());

        return redirect()->route('dataparkir.index')
            ->with('success', 'Slot Parkir berhasil diperbarui');
    }

    public function destroy(Tbdataparkir $dataparkir)
    {
        $dataparkir->delete();

        return redirect()->route('dataparkir.index')
            ->with('success', 'Slot Parkir berhasil dihapus');
    }
}
