<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Saya</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
    <style>
   /* Reset dan dasar */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Body */
body {
    display: flex;
    background: #f4f5f7;
    min-height: 100vh;
    align-items: center;
    justify-content: center;
}

/* Sidebar */
.sidebar {
    width: 250px;
    background: white;
    padding: 20px;
    box-shadow: 2px 0 12px rgba(0, 0, 0, 0.1);
    position: fixed;
    height: 100vh;
    left: 0;
    top: 0;
}

/* Tombol Kembali */
.back-btn {
    background: red;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 50%;
    font-size: 18px;
    cursor: pointer;
    transition: all 0.3s;
}

.back-btn:hover {
    transform: scale(1.1) rotate(-10deg);
    background: darkred;
}

/* Profil User */
.user-profile {
    text-align: center;
    margin-top: 20px;
}

.user-profile img {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    border: 3px solid #ddd;
    transition: transform 0.4s ease-in-out;
}

.user-profile img:hover {
    transform: rotate(360deg) scale(1.05);
}

.user-profile p {
    font-size: 16px;
    font-weight: bold;
    margin-top: 8px;
}

.user-profile a {
    font-size: 14px;
    color: #007bff;
    text-decoration: none;
    display: block;
    margin-top: 5px;
    transition: color 0.3s;
}

.user-profile a:hover {
    color: #ff9800;
}

/* Sidebar Menu */
nav ul {
    list-style: none;
    padding-top: 25px;
}

nav ul li {
    padding: 12px;
    font-size: 16px;
    display: flex;
    align-items: center;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    border-radius: 8px;
}

nav ul li:hover {
    background: #ff9800;
    color: white;
    transform: translateX(8px);
    box-shadow: 2px 2px 10px rgba(255, 152, 0, 0.3);
}

nav ul li span {
    margin-right: 12px;
}

/* Kontainer Profile */
.profile-container {
    flex-grow: 1;
    max-width: 800px;
    padding: 40px;
    margin-left: 270px; /* Sesuaikan dengan sidebar */
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    text-align: center;
    animation: fadeIn 0.6s ease-in-out;
}

/* Animasi masuk */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Judul */
h2 {
    font-size: 26px;
    margin-bottom: 15px;
    font-weight: bold;
    color: #333;
}

/* Kartu Profil */
.profile-card {
    background: white;
    padding: 25px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    gap: 25px;
    max-width: 700px;
    transition: box-shadow 0.3s ease-in-out;
    margin: 0 auto;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.profile-card:hover {
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

/* Foto Profil */
.profile-img {
    width: 110px;
    height: 110px;
    border-radius: 50%;
    border: 3px solid #ff9800;
    transition: transform 0.3s ease;
}

.profile-img:hover {
    transform: scale(1.15);
}

/* Informasi Profil */
.profile-info {
    text-align: left;
}

.profile-info h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 5px;
}

.profile-info p {
    font-size: 14px;
    color: #666;
    margin-top: 3px;
}

.address {
    font-style: italic;
    color: #999;
    margin-top: 8px;
}

/* Tombol Pilih Gambar */
.upload-btn {
    background: #eee;
    border: none;
    padding: 8px 14px;
    cursor: pointer;
    margin-top: 12px;
    transition: background 0.3s, transform 0.2s;
    border-radius: 6px;
}

.upload-btn:hover {
    background: #ddd;
    transform: scale(1.05);
}

/* Tombol Ubah */
.edit-btn {
    background: red;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 6px;
    font-size: 16px;
    margin-top: 15px;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
}

.edit-btn:hover {
    background: darkred;
    transform: scale(1.1);
}

</style>
</head>
<body>

    <div class="sidebar">
        <button class="back-btn">&#8592;</button>
        <div class="user-profile">
            <img src="user.png" alt="User Profile">
            <p>User</p>
            <a href="#">✏️ Ubah Profil</a>
        </div>
        <nav>
            <ul>
                <li><span>👤</span> Akun Saya</li>
                <li><span>📋</span> Pesanan Saya</li>
                <li><span>🎟️</span> Voucher Saya</li>
            </ul>
        </nav>
    </div>

    <main class="profile-container">
        <h2>Akun Saya</h2>
        <div class="profile-card">
            <img src="{{ asset($user->profile_image ?? 'profile-placeholder.png') }}" alt="Profile Picture" class="profile-img">
            <div class="profile-info">
                <h3>{{ $user->name }}</h3>
                <p>{{ $user->email }}</p>
                <p>{{ $user->phone }}</p>
                <p>{{ $user->gender }}</p>
                <p class="address">{{ $user->address }}</p>
                <a href="{{ route('profile.edit') }}" class="edit-btn">Ubah</a>
            </div>
        </div>
    </main>
    
</body>
<script>document.querySelector(".back-btn").addEventListener("click", () => {
    alert("Kembali ke halaman sebelumnya.");
});

document.querySelector(".edit-btn").addEventListener("click", () => {
    alert("Edit profile diklik.");
});

document.querySelector(".upload-btn").addEventListener("click", () => {
    alert("Pilih gambar untuk diunggah.");
});
</script>
</html>
