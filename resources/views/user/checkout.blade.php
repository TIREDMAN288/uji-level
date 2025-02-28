<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

body {
    background-color: #f8f9fa;
    color: #2d3436;
    padding: 2rem;
    max-width: 1200px;
    margin: 0 auto;
}

.header {
    background-color: #ffffff;
    border-radius: 12px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.back-button {
    background-color: #3498db;
    border-radius: 50%;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1.5rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.back-button:hover {
    background-color: #2980b9;
    transform: translateX(-3px);
}

.user-info {
    flex: 1;
}

.user-name {
    font-weight: 600;
    font-size: 1.25rem;
    margin-bottom: 0.5rem;
}

.user-phone {
    font-size: 1rem;
    color: #636e72;
}

.user-address {
    font-size: 0.95rem;
    margin-top: 0.5rem;
    color: #636e72;
    line-height: 1.6;
}

.product-section {
    background-color: #ffffff;
    border-radius: 12px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.product-item {
    display: flex;
    align-items: center;
    padding: 1rem 0;
}

.product-image {
    width: 120px;
    height: 120px;
    border-radius: 8px;
    overflow: hidden;
    margin-right: 1.5rem;
}

.product-details {
    flex: 1;
}

.product-title {
    font-weight: 600;
    font-size: 1.1rem;
    margin-bottom: 0.75rem;
}

.voucher-section {
    background-color: #ffffff;
    border-radius: 12px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.voucher-input {
    display: flex;
    gap: 1rem;
}

.voucher-input input {
    flex: 1;
    padding: 0.75rem 1rem;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    font-size: 1rem;
}

.voucher-input button {
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 8px;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.pricing-section {
    background-color: #ffffff;
    border-radius: 12px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.price-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1rem;
    font-size: 1rem;
}

.total-section {
    background-color: #ffffff;
    border-radius: 12px;
    padding: 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.payment-options {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
}

.payment-option {
    background-color: #ffffff;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    padding: 0.75rem 1.5rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.total-price {
    font-size: 1.75rem;
    font-weight: 600;
    color: #2d3436;
}

/* Responsive Design */
@media (max-width: 1024px) {
    body {
        padding: 1rem;
        max-width: 900px;
    }
}

@media (max-width: 768px) {
    body {
        padding: 0.5rem;
    }
    
    .product-image {
        width: 100px;
        height: 100px;
    }
    
    .total-section {
        flex-direction: column;
        gap: 1.5rem;
    }
    
    .payment-options {
        flex-wrap: wrap;
    }
}

@media (max-width: 480px) {
    .header {
        flex-direction: column;
        text-align: center;
    }
    
    .back-button {
        margin-bottom: 1rem;
        margin-right: 0;
    }
    
    .product-item {
        flex-direction: column;
        text-align: center;
    }
    
    .product-image {
        margin-right: 0;
        margin-bottom: 1rem;
    }
    
    .voucher-input {
        flex-direction: column;
    }
}

    </style>
</head>
<body>
    <!-- Header with user info -->
    <div class="header">
        <div class="back-button">
            <svg viewBox="0 0 24 24">
                <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
            </svg>
        </div>
        <div class="user-info">
            <div class="user-name">fathan sulaiman</div>
            <div class="user-phone">0896*****</div>
            <div class="user-address">
                Alamat: Jln. Rimba Baru Bojong Menteng Rt05/Rw08<br>
                Desa Ciomas, Kecamatan Ciomas, Kabupaten Bogor,Bogor<br>
                No pos 16710
            </div>
        </div>
    </div>
    
    <!-- Product section -->
    <div class="product-section">
        <div class="product-item">
            <div class="product-image">
                <img src="https://via.placeholder.com/80x80" alt="Sepatu Sekolah">
            </div>
            <div class="product-details">
                <div class="product-title">SEPATU SEKOLAH, JALAN - JALAN</div>
                <div class="product-info">Jumlah: 1 item</div>
                <div class="product-info">UK: 45</div>
            </div>
        </div>
    </div>
    
    <!-- Voucher section -->
    <div class="voucher-section">
        <div class="voucher-input">
            <input type="text" placeholder="Taro Kode Voucher anda disini">
            <button>Submit</button>
        </div>
        <div class="voucher-warning">*Gunakan kode voucher anda, jika tidak, abaikan kolom diataskan</div>
    </div>
    
    <!-- Pricing section -->
    <div class="pricing-section">
        <div class="price-item">
            <span>Harga satuan:</span>
            <span>Rp 100.000</span>
        </div>
        <div class="price-item">
            <span>Total harga ongkir:</span>
            <span>Rp 8.000</span>
        </div>
        <div class="price-item">
            <span>Total harga proteksi:</span>
            <span>Rp 0</span>
        </div>
        <div class="price-item">
            <span>Total biaya layanan:</span>
            <span>Rp 1.000</span>
        </div>
    </div>
    
    <!-- Total and payment section -->
    <div class="total-section">
        <div>
            <div class="payment-label">Pilih Mode Pembayaran Anda:</div>
            <div class="payment-options">
                <label class="payment-option">
                    <input type="radio" name="payment" value="dana" checked>
                    <span>DANA</span>
                </label>
                <label class="payment-option">
                    <input type="radio" name="payment" value="bni">
                    <span>BNI</span>
                </label>
            </div>
        </div>
        <div>
            <div style="text-align: right; font-size: 14px;">Subtotal:</div>
            <div class="total-price">Rp 108.000</div>
        </div>
    </div>
    
    <script>
        // JavaScript for payment option selection
        document.addEventListener('DOMContentLoaded', function() {
            const paymentOptions = document.querySelectorAll('.payment-option');
            
            paymentOptions.forEach(option => {
                option.addEventListener('click', function() {
                    // Remove selected class from all options
                    paymentOptions.forEach(opt => {
                        opt.classList.remove('selected');
                    });
                    
                    // Add selected class to clicked option
                    this.classList.add('selected');
                    
                    // Check the radio button
                    const radio = this.querySelector('input[type="radio"]');
                    radio.checked = true;
                });
            });
            
            // Set initial selected state
            const checkedRadio = document.querySelector('input[type="radio"]:checked');
            if (checkedRadio) {
                checkedRadio.closest('.payment-option').classList.add('selected');
            }
            
            // Submit button functionality
            const submitButton = document.querySelector('.voucher-input button');
            submitButton.addEventListener('click', function() {
                const voucherInput = document.querySelector('.voucher-input input');
                alert('Voucher applied: ' + voucherInput.value);
                voucherInput.value = '';
            });
            
            // Back button functionality
            const backButton = document.querySelector('.back-button');
            backButton.addEventListener('click', function() {
                alert('Going back to previous page');
            });
        });
    </script>
</body>
</html>