@extends('layouts.master')

@section('page-title', 'Data Slot')

@section('content')
<div class="container">
    <h1>Data Slot Parkir</h1>
    <div class="row">
        @foreach ($slotParkir as $slot)
            <div class="col-md-4 mb-3">
                <div class="card {{ $slot->status == 'Tersedia' ? 'slot-kosong' : 'slot-terisi' }}">
                    <div class="card-body">
                        <h5 class="card-title">Slot Parkir {{ $slot->id }}</h5>
                        <p class="card-text">
                            Status: {{ $slot->status }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
