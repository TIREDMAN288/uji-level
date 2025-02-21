<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rating</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Edit Rating</h2>

        <form action="{{ route('admin.ratings.update', $rating) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Produk</label>
                <input type="text" class="form-control" value="{{ $rating->product->name }}" disabled>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Rating (1-5)</label>
                <input type="number" name="rating" class="form-control" min="1" max="5" value="{{ $rating->rating }}" required>
            </div>

            <div class="mb-3">
                <label for="review" class="form-label">Review</label>
                <textarea name="review" class="form-control">{{ $rating->review }}</textarea>
            </div>

            <button type="submit" class="btn btn-warning">Update</button>
            <a href="{{ route('admin.ratings.
