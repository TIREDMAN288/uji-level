<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: white;
            margin: 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .success-message {
            background-color: #28a745;
            color: white;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .add-product-btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #28a745;
            color: white;
            text-align: center;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .add-product-btn:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        table thead {
            background-color: #007bff;
            color: white;
        }

        table th,
        table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        table img {
            width: 120px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        table img:hover {
            transform: scale(1.05);
        }

        .action-links {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .action-links a,
        .action-links form {
            display: inline-block;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            color: white;
            text-align: center;
        }

        .btn-view {
            background-color: #17a2b8;
        }

        .btn-view:hover {
            background-color: #138496;
        }

        .btn-edit {
            background-color: #ffc107;
            color: #333;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .btn-delete button {
            background: none;
            border: none;
            color: white;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-delete button:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Daftar Produk</h1>

    <div class="container">
        @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
        @endif

        <a href="{{ route('tambahproduk.create') }}" class="add-product-btn">+ Tambah Produk</a>

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
                    <td>
                        <img src="{{ asset('storage/' . $produk->foto) }}" alt="Foto Produk" width="150">
                    </td>
                    <td>{{ $produk->judul }}</td>
                    <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                    <td>{{ ucfirst($produk->warna) }}</td>
                    <td>⭐ {{ $produk->rating }}</td>
                    <td>
                        <div class="action-links">
                            <a href="{{ route('tambahproduk.show', $produk->id) }}" class="btn btn-view">Lihat</a>
                            <a href="{{ route('tambahproduk.edit', $produk->id) }}" class="btn btn-edit">Edit</a>
                            <form action="{{ route('tambahproduk.destroy', $produk->id) }}" method="POST" class="btn-delete">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>