<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah Buku</title>
</head>

<body>
    <h2>Form Tambah Buku</h2>

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="judul" value="{{ old('judul') }}"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi">{{ old('deskripsi') }}</textarea><br><br>

        <button type="submit">SIMPAN</button>
    </form>

    <br>
    <a href="{{ route('buku.index') }}">Kembali ke Index</a>
</body>

</html>