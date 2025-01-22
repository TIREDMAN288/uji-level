<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>

    <!-- Link ke Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .container {
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="mb-4">Tambah Produk</h1>

       
        <form action="{{ route('tambahproduk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" name="foto" required>
            </div>

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" name="harga" required>
            </div>

            <div class="form-group">
                <label for="warna">Warna</label>
                <input type="text" class="form-control" name="warna" required>
            </div>

            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" step="0.1" class="form-control" name="rating" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
