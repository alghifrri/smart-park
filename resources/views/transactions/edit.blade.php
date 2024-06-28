@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Transaksi</div>

                    <div class="card-body">
                        <form action="{{ route('transactions.update', $transaksi->idtransaksi) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="iduser">ID User:</label>
                                <input type="text" id="iduser" name="iduser" value="{{ $transaksi->iduser }}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="idkendaraan">ID Kendaraan:</label>
                                <input type="text" id="idkendaraan" name="idkendaraan" value="{{ $transaksi->idkendaraan }}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="hargaparkir">Harga Parkir:</label>
                                <input type="text" id="hargaparkir" name="hargaparkir" value="{{ $transaksi->hargaparkir }}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="waktupembayaran">Waktu Pembayaran:</label>
                                <input type="datetime-local" id="waktupembayaran" name="waktupembayaran" value="{{ $transaksi->waktupembayaran }}" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Transaksi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
