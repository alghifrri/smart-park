@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Manajemen Pengguna</h1>
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addUserModal">Tambah Pengguna</button>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Jenis Kelamin</th> <!-- Tambahkan kolom Jenis Kelamin -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->Id_user }}</td>
                <td>
                    @if($user->avatar)
                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="img-thumbnail" width="50">
                    @else
                        @if($user->gender == 'male')
                            <img src="{{ asset('storage/default-avatar-male.png') }}" alt="Default Avatar Male" class="img-thumbnail" width="50">
                        @else
                            <img src="{{ asset('storage/default-avatar-female.png') }}" alt="Default Avatar Female" class="img-thumbnail" width="50">
                        @endif
                    @endif
                </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->Status }}</td>
                <td>{{ $user->gender }}</td> <!-- Tampilkan Jenis Kelamin -->
                <td>
                    <a href="{{ route('users.show', $user->Id_user) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('users.edit', $user->Id_user) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('users.destroy', $user->Id_user) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- Modal Tambah Pengguna -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Tambah Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role" id="role" class="form-control" required>
                            <option value="Admin">Admin</option>
                            <option value="Kasir">Kasir</option>
                            <option value="Pengguna">Pengguna</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Status">Status</label>
                        <select name="Status" id="Status" class="form-control" required>
                            <option value="Member">Member</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" name="avatar" id="avatar" class="form-control-file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection