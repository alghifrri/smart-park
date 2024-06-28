@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Edit Kendaraan</h1>
    <form action="{{ route('kendaraan.update', $kendaraan->id_kendaraan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user_id">User</label>
            <select class="form-control" id="user_id" name="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->Id_user }}" {{ $kendaraan->user_id == $user->Id_user ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="plat_nomor">Plat Nomor</label>
            <input type="text" class="form-control" id="plat_nomor" name="plat_nomor" value="{{ $kendaraan->plat_nomor }}" required>
        </div>
        <div class="form-group">
            <label for="jenis_kendaraan">Jenis Kendaraan</label>
            <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" required>
                <option value="Sedan" {{ $kendaraan->jenis_kendaraan == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                <option value="Minibus" {{ $kendaraan->jenis_kendaraan == 'Minibus' ? 'selected' : '' }}>Minibus</option>
                <option value="Motor" {{ $kendaraan->jenis_kendaraan == 'Motor' ? 'selected' : '' }}>Motor</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
