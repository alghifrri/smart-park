@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Edit Pengguna</h1>
    <form action="{{ route('users.update', $user->Id_user) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="password">Password (kosongkan jika tidak ingin mengubah):</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select name="role" id="role" class="form-control" required>
                <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="Kasir" {{ $user->role == 'Kasir' ? 'selected' : '' }}>Kasir</option>
                <option value="Pengguna" {{ $user->role == 'Pengguna' ? 'selected' : '' }}>Pengguna</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Status">Status:</label>
            <select name="Status" id="Status" class="form-control" required>
                <option value="Member" {{ $user->Status == 'Member' ? 'selected' : '' }}>Member</option>
            </select>
        </div>
        <div class="form-group">
    <label for="gender">Jenis Kelamin:</label>
    <select name="gender" id="gender" class="form-control" required>
        <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Pria</option>
        <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Wanita</option>
    </select>
</div>
        <div class="form-group">
            <label for="avatar">Avatar:</label>
            @if($user->avatar)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="img-thumbnail" width="100">
                </div>
            @endif
            <input type="file" name="avatar" id="avatar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
