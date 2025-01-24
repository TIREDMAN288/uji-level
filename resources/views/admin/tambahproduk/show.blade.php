<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>

    <p><strong>Foto:</strong></p>
    <img src="{{ asset('storage/' . $produks->foto) }}" alt="Foto Produk" width="200"><br><br>

    <p><strong>Judul:</strong> {{ $produk->judul }}</p>
    <p><strong>Harga:</strong> {{ $produk->harga }}</p>
    <p><strong>Warna:</strong> {{ $produk->warna }}</p>
    <p><strong>Rating:</strong> {{ $produk->rating }}</p>

    <br>
    <a href="{{ route('admin.tambahproduk.index') }}">Kembali ke Daftar Produk</a>
</body>
</html>
