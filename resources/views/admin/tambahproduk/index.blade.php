<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
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
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            display: inline-block;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        td img {
            max-width: 100px;
            border-radius: 5px;
        }
        td a {
            color: #4CAF50;
            text-decoration: none;
            margin: 0 10px;
        }
        td a:hover {
            text-decoration: underline;
        }
        form button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        form button:hover {
            background-color: #e53935;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Daftar Produk</h1>

        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <a href="{{ route('tambahproduk.create') }}" class="btn">Tambah Produk</a>

        <table>
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
                        <td><img src="{{ asset('storage/' . $produk->foto) }}" alt="Foto Produk"></td>
                        <td>{{ $produk->judul }}</td>
                        <td>{{ $produk->harga }}</td>
                        <td>{{ $produk->warna }}</td>
                        <td>{{ $produk->rating }}</td>
                        <td>
                            <a href="{{ route('tambahproduk.show', $produk->id) }}">Lihat</a> |
                            <a href="{{ route('tambahproduk.edit', $produk->id) }}">Edit</a> |
                            <form action="{{ route('tambahproduk.destroy', $produk->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
