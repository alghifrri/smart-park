@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Tambah Slot Parkir</h1>
    <form action="{{ route('dataparkir.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="slot_parkir">Slot Parkir</label>
            <input type="text" class="form-control" id="slot_parkir" name="slot_parkir" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Tersedia">Tersedia</option>
                <option value="Tidak Tersedia">Tidak Tersedia</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
