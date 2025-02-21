<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Street Striders</title>
    <link rel="stylesheet" href="{{asset('user/style.css')}}" />
</head>
<style>
    /* Reset & Global Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    body {
        background-color: #f5f5f5;
        justify-content: center;
        align-items: center;
    }

    /* Container Utama */
    .product-container { 
        max-width: 1100px;
        background: #fff;
        padding: 20px;
        margin: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
    }

    /* Layout Produk */
    .product-layout {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-bottom: 30px;
    }

    /* Gambar Produk */
    .product-images .main-image img {
        width: 100%;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Spesifikasi berada di bawah gambar */
    .specifications {
        background: #fafafa;
        padding: 20px;
        margin-top: 15px;
        border-radius: 8px;
        border: 1px solid #ddd;
        font-size: 14px;
    }

    .specifications h3 {
        margin-bottom: 12px;
        color: #333;
        font-size: 18px;
    }

    .specifications ul {
        padding-left: 18px;
    }

    .specifications .disclaimer {
        margin-top: 12px;
        padding: 12px;
        background: #fff3cd;
        border-radius: 6px;
        font-size: 13px;
    }

    /* Informasi Produk */
    .product-info h1 {
        font-size: 24px;
        margin-bottom: 10px;
        color: #333;
    }

    .rating {
        color: gold;
        font-size: 16px;
        margin-bottom: 12px;
    }

    .price {
        font-size: 26px;
        font-weight: bold;
        color: #ff5722;
        margin: 15px 0;
    }

    /* Pemilihan Ukuran */
    .size-selection {
        margin-top: 15px;
    }

    .size-row {
        display: flex;
        gap: 10px;
        margin-bottom: 10px;
    }

    .size-btn {
        padding: 10px 15px;
        border-radius: 6px;
        background: #e0e0e0;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .size-btn:hover {
        background: #512da8;
        color: #fff;
    }

    /* Tombol Aksi */
    .action-buttons {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }

    .chat-btn,
    .checkout-btn {
        flex: 1;
        padding: 12px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        font-weight: 600;
        transition: 0.3s ease;
        cursor: pointer;
    }

    .chat-btn {
        background: #fff;
        border: 2px solid #512da8;
        color: #512da8;
    }

    .chat-btn:hover {
        background: #512da8;
        color: white;
    }

    .checkout-btn {
        background: #512da8;
        color: white;
    }

    .checkout-btn:hover {
        background: #421b8a;
    }

    /* Metode Pembayaran */
    .payment-section {
        margin-top: 30px;
        padding: 20px;
        background: #fafafa;
        border-radius: 8px;
        border: 1px solid #ddd;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }

    .payment-section h3 {
        text-align: center;
        font-size: 20px;
        margin-bottom: 15px;
        color: #333;
    }

    /* Atur metode pembayaran ke bawah */
    .payment-methods {
        display: flex;
        flex-direction: column;
        gap: 12px;
        align-items: center;
    }

    .payment-option {
        display: flex;
        align-items: center;
        gap: 10px;
        background: white;
        padding: 12px 20px;
        border-radius: 6px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        border: 1px solid #ddd;
        width: 80%;
        text-align: center;
    }

    .payment-option img {
        height: 30px;
    }

    .payment-option span {
        font-size: 16px;
        font-weight: bold;
    }

    /* Info Pengiriman */
    .shipping-info {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 15px;
        padding: 12px;
        background: #f9f9f9;
        border-radius: 6px;
        text-align: center;
        justify-content: center;
        font-size: 14px;
        font-weight: bold;
    }

    .shipping-info img {
        height: 25px;
    }

    /* Ulasan Pelanggan */
    .reviews-section {
        margin-top: 40px;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        border: 1px solid #ddd;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }

    .reviews-section h3 {
        text-align: center;
        font-size: 22px;
        margin-bottom: 15px;
        color: #333;
    }

    /* Kotak Ulasan */
    .review-box {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding: 15px;
        border-radius: 8px;
        border: 1px solid #ddd;
        background: #f9f9f9;
        margin-bottom: 15px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    .reviewer {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .reviewer img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 2px solid #ddd;
    }

    .reviewer-info {
        display: flex;
        flex-direction: column;
    }

    .reviewer-name {
        font-size: 16px;
        font-weight: bold;
        color: #333;
    }

    .review-rating {
        font-size: 14px;
        color: gold;
    }

    .review-text {
        font-size: 14px;
        color: #333;
    }

    /* Responsif */
    @media (max-width: 768px) {
        .payment-option {
            width: 100%;
        }

        .review-box {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    /* Produk Terkait */
    .related-products {
        margin-top: 40px;
    }

    .related-products h3 {
        margin-bottom: 18px;
        font-size: 20px;
    }

    .product-grid {
        display: flex;
        gap: 15px;
    }

    .product-card {
        background: white;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .product-card img {
        width: 100%;
        border-radius: 8px;
    }

    .product-card h4 {
        margin-top: 10px;
        font-size: 16px;
    }

    /* Responsif */
    @media (max-width: 1024px) {
        .product-layout {
            grid-template-columns: 1fr;
        }

        .action-buttons {
            flex-direction: column;
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
    <section>
        <div class="product-container">
            <div class="product-layout">
                <!-- Kiri - Gambar Produk -->
                <div class="product-images">
                    <div class="main-image">
                        <img src="sepatu-casual.jpg" alt="SEPATU SANTAI JALAN - JALAN">
                    </div>

                    <!-- Spesifikasi dipindahkan ke bawah gambar -->
                    <div class="specifications">
                        <h3>Spesifikasi</h3>
                        <ul>
                            <li>Merk: Local Brand</li>
                            <li>High quality fabric</li>
                            <li>Pilihan warna lengkap</li>
                        </ul>

                        <div class="disclaimer">
                            <h4>Mohon diperhatikan:</h4>
                            <ul>
                                <li>Pilih ukuran yang sesuai dengan ukuran kaki anda</li>
                                <li>Tanyakan stok terlebih dahulu sebelum order</li>
                                <li>Pastikan alamat pengiriman sudah benar dan lengkap</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Kanan - Informasi Produk -->
                <div class="product-info">
                    <div class="product-header">
                        <h1>SEPATU SANTAI JALAN - JALAN</h1>
                        <div class="rating">★★★★★ (21)</div>
                    </div>

                    <div class="price">Rp 100.000</div>

                    <div class="size-selection">
                        <div class="size-row">
                            <div class="size-btn">38</div>
                            <div class="size-btn">39</div>
                            <div class="size-btn">40</div>
                        </div>
                        <div class="size-row">
                            <div class="size-btn">41</div>
                            <div class="size-btn">42</div>
                            <div class="size-btn">43</div>
                        </div>
                        <div class="size-row">
                            <div class="size-btn">44</div>
                            <div class="size-btn">45</div>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="action-buttons">
                        <button class="chat-btn">Chat</button>
                        <button class="checkout-btn">Checkout</button>
                    </div>

                    <!-- Metode Pembayaran -->
                </div>
            </div>
            <!-- Metode Pembayaran (Menyamping & di Bawah) -->
            <div class="payment-section">
                <h3>Model Pembayaran</h3>
                <div class="payment-methods">
                    <div class="payment-option">
                        <img src="dana-logo.png" alt="DANA">
                        <span>DANA</span>
                    </div>
                    <div class="payment-option">
                        <img src="bni-logo.png" alt="BNI">
                        <span>BNI</span>
                    </div>
                </div>
                <div class="shipping-info">
                    <img src="truck-icon.png" alt="Shipping">
                    <span>Fast shipping/delivery</span>
                </div>
            </div>

            <!-- Ulasan Pelanggan (Dipindahkan ke Bawah) -->
            <div class="reviews-section">
                <h3>Ulasan Pelanggan</h3>

                <div class="review-box">
                    <div class="reviewer">
                        <img src="user-avatar.jpg" alt="User">
                        <div class="reviewer-info">
                            <span class="reviewer-name">John Doe</span>
                            <div class="review-rating">★★★★★</div>
                        </div>
                    </div>
                    <p class="review-text">Produk sesuai dengan deskripsi, kualitas bagus!</p>
                </div>

                <div class="review-box">
                    <div class="reviewer">
                        <img src="user-avatar2.jpg" alt="User">
                        <div class="reviewer-info">
                            <span class="reviewer-name">Jane Smith</span>
                            <div class="review-rating">★★★★☆</div>
                        </div>
                    </div>
                    <p class="review-text">Barang sesuai gambar, pengiriman cepat.</p>
                </div>
            </div>

            <!-- Produk Terkait -->
            <div class="related-products">
                <h3>Produk Terkait</h3>
                <div class="product-grid">
                    <div class="product-card">
                        <img src="sepatu1.jpg" alt="Sepatu 1">
                        <h4>Sepatu Sport</h4>
                        <div class="rating">★★★★★</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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