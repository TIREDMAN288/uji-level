<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>

    <!-- Link ke Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .container {
            margin-top: 30px;
        }

        .form-group img {
            max-width: 150px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="mb-4">Edit Produk</h1>

        <!-- Form Edit Produk -->
        <form action="{{ route('tambahproduk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" name="foto">
                <!-- Menampilkan gambar yang ada saat ini -->
                <img src="{{ Storage::url($produk->foto) }}" alt="Foto Produk">
            </div>

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" value="{{ $produk->judul }}" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" name="harga" value="{{ $produk->harga }}" required>
            </div>

            <div class="form-group">
                <label for="warna">Warna</label>
                <input type="text" class="form-control" name="warna" value="{{ $produk->warna }}" required>
            </div>

            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" step="0.1" class="form-control" name="rating" value="{{ $produk->rating }}" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
