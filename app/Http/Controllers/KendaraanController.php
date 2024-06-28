<?php
namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Tbkendaraan;
use App\Models\User; // pastikan Anda mengimpor model User
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Tbkendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        $users = User::all(); // Ambil semua user untuk dropdown
        return view('kendaraan.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:tbuser,Id_user',
            'plat_nomor' => 'required|string|max:10',
            'jenis_kendaraan' => 'required|in:Sedan,Minibus,Motor',
        ]);

        Tbkendaraan::create($request->all());

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan berhasil ditambahkan');
    }

    public function edit(Tbkendaraan $kendaraan)
    {
        $users = User::all(); // Ambil semua user untuk dropdown
        return view('kendaraan.edit', compact('kendaraan', 'users'));
    }

    public function update(Request $request, Tbkendaraan $kendaraan)
    {
        $request->validate([
            'user_id' => 'required|exists:tbuser,Id_user',
            'plat_nomor' => 'required|string|max:10',
            'jenis_kendaraan' => 'required|in:Sedan,Minibus,Motor',
        ]);

        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan berhasil diperbarui');
    }

    public function destroy(Tbkendaraan $kendaraan)
    {
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan berhasil dihapus');
    }
    public function show($id)
    {
        $kendaraan = Tbkendaraan::findOrFail($id);
        return view('kendaraan.show', compact('kendaraan'));
    }
}

