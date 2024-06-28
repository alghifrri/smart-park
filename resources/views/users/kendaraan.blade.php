@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Data Kendaraan Saya</h1>
    <div class="card mt-3">
        <div class="card-header">Daftar Kendaraan</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Kendaraan</th>
                        <th>Plat Nomor</th>
                        <th>Jenis Kendaraan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kendaraans as $kendaraan)
                    <tr>
                        <td>{{ $kendaraan->id_kendaraan }}</td>
                        <td>{{ $kendaraan->plat_nomor }}</td>
                        <td>{{ $kendaraan->jenis_kendaraan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
