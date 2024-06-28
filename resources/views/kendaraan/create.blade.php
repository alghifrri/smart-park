@extends('layouts.master')


@section('content')
<div class="container">
    <h1>Tambah Kendaraan</h1>
    <form action="{{ route('kendaraan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User</label>
            <select class="form-control" id="user_id" name="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->Id_user }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="plat_nomor">Plat Nomor</label>
            <input type="text" class="form-control" id="plat_nomor" name="plat_nomor" required>
        </div>
        <div class="form-group">
            <label for="jenis_kendaraan">Jenis Kendaraan</label>
            <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" required>
                <option value="Sedan">Sedan</option>
                <option value="Minibus">Minibus</option>
                <option value="Motor">Motor</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
