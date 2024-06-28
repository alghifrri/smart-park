@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Riwayat Parkir</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info text-white">
                    Daftar Riwayat Parkir
                </div>
                <div class="card-body">
                    @if($riwayatParkir->isEmpty())
                        <p>Anda belum memiliki riwayat parkir.</p>
                    @else
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Waktu Masuk</th>
                                        <th>Waktu Keluar</th>
                                        <th>Durasi (Menit)</th>
                                        <th>Harga Bayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($riwayatParkir as $riwayat)
                                    <tr>
                                        <td>{{ $riwayat->waktu_masuk }}</td>
                                        <td>{{ $riwayat->waktu_keluar }}</td>
                                        <td>{{ $riwayat->durasi }}</td>
                                        <td>{{ $riwayat->hargabayar }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
