@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Dashboard Pengguna</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Informasi Pribadi
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                        <img src="{{ asset('user/images/' . Auth::user()->avatar) }}" alt="Foto Profil" class="img-thumbnail">

                        </div>
                        <div class="col-sm-9">
                            <p class="mb-1"><strong>Nama:</strong> {{ Auth::user()->name }}</p>
                            <p class="mb-1"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                            <p class="mb-1"><strong>Role:</strong> {{ Auth::user()->role }}</p>
                            <p class="mb-1"><strong>Status:</strong> {{ Auth::user()->Status }}</p>
                            <!-- Tambahkan info lain sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                    Riwayat Parkir
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Waktu Masuk</th>
                                    <th>Waktu Keluar</th>
                                    <th>Harga Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($riwayatParkir as $riwayat)
                                <tr>
                                    <td>{{ $riwayat->waktu_masuk }}</td>
                                    <td>{{ $riwayat->waktu_keluar }}</td>
                                    <td>{{ $riwayat->hargabayar }}</td>
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





