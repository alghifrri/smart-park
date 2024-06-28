@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Daftar Transaksi</div>
                    <div class="container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID User</th>
                                    <th>ID Kendaraan</th>
                                    <th>Harga Parkir</th>
                                    <th>Waktu Pembayaran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksis as $transaksi)
                                    <tr>
                                        <td>{{ $transaksi->idtransaksi }}</td>
                                        <td>{{ $transaksi->iduser }}</td>
                                        <td>{{ $transaksi->idkendaraan }}</td>
                                        <td>{{ $transaksi->hargaparkir }}</td>
                                        <td>{{ $transaksi->waktupembayaran }}</td>
                                        <td>
                                            <a href="{{ route('transactions.show', $transaksi->idtransaksi) }}" class="btn btn-info btn-sm">Detail</a>
                                            <form action="{{ route('transactions.keluar', $transaksi->idtransaksi) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Keluar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
