@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Transaksi Baru</div>

                    <div class="card-body">
                        <form action="{{ route('transaksi.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="iduser">User ID:</label>
                                <input type="text" name="iduser" id="iduser" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="idkendaraan">Kendaraan ID:</label>
                                <input type="text" name="idkendaraan" id="idkendaraan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="hargaparkir">Harga Parkir:</label>
                                <input type="text" name="hargaparkir" id="hargaparkir" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="waktupembayaran">Waktu Pembayaran:</label>
                                <input type="datetime-local" name="waktupembayaran" id="waktupembayaran" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
