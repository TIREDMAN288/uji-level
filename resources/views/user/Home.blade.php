<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Street Striders</title>
    <link rel="stylesheet" href="{{asset('user/style.css')}}" />
 </head>

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

    <main class="main-content">
        <div class="banner-container">
            <div class="banner">
                <img src="{{asset('image/asset -ujilevel/header.jpeg')}}" alt="Banner" id="slideImage" />
            </div>
        </div>
    </main>

    <section class="hero-section">
        <div class="hero-content">
            <h3 class="section-title">About Me</h3>
            <div class="hero-image">
                <img src="{{asset('image/asset -ujilevel/about_home.png')}}" alt="Street Striders">
            </div>
            <div class="hero-text-container">
                <p class="hero-text">
                    Selamat datang di Street Striders, tempat di mana perjalanan gaya dan kenyamanan Anda dimulai!
                    Kami adalah brand sepatu yang berfokus pada menyediakan produk berkualitas tinggi dengan desain
                    modern dan
                    fungsionalitas terbaik. Dengan perpaduan gaya urban yang trendi dan kenyamanan maksimal,
                    kami hadir untuk menemani setiap langkah Anda, dari aktivitas harian hingga momen istimewa.
                </p>
                <button class="cta-button">Jelajahi Sekarang</button>
            </div>
        </div>
    </section>

    <section class="category-section">
        <h2 class="section-title">Kategori</h2>
        <div class="category-grid">
            <div class="category-card">
                <img src="{{asset('image/asset -ujilevel/katehory.png')}}" alt="Kategori Pria">
                <h3>Pria</h3>
            </div>
            <div class="category-card">
                <img src="{{asset('image/asset -ujilevel/kategoricwe.png')}}" alt="Kategori Wanita">
                <h3>Wanita</h3>
            </div>
        </div>
    </section>

    <section class="best-seller-section">
        <div class="header">
            <h2 class="section-title2">BEST SELLER</h2>
            <a href="#" class="see-all-link">see all products</a>
        </div>
        <div class="product-grid">
            @foreach ($products as $product)

            <div class="product-card">
                <img src="{{ asset('storage/' . $product->foto) }}" alt="{{ $product->judul }}" class="img-fluid" style="height: 200px; object-fit: cover;">
                <p class="product-name">{{ $product->judul }}</p>
                <p class="price">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                <p class="product-color">Warna: {{ $product->warna }}</p>
                <p class="rating">⭐ {{ $product->rating }} / 5</p>
            </div>
            @endforeach
        </div>
    </section>


    <div class="promo">
        <h1>Street Striders</h1>
        <p>"Produk luar biasa kini hadir di katalog kami!"</p>
    </div>



    <footer class="footer">
        <div class="footer-container">
            <div class="logo-container">
                <img src="{{ asset('image/asset -ujilevel/logo.png') }}" alt="" />
            </div>
            <div class="content">
                <h2>STREET STRAIDERS</h2>
                <p class="follow-text">Follow Us</p>
                <div class="social-icons">
                    <a href="#"><img src="{{ asset('image/asset -ujilevel/facebook.png') }}" alt="Facebook"></a>
                    <a href="#"><img src="{{ asset('image/asset -ujilevel/instagram.png') }}" alt="Twitter"></a>
                    <a href="#"><img src="{{ asset('image/asset -ujilevel/twitter.png') }}" alt="Instagram"></a>
                </div>
            </div>
        </div>
        <p class="copyright">© 2025 STREET STRAIDERS. All Rights Reserved</p>
    </footer>

    <script src="{{asset('user/script.js')}}"></script>
</body>

</html>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <!-- Link yang akan submit form -->
    <x-responsive-nav-link :href="route('logout')"
        onclick="event.preventDefault();
                 this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
</form>