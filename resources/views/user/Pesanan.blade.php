<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Street Striders</title>
    <link rel="stylesheet" href="{{asset('user/style.css')}}" />
</head>
<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }

    .pesanan-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 2rem;
    }

    .pesanan-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    @media (min-width: 992px) {
        .cart-container {
            grid-template-columns: 2fr 1fr;
        }
    }

    .pesanan-items {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .pesanan-item {
        display: flex;
        align-items: center;
        padding: 1rem;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .item-checkbox {
        margin-right: 1rem;
    }

    .item-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 1rem;
        border-radius: 4px;
    }

    .item-details {
        flex: 1;
    }

    .item-price {
        font-weight: bold;
        font-size: 1.1rem;
    }

    .item-brand {
        color: #666;
        font-size: 0.9rem;
    }

    .item-name {
        margin: 0.25rem 0;
    }

    .item-size {
        color: #666;
        font-size: 0.9rem;
    }

    .quantity-controls {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin: 0 1rem;
    }

    .quantity-btn {
        width: 32px;
        height: 32px;
        border: none;
        background: #fee2e2;
        color: #ef4444;
        border-radius: 4px;
        cursor: pointer;
    }

    .quantity-value {
        width: 32px;
        text-align: center;
    }

    .item-total {
        text-align: right;
    }

    .remove-btn {
        color: #ef4444;
        border: none;
        background: none;
        cursor: pointer;
        font-size: 0.9rem;
        margin-top: 0.5rem;
    }

    .pesanan-summary {
        background: white;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .pesanan-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .pesanan-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.75rem;
    }

    .pesanan-total {
        font-weight: bold;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #ddd;
    }

    .checkout-btn {
        width: 100%;
        padding: 1rem;
        background: #ef4444;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
        margin-top: 1rem;
    }

    .checkout-btn:hover {
        background: #dc2626;
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
        <div class="container">
            <h1 class="pesanan-title">Keranjang Belanja</h1>

            <div class="pesanan-container">
                <div class="pesanan-items" id="pesananItems">
                    <!-- Items will be inserted here by JavaScript -->
                </div>

                <div class="pesanan-summary">
                    <h2 class="pesanan-title">Total Belanja</h2>
                    <div class="pesanan-row">
                        <span>Order Sub - Total</span>
                        <span id="subtotal">Rp 0</span>
                    </div>
                    <div class="pesanan-row">
                        <span>Ongkos Kirim</span>
                        <span>Rp 10,000</span>
                    </div>
                    <div class="pesanan-row">
                        <span>Diskon</span>
                        <span>0%</span>
                    </div>
                    <div class="pesanan-row pesanan-total">
                        <span>Total Semua</span>
                        <span id="total">Rp 0</span>
                    </div>
                    <button class="checkout-btn">Checkout</button>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('user/script.js')}}"></script>
</body>

</html>