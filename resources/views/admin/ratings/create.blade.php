<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Rating</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Rating</h2>

        <form action="{{ route('ratings.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="product_id" class="form-label">Pilih Produk</label>
                <select name="product_id" class="form-control" required>
                    @foreach(\App\Models\rating::all() as $rating)
                        <option value="{{ $rating->id }}">{{ $rating->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Rating (1-5)</label>
                <input type="number" name="rating" class="form-control" min="1" max="5" required>
            </div>

            <div class="mb-3">
                <label for="review" class="form-label">Review (Opsional)</label>
                <textarea name="review" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('ratings.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
