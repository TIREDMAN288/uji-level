<?php

namespace App\Http\Controllers\Admin;

use App\Models\TambahProduk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TambahProdukController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        $produks = TambahProduk::all();
        return view('admin.tambahproduk.index', compact('produks'));
    }


    // Menampilkan form untuk menambahkan produk baru
    public function create()
    {
        return view('admin.tambahproduk.create');
    }

    // Menyimpan data produk baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'judul' => 'required|string|max:255',
            'harga' => 'required|numeric|min:1000',
            'warna' => 'required|string|max:100',
            'rating' => 'required|numeric|min:1|max:5'
        ]);

        // Simpan foto di storage
        $fotoPath = $request->file('foto')->store('uploads', 'public');

        TambahProduk::create([
            'foto' => $fotoPath,
            'judul' => $validatedData['judul'],
            'harga' => $validatedData['harga'],
            'warna' => $validatedData['warna'],
            'rating' => $validatedData['rating'],
        ]);

        return redirect()->route('tambahproduk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    // Menampilkan detail produk
    public function show(TambahProduk $tambahproduk)
    {
        return view('admin.tambahproduk.show', compact('tambahproduk'));
    }

    // Menampilkan form untuk edit produk
    public function edit(TambahProduk $tambahproduk)
    {
        return view('admin.tambahproduk.edit', compact('tambahproduk'));
    }

    // Memperbarui data produk di database
    public function update(Request $request, TambahProduk $tambahproduk)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'harga' => 'required|numeric|min:1000',
            'warna' => 'required|string|max:100',
            'rating' => 'required|numeric|min:1|max:5'
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($tambahproduk->foto && Storage::disk('public')->exists($tambahproduk->foto)) {
                Storage::disk('public')->delete($tambahproduk->foto);
            }

            // Simpan foto baru
            $fotoPath = $request->file('foto')->store('uploads', 'public');
            $tambahproduk->foto = $fotoPath;
        }

        $tambahproduk->update([
            'judul' => $validatedData['judul'],
            'harga' => $validatedData['harga'],
            'warna' => $validatedData['warna'],
            'rating' => $validatedData['rating'],
        ]);

        return redirect()->route('admin.tambahproduk.index')->with('success', 'Produk berhasil diperbarui');
    }

    // Menghapus produk dari database
    public function destroy(TambahProduk $tambahproduk)
    {
        // Hapus foto produk jika ada
        if ($tambahproduk->foto && Storage::disk('public')->exists($tambahproduk->foto)) {
            Storage::disk('public')->delete($tambahproduk->foto);
        }

        $tambahproduk->delete();

        return redirect()->route('tambahproduk.index')->with('success', 'Produk berhasil dihapus');
    }
}
