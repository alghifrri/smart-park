@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detail Pengguna</h1>
    <p>ID: {{ $user->Id_user }}</p>
    <p>Username: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Role: {{ $user->role }}</p>
    <p>Status: {{ $user->Status }}</p>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali ke Daftar Pengguna</a>
</div>
@endsection
