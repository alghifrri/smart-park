@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Manajemen Transaksi</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Daftar Transaksi
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID Transaksi</th>
                                <th>ID User</th>
                                <th>ID Kendaraan</th>
                                <th>Harga Parkir</th>
                                <th>Waktu Pembayaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->id }}</td>
                                <td>{{ $transaction->id_user }}</td>
                                <td>{{ $transaction->id_kendaraan }}</td>
                                <td>{{ $transaction->hargaparkir }}</td>
                                <td>{{ $transaction->waktupembayaran }}</td>
                                <td>
                                    <!-- Tombol aksi, seperti edit, hapus -->
                                    <a href="{{ route('kasir.transactions.edit', $transaction->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('kasir.transactions.delete', $transaction->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus transaksi ini?')">Hapus</button>
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
