@extends('layouts.master')

@section('page-title', 'Data Riwayat Parkir')
@section('content')
<div class="container">
    <h1>Riwayat Parkir</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pengguna</th>
                <th>Kendaraan</th>
                <th>Waktu Masuk</th>
                <th>Waktu Keluar</th>
                <th>Harga Bayar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($riwayatParkir as $riwayat)
            <tr>
                <td>{{ $riwayat->id_riwayat }}</td>
                <td>{{ $riwayat->user->name }}</td>
                <td>{{ $riwayat->kendaraan->plat_nomor }}</td>
                <td>{{ $riwayat->waktu_masuk }}</td>
                <td>{{ $riwayat->waktu_keluar }}</td>
                <td>{{ $riwayat->hargabayar }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
