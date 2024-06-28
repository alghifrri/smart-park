@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Konfirmasi Penghapusan Slot Parkir</div>

                <div class="card-body">
                    <p>Anda yakin ingin menghapus slot parkir ini?</p>
                    <form action="{{ route('slotparkir.destroy', $slotParkir->iddataparkir) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ya, Hapus Slot Parkir</button>
                        <a href="{{ route('slotparkir.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
