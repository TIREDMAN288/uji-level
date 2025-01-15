<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TambahProduk;
use Illuminate\Http\Request;

class TambahProdukController extends Controller
{
    // Menampilkan semua data produk
    public function index()
    {
        $produk = TambahProduk::all();
        return view('admin.tambahproduk.index', compact('produk'));
    }

    // Menampilkan form untuk menambahkan produk baru
    public function create()
    {
        return view('admin.tambahproduk.create');
    }

    // Menyimpan produk baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'warna' => 'required|string|max:50',
            'rating' => 'required|numeric|between:0,5',
        ]);

        // Simpan file foto
        $fotoPath = $request->file('foto')->store('public/foto_produk');

        TambahProduk::create([
            'foto' => $fotoPath,
            'judul' => $request->judul,
            'harga' => $request->harga,
            'warna' => $request->warna,
            'rating' => $request->rating,
        ]);

        return redirect()->route('tambahproduk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    // Menampilkan detail produk untuk diedit
    public function edit($id)
    {
        $produk = TambahProduk::findOrFail($id);
        return view('admin.tambahproduk.edit', compact('produk'));
    }

    // Mengupdate data produk di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'warna' => 'required|string|max:50',
            'rating' => 'required|numeric|between:0,5',
        ]);

        $produk = TambahProduk::findOrFail($id);

        // Update foto jika ada
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/foto_produk');
            $produk->foto = $fotoPath;
        }

        $produk->update([
            'judul' => $request->judul,
            'harga' => $request->harga,
            'warna' => $request->warna,
            'rating' => $request->rating,
        ]);

        return redirect()->route('tambahproduk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    // Menghapus produk
    public function destroy($id)
    {
        $produk = TambahProduk::findOrFail($id);
        $produk->delete();

        return redirect()->route('tambahproduk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
