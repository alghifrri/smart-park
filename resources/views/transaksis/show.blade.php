@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Detail Transaksi</div>

                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $transaksi->id }}</td>
                                </tr>
                                <tr>
                                    <th>User ID</th>
                                    <td>{{ $transaksi->iduser }}</td>
                                </tr>
                                <tr>
                                    <th>Kendaraan ID</th>
                                    <td>{{ $transaksi->idkendaraan }}</td>
                                </tr>
                                <tr>
                                    <th>Harga Parkir</th>
                                    <td>{{ $transaksi->hargaparkir }}</td>
                                </tr>
                                <tr>
                                    <th>Waktu Pembayaran</th>
                                    <td>{{ $transaksi->waktupembayaran }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


