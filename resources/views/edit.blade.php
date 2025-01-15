<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sepatu</title>

    <!-- Link ke Bootstrap dan Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        .container {
            margin-top: 30px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-custom {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Sepatu</h1>

        <form action="{{ route('sepatu.update', $sepatu->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $sepatu->nama }}" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $sepatu->alamat }}" required>
            </div>

            <div class="form-group">
                <label for="nomor">Nomor:</label>
                <input type="text" name="nomor" id="nomor" class="form-control" value="{{ $sepatu->nomor }}" required>
            </div>

            <div class="form-group">
                <label for="catatan">Catatan:</label>
                <textarea name="catatan" id="catatan" class="form-control" rows="3">{{ $sepatu->catatan }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-custom">Update</button>
        </form>
    </div>

    <!-- Link ke Script Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
