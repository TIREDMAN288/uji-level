<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>User</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Street Striders</title>
        <link rel="stylesheet" href="{{asset('user/style.css')}}" />
    </head>

    <body>
        <h5>Street Striders</h5>
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
                <a href="#" class="Keranjang" title="Keranjang">
                    <img src="{{asset('image/asset -ujilevel/keranjang.png')}}" alt="Keranjang" />
                </a>
            </div>
            <div class="icons">
                <a href="#" class="icon" title="Account">
                    <img src="{{asset('image/asset -ujilevel/user.png')}}" alt="Account" />
                </a>
                <div class="tombol">
                    <button class="login">Login</button>
                    <div class="vertical-line"></div>
                    <button class="register">Register</button>
                </div>

            </div>
        </header>

        <nav class="navbar">
            <a href="{{ route ('user.Home')}}">Home</a>
            <a href="{{ route('user.About') }}">About</a>
            <div class="dropdown">
                <button class="dropbtn">
                    Categories
                    <img
                        src="{{asset('image/asset -ujilevel/logo drow.png')}}"
                        alt="Dropdown Logo"
                        class="dropdown-logo" />
                </button>
                <div class="dropdown-content">
                    <a href="{{ route('user.kategoriPria') }}">Pria</a>
                    <a href="{{ route('user.kategoriWanita') }}">Wanita</a>
                </div>
            </div>
            <a href="{{ route('user.pesan') }}">Chat Whit Admin</a>
            <a href="produk.html">Pesanan</a>
            <a href="produk.html">Riwayat Pesanan</a>
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
                    <img src="{{asset('image/asset -ujilevel/Streetcheck Shoes.jpeg')}}" alt="Street Striders">
                </div>
                <div class="hero-text-container">
                    <p class="hero-text">
                        Selamat datang di Street Striders, tempat di mana perjalanan gaya dan kenyamanan Anda dimulai!
                        Kami adalah brand sepatu yang berfokus pada menyediakan produk berkualitas tinggi dengan desain modern dan
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
                <div class="product-card">
                    <img src="{{asset('image/asset -ujilevel/Streetcheck Shoes.jpeg')}}" alt="Shoe 1">
                    <p class="product-name">sepatu jalan jalan</p>
                    <p class="price">Rp 150.000</p>
                    <p class="product-color">Color white</p>
                    <p class="rating">⭐⭐⭐⭐⭐ (0)</p>
                </div>
                <div class="product-card">
                    <img src="{{asset('image/asset -ujilevel/sepatu ini cocok.jpeg')}}" alt="Shoe 2">
                    <p class="product-name">sepatu ini lah yaa</p>
                    <p class="price">Rp 100.000</p>
                    <p class="product-color">Color abu-abu</p>
                    <p class="rating">⭐⭐⭐⭐⭐ (0)</p>
                </div>
                <div class="product-card">
                    <img src="{{asset('image/asset -ujilevel/sepatuwomen.jpeg')}}" alt="Shoe 3">
                    <p class="product-name">sepatu apalah</p>
                    <p class="price">Rp 200.000</p>
                    <p class="product-color">Color abu-abu</p>
                    <p class="rating">⭐⭐⭐⭐⭐ (0)</p>
                </div>
                <div class="product-card">
                    <img src="{{asset('image/asset -ujilevel/Streetcheck Shoes.jpeg')}}" alt="Shoe 4">
                    <p class="product-name">sepatu apa itu gtw</p>
                    <p class="price">Rp 150.000</p>
                    <p class="product-color">Color abu abu muda</p>
                    <p class="rating">⭐⭐⭐⭐⭐ (0)</p>
                </div>
                <div class="product-card">
                    <img src="{{asset('image/asset -ujilevel/sepatuwomen.jpeg')}}" alt="Shoe 5">
                    <p class="product-name">Sepatu inilah ya</p>
                    <p class="price">Rp 200.000</p>
                    <p class="product-color">Color putih dan hitam</p>
                    <p class="rating">⭐⭐⭐⭐⭐ (0)</p>
                </div>
            </div>
        </section>


        <div class="promo">
            <h1>Street Striders</h1>
            <p>"Produk luar biasa kini hadir di katalog kami!"</p>
        </div>



        <footer>
            <div class="footer">
                <img src="{{asset('image/asset -ujilevel/foter.png')}}" alt="" class="footer-bg">
                <div class="content">
                    <div class="payment">
                        <p>Mode Pembayaran:</p>
                        <div class="payment-images">
                            <img src="{{asset('image/asset-ujilevel/alfamart.png')}}" alt="Alfamart">
                            <img src="{{asset('image/asset-ujilevel/bni.png')}}" alt="BNI">
                            <img src="{{asset('image/asset-ujilevel/bca.png')}}" alt="BCA">
                            <img src="{{asset('image/asset-ujilevel/dana.png')}}" alt="DANA">
                        </div>
                    </div>
                    <div class="contact">
                        <div class="phone">
                            <i class="fas fa-phone"></i>
                            <span>+62 895 1631 7682</span>
                        </div>
                        <div class="location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Lokasi sini</span>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="logo">
                            <img src="{{asset('image/asset-ujilevel/logo.png')}}" alt="Street Straiders Logo">
                        </div>
                        <div class="social">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{asset('user/script.js')}}"></script>
    </body>

    </html>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                     this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-responsive-nav-link>
    </form>
</body>

</html>