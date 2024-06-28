@extends('layouts.master')

@section('page-title', 'Data Parkir')

@section('content')
<div class="container">
    <h1>Manajemen Slot Parkir</h1>
    <a href="{{ route('dataparkir.create') }}" class="btn btn-primary">Tambah Slot Parkir</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Slot Parkir</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataparkirs as $dataparkir)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dataparkir->slot_parkir }}</td>
                <td>{{ $dataparkir->status }}</td>
                <td>
                <a href="{{ route('dataparkir.show', $dataparkir->iddataparkir) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('dataparkir.edit', $dataparkir->iddataparkir) }}" class="btn btn-warning btn-sm">Edit</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
