@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Dashboard</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <i class="mdi mdi-credit-card-multiple-outline"></i> Transaksi Hari Ini
                </div>
                <div class="card-body">
                    @if($todayTransactions->isEmpty())
                        <p>Belum ada transaksi untuk hari ini.</p>
                    @else
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Transaksi</th>
                                        <th>ID User</th>
                                        <th>ID Kendaraan</th>
                                        <th>Harga Parkir</th>
                                        <th>Waktu Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($todayTransactions as $transaksi)
                                    <tr>
                                        <td>{{ $transaksi->idtransaksi }}</td>
                                        <td>{{ $transaksi->iduser }}</td>
                                        <td>{{ $transaksi->idkendaraan }}</td>
                                        <td>{{ $transaksi->hargaparkir }}</td>
                                        <td>{{ $transaksi->waktupembayaran }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    <strong>Total Transaksi Hari Ini: </strong>{{ $totalTransaksiHariIni }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <i class="mdi mdi-car"></i> Kendaraan Parkir Hari Ini
                </div>
                <div class="card-body">
                    @if($kendaraanHariIni->isEmpty())
                        <p>Belum ada kendaraan yang parkir hari ini.</p>
                    @else
                        <ul>
                            @foreach ($kendaraanHariIni as $kendaraan)
                            <li>{{ $kendaraan->plat_nomor }} - {{ $kendaraan->jenis_kendaraan }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <i class="mdi mdi-parking"></i> Sisa Slot Parkir Tersedia
                </div>
                <div class="card-body">
                    <p>Jumlah slot parkir yang tersedia saat ini: {{ $sisaSlotParkir }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
