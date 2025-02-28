<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            background: #f5f5f5;
        }

        .container {
            display: flex;
            width: 100%;
        }

        /* Sidebar */
        .sidebar {
            width: 200px;
            background: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transition: background 0.3s;
        }

        .sidebar:hover {
            background: #f0f0f0;
        }

        .back-btn {
            background: red;
            color: white;
            border: none;
            font-size: 24px;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            margin-bottom: 20px;
            transition: background 0.3s;
        }

        .back-btn:hover {
            background: darkred;
        }

        .back-btn img {
            width: 20px;
        }

        .sidebar ul {
            list-style: none;
            width: 100%;
        }

        .sidebar li {
            display: flex;
            align-items: center;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .sidebar li:hover {
            background: #e0e0e0;
        }

        .sidebar li span {
            margin-right: 10px;
        }

        /* Profil Container */
        .profile-container {
            flex: 1;
            background: white;
            margin: 20px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }

        .profile-container:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .profile-container h2 {
            font-size: 22px;
            margin-bottom: 5px;
        }

        .profile-container p {
            font-size: 14px;
            color: gray;
            margin-bottom: 20px;
        }

        /* Form */
        form {
            display: grid;
            gap: 15px;
        }

        .form-group {
            display: flex;
            align-items: center;
        }

        .form-group label {
            width: 120px;
            font-size: 16px;
        }

        .form-group input,
        .form-group select {
            flex: 1;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }

        .form-group input:hover,
        .form-group select:hover {
            border-color: #888;
        }

        .profile-image {
            text-align: center;
            margin-top: 10px;
        }

        .profile-image img {
            width: 100px;
            border-radius: 50%;
            display: block;
            margin: 0 auto;
            transition: transform 0.3s;
        }

        .profile-image img:hover {
            transform: scale(1.1);
        }

        .upload-btn {
            background: none;
            border: 1px solid gray;
            padding: 5px;
            margin-top: 10px;
            font-size: 12px;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
        }

        .upload-btn:hover {
            background: gray;
            color: white;
        }

        /* Tombol Simpan */
        .save-btn {
            background: red;
            color: white;
            justify-content: left;
            position: relative;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            width: 10%;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background 0.3s;
        }

        .save-btn:hover {
            background: darkred;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <a href="{{ url('/home') }}" class="back-btn"><img src="{{ asset('image/asset -ujilevel/back.png') }}"
                    alt=""></a>
            <ul>
                <li><span>👤</span> Akun Saya</li>
                <li><span>📦</span> Pesanan Saya</li>
                <li><span>🎟</span> Voucher Saya</li>
                <li><span>🚪</span> <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <!-- Link yang akan submit form -->
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                 this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form></li>
            </ul>
        </aside>

        <!-- Form Profil -->
        <main class="profile-container">
            <h2>Profil saya</h2>
            <p>Kelola informasi profil Anda untuk mengontrol, melindungi, dan mengamankan akun</p>

            <form action="{{ route('user.updateProfile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" value="{{ $profile->username ?? '' }}" disabled
                        placeholder="Username hanya dapat diubah satu (1) kali">
                </div>

                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" name="name" value="{{ $profile->name ?? '' }}">
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" value="{{ $profile->email ?? '' }}">
                </div>

                <div class="form-group">
                    <label>No Telp:</label>
                    <input type="text" name="phone" value="{{ $profile->phone ?? '' }}"
                        placeholder="6 dengan angka">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                    <label><input type="radio" name="gender" value="Laki - Laki"
                            {{ ($profile->gender ?? '') == 'Laki - Laki' ? 'checked' : '' }}> Laki - Laki</label>
                    <label><input type="radio" name="gender" value="Perempuan"
                            {{ ($profile->gender ?? '') == 'Perempuan' ? 'checked' : '' }}> Perempuan</label>
                </div>

                <div class="form-group">
                    <label>Alamat:</label>
                    <select name="province">
                        <option>Provinsi</option>
                    </select>
                    <select name="city">
                        <option>Kota</option>
                    </select>
                    <select name="district">
                        <option>Kecamatan</option>
                    </select>
                    <input type="text" name="postal_code" value="{{ $profile->postal_code ?? '' }}"
                        placeholder="Kode pos">
                </div>

                <div class="profile-image">
                    <img src="{{ isset($profile) && $profile && $profile->profile_image ? asset('storage/' . $profile->profile_image) : asset('profile-placeholder.png') }}"
                    alt="Foto Profil">
                    <input type="file" name="profile_image" class="upload-btn">
                </div>

                <button type="submit" class="save-btn" onclick="window.location.href='{{ url('/profile') }}'">Simpan</button>
            </form>
        </main>

    </div>
</body>
<script>
    document.querySelector(".save-btn").addEventListener("click", function(event) {
        event.preventDefault();
        alert("Profil berhasil disimpan!");
    });
</script>

</html>
