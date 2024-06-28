<form action="{{ route('kasir.simpan_keluar') }}" method="POST">
    @csrf
    <input type="hidden" name="iduser" value="{{ Auth::user()->id_user }}">
    <input type="text" name="idkendaraan" placeholder="Nomor Plat Kendaraan" required>
    <select name="jenis_kendaraan" required>
        <option value="Motor">Motor</option>
        <option value="Minibus">Minibus</option>
        <option value="Truk">Truk</option>
    </select>
    <button type="submit">Keluar Kendaraan</button>
</form>
