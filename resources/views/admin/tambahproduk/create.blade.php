<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 2em;
            color: #444;
        }
        .container {
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="number"] {
            width: 50%;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .back-link a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Tambah Produk Baru</h1>

    <form action="{{ route('tambahproduk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto" required><br><br>

            <label for="judul">Judul:</label>
            <input type="text" name="judul" id="judul" required><br><br>

            <label for="harga">Harga:</label>
            <input type="number" name="harga" id="harga" required><br><br>

            <label for="warna">Warna:</label>
            <input type="text" name="warna" id="warna" required><br><br>

            <label for="rating">Rating:</label>
            <input type="number" name="rating" id="rating" min="1" max="5" required><br><br>

            <button type="submit">Simpan Produk</button>
        </form>

    <br>
    <a href="{{ route('tambahproduk.index') }}">Kembali ke Daftar Produk</a>
</body>
</html>
