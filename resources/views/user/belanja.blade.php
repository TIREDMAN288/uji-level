<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <div class="grid grid-cols-2 gap-6">
            <!-- Gambar Produk -->
            <div>
                <img src="{{ asset('images/product.jpg') }}" alt="Produk" class="w-full rounded-lg">
                <div class="flex space-x-2 mt-4">
                    <img src="{{ asset('images/product.jpg') }}" class="w-16 h-16 rounded-lg border cursor-pointer">
                    <img src="{{ asset('images/product2.jpg') }}" class="w-16 h-16 rounded-lg border cursor-pointer">
                </div>
            </div>
            <!-- Detail Produk -->
            <div>
                <h1 class="text-2xl font-bold">sepatu jalan-jalan</h1>
                <p class="text-xl text-red-600 font-bold mt-2">Rp150.000 <span class="text-gray-400 line-through">Rp21.900</span></p>
                
                <div class="mt-4">
                    <p class="font-semibold">Pilih Warna:</p>
                    <div class="flex space-x-2 mt-2">
                        <button class="px-4 py-2 border rounded-lg bg-gray-200">putih</button>
                        <button class="px-4 py-2 border rounded-lg bg-gray-200">Biru</button>
                        <button class="px-4 py-2 border rounded-lg bg-green-500 text-white">Merah</button>
                    </div>
                </div>
                
                <div class="mt-4">
                    <p class="font-semibold">Atur Jumlah:</p>
                    <div class="flex items-center space-x-2 mt-2">
                        <button class="px-4 py-2 border">-</button>
                        <input type="number" value="1" class="w-16 text-center border py-2">
                        <button class="px-4 py-2 border">+</button>
                    </div>
                </div>
                
                <div class="mt-6 flex space-x-2">
                    <button class="px-6 py-3 bg-green-600 text-white rounded-lg">Beli</button>
                    <button class="px-6 py-3 bg-yellow-500 text-white rounded-lg">+ Keranjang</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
