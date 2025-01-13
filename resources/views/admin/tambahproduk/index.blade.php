<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>

    <!-- Link ke Bootstrap dan Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        .img-fluid {
            object-fit: cover;
        }

        .fa-star {
            font-size: 1rem;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .container {
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="mb-4">Daftar Produk</h1>

        <!-- Tombol Tambah Produk -->
        <a href="{{ route('tambahproduk.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Tambah Produk
        </a>

        <!-- Tabel Daftar Produk -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
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
                    @foreach ($produk as $item)
                        <tr>
                            <td><img src="{{ Storage::url($item->foto) }}" width="100" class="img-fluid" alt="Foto Produk"></td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td>{{ $item->warna }}</td>
                            <td>
                                @for ($i = 0; $i < 5; $i++)
                                    <span class="fa fa-star {{ $i < $item->rating ? 'text-warning' : 'text-muted' }}"></span>
                                @endfor
                            </td>
                            <td>
                                <!-- Tombol Edit -->
                                <a href="{{ route('tambahproduk.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('tambahproduk.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap dan JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
