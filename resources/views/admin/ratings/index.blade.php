<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Rating</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-3">Daftar Rating</h2>
        
        <a href="{{ route('ratings.create') }}" class="btn btn-primary mb-3">Tambah Rating</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Oleh</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ratings as $index => $rating)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $rating->product->name }}</td>
                    <td>{{ $rating->rating }} / 5</td>
                    <td>{{ $rating->review }}</td>
                    <td>{{ $rating->user->name }}</td>
                    <td>
                        <a href="{{ route('admin.ratings.edit', $rating) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.ratings.destroy', $rating) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus rating ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
