<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('admin.tambahproduk.create') }}">Tambah Produk</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Judul</th>
                <th>Harga</th>
                <th>Warna</th>
                <th>Rating</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $produk)
                <tr>
                    <td><img src="{{ asset('storage/' . $produk->foto) }}" alt="Foto Produk" width="100"></td>
                    <td>{{ $produk->judul }}</td>
                    <td>{{ $produk->harga }}</td>
                    <td>{{ $produk->warna }}</td>
                    <td>{{ $produk->rating }}</td>
                    <td>
                        <a href="{{ route('admin.tambahproduk.show', $produk->id) }}">Lihat</a> |
                        <a href="{{ route('admin.tambahproduk.edit', $produk->id) }}">Edit</a> |
                        <form action="{{ route('admin.tambahproduk.destroy', $produk->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
