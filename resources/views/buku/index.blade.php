<!DOCTYPE html>
<html>

<head>
    <title>Data</title>

</head>

<body>
    <input type="text" class=buku>
    <h2>Data Buku</h2>
    <a href="{{ route('buku.create') }}">TAMBAH POST</a><br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($buku as $item)
            <tr>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>
                    <a href="{{ route('buku.edit', $item->id) }}">EDIT</a> /
                    <a href="#" onclick="event.preventDefault(); if(confirm('Yakin hapus data?')) { document.getElementById('delete-form-{{ $item->id }}').submit(); }">HAPUS</a>

                    <form id="delete-form-{{ $item->id }}" action="{{ route('buku.destroy', $item->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">Data belum tersedia.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <br>
    {{ $buku->links() }}
</body>

</html>