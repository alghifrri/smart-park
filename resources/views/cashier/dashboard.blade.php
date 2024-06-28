<!-- resources/views/kasir/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Dashboard Kasir</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Tugas Kasir
                </div>
                <div class="card-body">
                    <ul>
                        <li>Melakukan transaksi pembayaran</li>
                        <li>Memeriksa laporan transaksi harian</li>
                        <li>Mengelola kas dan mengisi laporan harian</li>
                        <!-- Tambahkan tugas lain sesuai kebutuhan -->
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                    Ringkasan Transaksi Hari Ini
                </div>
                <div class="card-body">
                    <p><strong>Total Transaksi Hari Ini:</strong> Rp{{ number_format($totalTransaksiHariIni, 0, ',', '.') }}</p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Jumlah</th>
                                    <th>Metode Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksiHariIni as $transaksi)
                                <tr>
                                    <td>{{ $transaksi->created_at->format('H:i') }}</td>
                                    <td>Rp{{ number_format($transaksi->jumlah, 0, ',', '.') }}</td>
                                    <td>{{ $transaksi->metode_pembayaran }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
