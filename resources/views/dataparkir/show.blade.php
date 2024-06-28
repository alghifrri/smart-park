@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detail Slot Parkir</h1>
    <div class="form-group">
        <label for="slot_parkir">Slot Parkir</label>
        <input type="text" class="form-control" id="slot_parkir" name="slot_parkir" value="{{ $dataparkir->slot_parkir }}" readonly>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" class="form-control" id="status" name="status" value="{{ $dataparkir->status }}" readonly>
    </div>
    <a href="{{ route('dataparkir.index') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection
