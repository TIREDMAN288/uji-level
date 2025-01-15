<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sepatu</title>

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
        <h1>Orderan</h1>

        <a href="{{ route('sepatu.create') }}" class="btn btn-primary mb-3">Tambah Sepatu</a>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Nomor</th>
                        <th>Catatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sepatus as $sepatu)
                        <tr>
                            <td>{{ $sepatu->nama }}</td>
                            <td>{{ $sepatu->alamat }}</td>
                            <td>{{ $sepatu->nomor }}</td>
                            <td>{{ $sepatu->catatan }}</td>
                            <td>
                                <a href="{{ route('sepatu.edit', $sepatu->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a> 
                                |
                                <form action="{{ route('sepatu.destroy', $sepatu->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Link ke Script Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
