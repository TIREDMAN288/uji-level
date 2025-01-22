<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>

    <form action="{{ route('admin.tambahproduk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto"><br><br>

        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" value="{{ $produk->judul }}" required><br><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" value="{{ $produk->harga }}" required><br><br>

        <label for="warna">Warna:</label>
        <input type="text" name="warna" id="warna" value="{{ $produk->warna }}" required><br><br>

        <label for="rating">Rating:</label>
        <input type="number" name="rating" id="rating" value="{{ $produk->rating }}" min="1" max="5" required><br><br>

        <button type="submit">Perbarui Produk</button>
    </form>

    <br>
    <a href="{{ route('admin.tambahproduk.index') }}">Kembali ke Daftar Produk</a>
</body>
</html>
