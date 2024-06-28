<h1>Tambah Pengguna</h1>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Username:</label>
        <input type="text" name="username" id="username" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="role">Role:</label>
        <select name="role" id="role" class="form-control" required>
            <option value="Admin">Admin</option>
            <option value="Kasir">Kasir</option>
            <option value="Pengguna">Pengguna</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Status">Status:</label>
        <select name="Status" id="Status" class="form-control" required>
            <option value="Member">Member</option>
            <option value="Nonmember">Nonmember</option>
        </select>
    </div>

    <!-- Bagian Upload Foto Profil -->
    <div class="form-group">
        <label for="avatar">Upload Foto Profil:</label>
        <input type="file" name="avatar" id="avatar" class="form-control-file" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
