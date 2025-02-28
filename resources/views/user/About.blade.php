<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
    <link rel="stylesheet" href="{{asset('user/style.css')}}" />
</head>
<style>
    .About1 .title {
        font-size: 3rem;
        font-family: 'Karantina', sans-serif;
        font-weight: 400;
        text-align: center;
        margin-bottom: 2rem;
        color: #222;
        position: relative;
        padding-bottom: 1rem;
    }

    .About1 .title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: #333;
        border-radius: 2px;
    }

    /* Photo and Text Container */
    .About1 .poto {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        align-items: center;
        justify-content: center;
        margin-bottom: 3rem;
        padding: 1.5rem;
        border-radius: 15px;
        transition: all 0.3s ease;
        background: none;
    }

    /* Image Styling */
    .About1 .poto img {
        width: 100%;
        max-width: 600px;
        height: auto;
        border-radius: 15px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        object-fit: cover;
    }

    /* Text Content */
    .About1 .poto p {
        text-align: justify;
        max-width: 800px;
        font-size: 1rem;
        color: #444;
        line-height: 1.8;
        margin-top: 1rem;
        padding: 0 1rem;
        letter-spacing: 0.3px;
    }

    /* Hover Effects */
    .About1 .poto img:hover {
        transform: scale(1.03);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    }

    .About1 .poto:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .About1 .poto {
        animation: fadeIn 0.8s ease-out forwards;
    }

    /* Responsive Design */
    @media (min-width: 768px) {
        .About1 .poto {
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            gap: 2rem;
            padding: 2rem;
        }

        .About1 .main-content .poto img {
            order: 1;
            max-width: 48%;
            margin: 0;
        }

        .About1 .main-content .poto p {
            order: 2;
            max-width: 48%;
            margin: 0;
            padding: 0;
        }

        .About1 .main-content1 .poto img {
            order: 2;
            max-width: 48%;
            margin: 0;
        }

        .About1 .main-content1 .poto p {
            order: 1;
            max-width: 48%;
            margin: 0;
            padding: 0;
        }

        .About1 .title {
            font-size: 3.5rem;
            margin-bottom: 3rem;
        }
    }

    /* Additional Responsive Refinements */
    @media (min-width: 1024px) {
        .About1 .poto {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .About1 .poto p {
            font-size: 1.1rem;
            line-height: 1.9;
        }
    }

    /* Small Screen Optimization */
    @media (max-width: 480px) {
        .About1 .title {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .About1 .poto {
            padding: 1rem;
            gap: 1.5rem;
        }

        .About1 .poto p {
            font-size: 0.9rem;
            line-height: 1.7;
        }
    }
</style>

<body>
    <header class="header">
        <div class="logo">
            <img src="{{ asset('image/asset -ujilevel/logo.png') }}" alt="" />
            <h3>Street Striders</h3>
        </div>
        <div class="search-container">
            <div class="search-bar">
                <input type="text" placeholder="Search..." />
                <button class="search-btn">Search</button>
            </div>
            <a href="{{ route('user.pesanan')}}" class="Keranjang" title="Keranjang">
                <img src="{{asset('image/asset -ujilevel/keranjang.png')}}" alt="Keranjang" />
            </a>
        </div>
        <div class="icons">
            <div class="tombol">
                @guest
                <!-- Jika user belum login, tampilkan tombol Login & Register -->
                <a href="{{ route('login') }}" class="login-btn">Login</a>
                <div class="vertical-line"></div>
                <a href="{{ route('login') }}" class="register-btn">Register</a>
                @else
                <!-- Jika user sudah login, tampilkan ikon akun -->
                <a href="#" class="icon" title="Account">
                    <img src="{{asset('image/asset -ujilevel/user.png')}}" alt="Account" />
                </a>
                @endguest
            </div>
        </div>
    </header>

    <nav class="navbar">
        <a href="{{ route('user.home') }}">Home</a>
        <a href="{{ route('user.about') }}">About</a>
        <div class="dropdown">
            <button class="dropbtn">
                Categories
                <img src="{{asset('image/asset -ujilevel/logo drow.png')}}" alt="Dropdown Logo" class="dropdown-logo" />
            </button>
            <div class="dropdown-content">
                <a href="{{ route('user.kategoriPria') }}">Pria</a>
                <a href="{{ route('user.kategoriWanita') }}">Wanita</a>
            </div>
        </div>
        <a href="{{ route('user.pesan') }}">Chat Whit Admin</a>
        <a href="#">Riwayat Pesanan</a>
        @auth
        @if (Auth::user()->usertype === 'admin')
        <a href="{{ route('admin.dashboard') }}">Back to dashboard</a>
        @endif
        @endauth
    </nav>
    <section class="About1" id="About1">
        <main class="main-content">
            <h1 class="title">About Me</h1>
            <div class="poto">
                <img src="{{asset('image/asset -ujilevel/about_home.png')}}" alt="" />
                <p>
                    Selamat datang di Street Straiders, destinasi utama untuk sepatu yang menggabungkan gaya,
                    kenyamanan, dan ketahanan dalam setiap langkah. Kami memahami bahwa sepatu bukan hanya sekadar
                    pelindung kaki, tetapi juga pernyataan gaya dan kepribadian. Itulah mengapa kami berkomitmen untuk
                    menghadirkan sepatu dengan desain urban yang inovatif, berkualitas tinggi, dan siap menemani setiap petualangan
                    Anda di jalanan.
                </p>
            </div>
            <div class="promo">
                <h1>Street Striders</h1>
                <p>"Produk luar biasa kini hadir di katalog kami!"</p>
            </div>
        </main>
        <main class="main-content1">
            <div class="poto">
                <img src="{{asset('image/asset -ujilevel/about1.jpeg')}}" alt="" />
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
                    aspernatur eius, mollitia autem repellendus omnis unde debitis magni.
                    Eveniet maxime et omnis mollitia.
                </p>
            </div>
            <div class="promo">
                <h1>Street Striders</h1>
                <p>"Produk luar biasa kini hadir di katalog kami!"</p>
            </div>
        </main>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Street Striders</p>
    </footer>

    <script src="{{asset('user/script.js')}}"></script>
</body>

</html>