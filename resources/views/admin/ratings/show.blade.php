<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Rating</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Detail Rating</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Produk: {{ $rating->product->name }}</h5>
                <p><strong>Rating:</strong> {{ $rating->rating }} / 5</p>
                <p><strong>Review:</strong> {{ $rating->review }}</p>
                <p><strong>Diberikan oleh:</strong> {{ $rating->user->name }}</p>
                <p><strong>Tanggal:</strong> {{ $rating->created_at->format('d M Y, H:i') }}</p>
            </div>
        </div>

        <a href="{{ route('admin.ratings.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
