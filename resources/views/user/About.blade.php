<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
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
            <div class="tombol">
                <button class="login">Login</button>
                <div class="vertical-line"></div>
                <button class="register">Register</button>
            </div>
            <a href="#" class="icon" title="Account">
                <img src="{{asset('imge/asset -ujilevel/user.png')}}" alt="Account" />
            </a>

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
        <a href="#">Chat Whit Admin</a>
        <a href="produk.html">Pesanan</a>
        <a href="produk.html">Riwayat Pesanan</a>
    </nav>
    <section class="About1" id="About1">
        <main class="main-content">
            <h1 class="title">About Me</h1>
            <div class="poto">
                <img src="{{asset('image/asset -ujilevel/about1.jpeg')}}" alt="" />
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