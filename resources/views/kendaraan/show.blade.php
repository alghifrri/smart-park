@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detail Kendaraan</h1>
    <div class="card">
        <div class="card-header">
            Detail Kendaraan
        </div>
        <div class="card-body">
            <p><strong>ID Kendaraan:</strong> {{ $kendaraan->id_kendaraan }}</p>
            <p><strong>User ID:</strong> {{ $kendaraan->user_id }}</p>
            <p><strong>Plat Nomor:</strong> {{ $kendaraan->plat_nomor }}</p>
            <p><strong>Jenis Kendaraan:</strong> {{ $kendaraan->jenis_kendaraan }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('kendaraan.index') }}"  class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection
