<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="{{asset('user/style.css')}}" />
</head>

<body>

    <div class="product">
        <div class="product-container">
            <!-- Product Image -->
            <div class="product-image">
                <img src="asset-ujilevel/adidas-Sportswear-Laufschuh.jpeg" alt="Sepatu Sekolah" />
            </div>

            <!-- Product Info -->
            <div class="product-info">
                <h1>SEPATU SEKOLAH, JALAN - JALAN</h1>
                <p class="price">Rp 100.000</p>
                <p class="rating">★★★★★ (15)</p>
            </div>

            <!-- Cart and Quantity Box (Horizontal Alignment) -->
            <div class="cart-box-horizontal">
                <div class="quantity-and-buttons">
                    <div class="quantity-control">
                        <button class="decrement">-</button>
                        <input type="number" id="quantity" value="1" min="1" />
                        <button class="increment">+</button>
                        <span class="stock">Stok: 549</span>
                    </div>
                    <div class="cart-buttons">
                        <button class="add-to-cart">+ Tambahkan ke keranjang</button>
                        <button class="buy-now">Beli</button>
                    </div>
                </div>

                <div class="free-shipping-box">
                    <p>GRATIS ONGKIR<br />Buat pesanan sekarang!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="payment-info1">
        <h3>Model Pembayaran:</h3>
        <img src="{{ asset('storage/bank-bca.png') }}" alt="BCA">
        <img src="{{ asset('storage/bank-bri.png') }}" alt="BRI">
        <img src="{{ asset('storage/bank-bni.png') }}" alt="BNI">
    </div>

    <div class="reviews-details">
        <h3>Reviews</h3>
        <div class="review1">
            <p>★★★★★ - Sepatu nyaman dipakai, sesuai ekspektasi!</p>
        </div>
    </div>

    <div class="related-products1">
        <h3>Produk Lainnya</h3>
        <div class="product-list1">
            <div class="product-item1">
                <img src="{{ asset('storage/shoes1.jpg') }}" alt="Sepatu Putih">
                <p>Sepatu Putih</p>
            </div>
            <div class="product-item1">
                <img src="{{ asset('storage/shoes2.jpg') }}" alt="Sepatu Hitam">
                <p>Sepatu Hitam</p>
            </div>
        </div>
    </div>

</body>

</html>