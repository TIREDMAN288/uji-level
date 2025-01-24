<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kategori</title>
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
            <a href="{{ route('user.pesan') }}">Chat Whit Admin</a>
            <a href="produk.html">Pesanan</a>
            <a href="produk.html">Riwayat Pesanan</a>
            <a href="produk.html">Back To Dashboard</a>
        </nav>
    <section class="wanita">
        <div class="container">
            <h1>Kategori Wanita</h1>
            <div class="sidebar">
                <h3>Kategori</h3>
                <ul>
                    <li><a href="#">Wanita</a></li>
                    <li><a href="#">Pria</a></li>
                </ul>
            </div>
            <div class="product-box">
                <div class="product-list">
                    <!-- Contoh produk -->
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <div class="product">
                        <img src="{{asset('image/asset -ujilevel/Access Denied.jpeg')}}" alt="Sepatu Jalan-Jalan">
                        <h4>Sepatu Jalan-Jalan</h4>
                        <p>Rp 100,000</p>
                        <p>Color: White</p>
                        <div class="rating">★★★★★ <span>(5)</span></div>
                    </div>
                    <!-- Tambahkan produk lainnya -->
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <p>&copy; 2025 Street Striders</p>
    </footer>

    <script src="{{asset('user/script.js')}}"></script>
</body>

</html>