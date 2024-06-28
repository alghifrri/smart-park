@extends('layouts.master')

@section('page-title', 'Data Kendaraan')

@section('content')
<div class="container">
    <h1>Data Kendaraan</h1>
    <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3">Tambah Kendaraan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Kendaraan</th>
                <th>User ID</th>
                <th>Plat Nomor</th>
                <th>Jenis Kendaraan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kendaraans as $kendaraan)
                <tr>
                    <td>{{ $kendaraan->id_kendaraan }}</td>
                    <td>{{ $kendaraan->user_id }}</td>
                    <td>{{ $kendaraan->plat_nomor }}</td>
                    <td>{{ $kendaraan->jenis_kendaraan }}</td>
                    <td>
                          <a href="{{ route('kendaraan.show', $kendaraan->id_kendaraan) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('kendaraan.edit', $kendaraan->id_kendaraan) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kendaraan.destroy', $kendaraan->id_kendaraan) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
