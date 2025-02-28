<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPATU SEKOLAH,JALAN - JALAN</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }
        
        .header {
            position: relative;
            padding: 15px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }
        
        .back-button {
            background-color: #ff4d4d;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        
        .back-button:hover {
            background-color: #ff3333;
            transform: scale(1.05);
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .product-left {
            flex: 0 0 45%;
            padding: 20px;
        }
        
        .product-right {
            flex: 0 0 55%;
            padding: 20px;
        }
        
        .product-image {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.5s ease;
        }
        
        .product-image:hover {
            transform: scale(1.03) translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .product-info {
            padding: 20px 0;
        }
        
        .product-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        
        .rating {
            color: #ffc107;
            margin-bottom: 15px;
            font-size: 18px;
        }
        
        .price {
            font-size: 32px;
            font-weight: bold;
            margin: 15px 0;
            color: #ff4d4d;
        }
        
        .product-options-container {
            display: flex;
            gap: 20px;
            margin: 20px 0;
        }
        
        .size-options {
            flex: 0 0 45%;
            padding: 15px;
            background: #fff;
        }
        
        .size-button {
            padding: 8px 15px;
            border: 1px solid #ddd;
            background: white;
            cursor: pointer;
            border-radius: 5px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .size-button:hover {
            background-color: #f0f0f0;
            border-color: #ccc;
            transform: translateY(-2px);
            background: linear-gradient(145deg, #ffffff, #f0f0f0);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .size-button:active {
            transform: translateY(0);
        }
        
        .quantity-checkout-container {
            flex: 0 0 45%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #fff;
        }
        
        .quantity-section {
            margin-bottom: 15px;
        }
        
        .quantity-text {
            font-size: 14px;
            margin-bottom: 10px;
            color: #555;
        }
        
        .quantity-controls {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }
        
        .quantity-button {
            width: 40px;
            height: 35px;
            background: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .quantity-button:hover {
            background: linear-gradient(145deg, #ffffff, #f0f0f0);
            transform: translateY(-2px);
        }

        .quantity-button:hover::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.1);
            top: 0;
            left: 0;
        }
        
        .quantity-value {
            padding: 0 15px;
            font-size: 16px;
        }
        
        .quantity-stock {
            color: #666;
            font-size: 14px;
        }
        
        .add-to-cart-button,
        .checkout-button {
            width: 100%;
            margin-top: 10px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .specifications {
            padding: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .section-title {
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 18px;
            color: #333;
        }
        
        .description {
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #555;
        }

        .description p {
            transition: all 0.3s ease;
            padding: 5px;
            border-radius: 5px;
        }

        .description p:hover {
            background-color: #f8f8f8;
            transform: translateX(10px);
            padding-left: 15px;
        }
        
        .care-instructions {
            padding: 20px;
            border-bottom: 1px solid #eee;
            background-color: #fafafa;
            border-radius: 8px;
            margin: 20px;
        }
        
        .care-list {
            list-style-type: decimal;
            margin-left: 25px;
            font-size: 15px;
            line-height: 1.6;
            color: #555;
        }
        
        .care-list li {
            margin-bottom: 10px;
        }
        
        .additional-info {
            padding: 20px;
            font-size: 15px;
            line-height: 1.6;
            border-bottom: 1px solid #eee;
            color: #555;
        }
        
        .payment-methods {
            padding: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .payment-options {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        
        .payment-logo {
            height: 40px;
            width: auto;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .payment-logo:hover {
            transform: translateY(-5px) scale(1.05);
            filter: drop-shadow(0 5px 15px rgba(0,0,0,0.2));
        }
        
        .shipping-info {
            padding: 20px;
            display: flex;
            align-items: center;
            background-color: #f9f9f9;
            border-radius: 8px;
            margin: 20px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .shipping-info:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            background: linear-gradient(145deg, #ffffff, #f9f9f9);
        }
        
        .shipping-icon {
            font-size: 24px;
            margin-right: 15px;
        }
        
        .shipping-text {
            flex: 1;
            font-size: 15px;
        }
        
        .tabs {
            display: flex;
            border-bottom: 1px solid #eee;
            background-color: #f9f9f9;
        }
        
        .tab {
            flex: 1;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
            font-weight: 500;
            position: relative;
            overflow: hidden;
        }
        
        .tab:hover {
            background-color: #f0f0f0;
        }

        .tab::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: #ff4d4d;
            transition: all 0.3s ease-in-out;
            transform: translateX(-50%);
        }

        .tab:hover::after {
            width: 100%;
        }
        
        .tab.active {
            border-bottom: 3px solid #ff4d4d;
            color: #ff4d4d;
        }
        
        .review-section {
            padding: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .review {
            margin-top: 20px;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
        
        .review-user {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #eee;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .user-avatar:hover {
            transform: scale(1.1) rotate(360deg);
            background-color: #ff4d4d;
            color: white;
        }
        
        .user-name {
            font-weight: bold;
            font-size: 16px;
        }
        
        .review-text {
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 15px;
            color: #555;
        }
        
        .review-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .review-image:hover {
            transform: scale(1.1) rotate(2deg);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }
        
        .similar-products {
            padding: 20px;
            overflow-x: auto;
        }
        
        .product-slider {
            display: flex;
            gap: 20px;
        }
        
        .product-card {
            width: 200px;
            flex-shrink: 0;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .product-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 30px rgba(0,0,0,0.15);
        }
        
        .product-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .product-card:hover img {
            transform: scale(1.1);
        }
        
        .product-card-info {
            padding: 15px;
            font-size: 14px;
            background-color: white;
        }
        
        .product-card-title {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-weight: 500;
            margin-bottom: 5px;
        }
        
        .product-card-price {
            font-weight: bold;
            font-size: 15px;
            color: #ff4d4d;
            margin-bottom: 5px;
        }
        
        .product-card-rating {
            color: #ffc107;
            font-size: 14px;
        }
        
        .add-to-cart-section {
            position: fixed;
            bottom: 0;
            width: 100%;
            max-width: 1200px;
            background: white;
            padding: 15px 20px;
            display: flex;
            gap: 15px;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            z-index: 100;
        }
        
        .add-to-cart-button {
            flex: 1;
            padding: 12px;
            background-color: #ff4d4d;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 16px;
        }
        
        .add-to-cart-button:hover {
            background-color: #ff3333;
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(255,77,77,0.4);
        }
        
        .checkout-button {
            flex: 1;
            padding: 12px;
            background-color: white;
            color: black;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 16px;
        }
        
        .checkout-button:hover {
            background-color: #f9f9f9;
            border-color: #ccc;
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        /* Responsive styles */
        @media (max-width: 1200px) {
            .product-container {
                padding: 15px;
            }
        }
        
        @media (max-width: 992px) {
            .product-left, .product-right {
                flex: 0 0 100%;
            }
            
            .add-to-cart-section {
                max-width: 100%;
            }
            
            .product-options-container {
                flex-direction: column;
            }
            
            .size-options,
            .quantity-checkout-container {
                flex: 0 0 100%;
            }
        }
        
        @media (max-width: 768px) {
            .container {
                max-width: 100%;
            }
            
            .product-title {
                font-size: 24px;
            }
            
            .price {
                font-size: 26px;
            }
            
            .product-card {
                width: 150px;
            }
        }
        
        @media (max-width: 576px) {
            .header {
                padding: 10px;
            }
            
            .product-left, .product-right {
                padding: 15px;
            }
            
            .product-title {
                font-size: 20px;
            }
            
            .price {
                font-size: 22px;
            }
            
            .size-options {
                gap: 5px;
            }
            
            .size-button {
                padding: 5px 10px;
            }
            
            .add-to-cart-section {
                flex-direction: column;
                gap: 10px;
            }
            
            .product-card {
                width: 120px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <button class="back-button">←</button>
        </div>
        
        <div class="product-container">
            <div class="product-left">
                <img src="https://via.placeholder.com/500x350/333333/ffffff?text=Sepatu+Sekolah" alt="Sepatu Sekolah" class="product-image">
            </div>
            
            <div class="product-right">
                <div class="product-info">
                    <h1 class="product-title">SEPATU SEKOLAH,JALAN - JALAN</h1>
                    <div class="rating">★★★★★ (5)</div>
                    <div class="price">Rp 100.000</div>
                    
                    <div class="product-options-container">
                        <div class="size-options">
                            <button class="size-button">35</button>
                            <button class="size-button">36</button>
                            <button class="size-button">37</button>
                            <button class="size-button">38</button>
                            <button class="size-button">39</button>
                            <button class="size-button">40</button>
                            <button class="size-button">41</button>
                            <button class="size-button">42</button>
                            <button class="size-button">43</button>
                            <button class="size-button">44</button>
                            <button class="size-button">45</button>
                        </div>
                        
                        <div class="quantity-checkout-container">
                            <div class="quantity-section">
                                <div class="quantity-text">Atur jumlah dan catatan</div>
                                <div class="quantity-controls">
                                    <button class="quantity-button">-</button>
                                    <span class="quantity-value">1</span>
                                    <button class="quantity-button">+</button>
                                </div>
                                <div class="quantity-stock">stok: 649</div>
                            </div>
                            
                            <button class="add-to-cart-button">+ Tambahkan ke keranjang</button>
                            <button class="checkout-button" > <a href="{{ route('user.checkout') }}"></a>CheckOut</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="specifications">
            <div class="section-title">Spesifikasi</div>
            <div class="description">
                <p>Beli Ready</p>
                <p>Bahan Kanvas</p>
                <p>Pembuatan Metode Sepatu Bersolir</p>
                <p>Ujung Depan:Ujung Tertutup</p>
            </div>
            
            <div class="section-title">Kelebihan Produk/Fitur Proses</div>
            <div class="description">
                <p>Untuk memudahkan proses penyelesaian atau pembuatan barang kepada kawan, kami meminta agar Anda mencantum Ukuran (size) dan No Hp dalam catatan pembelian. Main Harapkan kawan yang ingin membantu toko untuk tetap menjaga reputasi toko tetap degan baik dan membantu toko yang ada di dalamnya.</p>
            </div>
        </div>
        
        <div class="care-instructions">
            <div class="section-title">Catatan penting:</div>
            <ol class="care-list">
                <li>Main Harap menungkapkan proses pembelian pakek nomer resi, dan sampai masa barang keluar dari kantoran.</li>
                <li>Pastikan telah menggunakan fungsi atau kembli barang yang tidak tau dan ketersedianya.</li>
                <li>Dana tidak mengembalikan kepada kurir dalam waktu 2x jam setelah barang diterima.</li>
            </ol>
            
            <div class="description" style="margin-top:15px;">
                <p>Terima adasnya kami tidak ingin mengalami keterganguan atau kami tidak dapat memeproses pengembalian atau perpindahan barang.</p>
            </div>
            
            <div class="description">
                <p>Terima kasih atas pengertian dan kerja sama Anda.</p>
            </div>
        </div>
        
        <div class="payment-methods">
            <div class="section-title">Model Pembayaran:</div>
            <div class="payment-options">
                <img src="https://via.placeholder.com/100x30/0066cc/ffffff?text=DANA" alt="DANA" class="payment-logo">
                <img src="https://via.placeholder.com/100x30/e61c28/ffffff?text=BNI" alt="BNI" class="payment-logo">
            </div>
        </div>
        
        <div class="shipping-info">
            <div class="shipping-icon">🚚</div>
            <div class="shipping-text">
                <strong>GRATIS ONGKIR</strong><br>
                Buat promo selanjutnya!
            </div>
        </div>
        
        <div class="tabs">
            <div class="tab active">Detail</div>
            <div class="tab">Reviews ★★★★★</div>
        </div>
        
        <div class="review-section">
            <div class="review">
                <div class="review-user">
                    <div class="user-avatar">👤</div>
                    <div class="user-name">anmzf_</div>
                </div>
                <div class="review-text">
                    <p>Mantap kak sudah sampai hari ini!</p>
                </div>
                <img src="https://via.placeholder.com/60x60/333333/ffffff?text=Sepatu" alt="Review Image" class="review-image">
            </div>
        </div>
        
        <div class="similar-products">
            <div class="section-title">Produk Serupa</div>
            <div class="product-slider">
                <div class="product-card">
                    <img src="https://via.placeholder.com/120x100/f6f6f6/333333?text=Sepatu+1" alt="Similar Product">
                    <div class="product-card-info">
                        <div class="product-card-title">Sepatu Slip-on</div>
                        <div class="product-card-price">Rp 95.000</div>
                        <div class="product-card-rating">★★★★☆</div>
                    </div>
                </div>
                
                <div class="product-card">
                    <img src="https://via.placeholder.com/120x100/f6f6f6/333333?text=Sepatu+2" alt="Similar Product">
                    <div class="product-card-info">
                        <div class="product-card-title">Sepatu Air Max</div>
                        <div class="product-card-price">Rp 157.000</div>
                        <div class="product-card-rating">★★★★☆</div>
                    </div>
                </div>
                
                <div class="product-card">
                    <img src="https://via.placeholder.com/120x100/f6f6f6/333333?text=Sepatu+3" alt="Similar Product">
                    <div class="product-card-info">
                        <div class="product-card-title">Sepatu Old School</div>
                        <div class="product-card-price">Rp 88.000</div>
                        <div class="product-card-rating">★★★★★</div>
                    </div>
                </div>
                
                <div class="product-card">
                    <img src="https://via.placeholder.com/120x100/f6f6f6/333333?text=Sepatu+4" alt="Similar Product">
                    <div class="product-card-info">
                        <div class="product-card-title">Sepatu Air Force</div>
                        <div class="product-card-price">Rp 175.000</div>
                        <div class="product-card-rating">★★★★☆</div>
                    </div>
                </div>
                
                <div class="product-card">
                    <img src="https://via.placeholder.com/120x100/f6f6f6/333333?text=Sepatu+5" alt="Similar Product">
                    <div class="product-card-info">
                        <div class="product-card-title">Sepatu Yeezy</div>
                        <div class="product-card-price">Rp 189.000</div>
                        <div class="product-card-rating">★★★★★</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Size button selection
        const sizeButtons = document.querySelectorAll('.size-button');
        sizeButtons.forEach(button => {
            button.addEventListener('click', () => {