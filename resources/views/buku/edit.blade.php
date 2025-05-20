<!DOCTYPE html>
<html>

<head>
    <title>Form Edit Buku</title>
</head>

<body>
    <h2>Form Edit Buku</h2>

    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Judul:</label><br>
        <input type="text" name="judul" value="{{ old('judul', $buku->judul) }}"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi">{{ old('deskripsi', $buku->deskripsi) }}</textarea><br><br>

        <button type="submit">SIMPAN</button>
    </form>

    <br>
    <a href="{{ route('buku.index') }}">Kembali ke Index</a>
</body>

</html>