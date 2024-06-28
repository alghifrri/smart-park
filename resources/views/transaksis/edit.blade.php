@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Transaksi</div>

                    <div class="card-body">
                        <form action="{{ route('transaksi.update', $transaksi->idtransaksi) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="iduser">ID User:</label>
                        <input type="text" id="iduser" name="iduser" value="{{ $transaksi->iduser }}" required><br><br>

                        <label for="idkendaraan">ID Kendaraan:</label>
                        <input type="text" id="idkendaraan" name="idkendaraan" value="{{ $transaksi->idkendaraan }}" required><br><br>

                        <label for="hargaparkir">Harga Parkir:</label>
                        <input type="text" id="hargaparkir" name="hargaparkir" value="{{ $transaksi->hargaparkir }}" required><br><br>

                        <label for="waktupembayaran">Waktu Pembayaran:</label>
                        <input type="datetime-local" id="waktupembayaran" name="waktupembayaran" value="{{ $transaksi->waktupembayaran }}" required><br><br>

                        <button type="submit">Update Transaksi</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
