@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <!-- Statistik Section -->
    <div class="row">
        <!-- Parkir Masuk -->
        <div class="col-md-6 col-lg-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h4 class="card-title">Parkir Masuk</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="mdi mdi-car font-50"></i>
                        <div class="text-right">
                            <h2 class="font-light mb-0">{{ $parkirMasuk }}</h2>
                            <span class="text-white">Total Parkir Masuk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Parkir Keluar -->
        <div class="col-md-6 col-lg-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h4 class="card-title">Parkir Keluar</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="mdi mdi-car-off font-50"></i>
                        <div class="text-right">
                            <h2 class="font-light mb-0">{{ $parkirKeluar }}</h2>
                            <span class="text-white">Total Parkir Keluar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Jenis Kendaraan -->
         <div class="col-md-6 col-lg-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h4 class="card-title">Jenis Kendaraan</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="mdi mdi-car font-50"></i>
                        <div class="text-right">
                            @foreach($jenisKendaraan as $jenis)
                                <h5 class="font-light mb-0">{{ $jenis->jenis_kendaraan }}: {{ $jenis->total }}</h5>
                            @endforeach
                            <span class="text-white">Total Jenis Kendaraan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumlah Jam -->
        <div class="col-md-6 col-lg-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h4 class="card-title">Jumlah Jam</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <i class="mdi mdi-timer font-50"></i>
                        <div class="text-right">
                            <h2 class="font-light mb-0">{{ $jumlahJam }}</h2>
                            <span class="text-white">Total Jam Parkir</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
    <!-- End Statistik Section -->
</div>
@endsection
