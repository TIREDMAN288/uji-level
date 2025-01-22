<?php

namespace App\Http\Controllers\Admin;

use App\Models\TambahProduk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'warna' => 'required|string|max:100',
            'rating' => 'required|numeric|min:1|max:5'
        ]);

        $fotoPath = $request->file('foto')->store('uploads', 'public');

        TambahProduk::create([
            'foto' => $fotoPath,
            'judul' => $validatedData['judul'],
            'harga' => $validatedData['harga'],
            'warna' => $validatedData['warna'],
            'rating' => $validatedData['rating'],
        ]);

        return redirect(route('admin.tambahproduk.index'))->with('success', 'Produk berhasil ditambahkan');
    }

    // Menampilkan detail produk
    public function show($id)
    {
        $produk = TambahProduk::findOrFail($id);
        return view('admin.tambahproduk.show', compact('produk'));
    }

    // Menampilkan form untuk edit produk
    public function edit($id)
    {
        $produk = TambahProduk::findOrFail($id);
        return view('admin.tambahproduk.edit', compact('produk'));
    }

    // Memperbarui data produk di database
    public function update(Request $request, $id)
    {
        $produk = TambahProduk::findOrFail($id);

        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'warna' => 'required|string|max:100',
            'rating' => 'required|numeric|min:1|max:5'
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('uploads', 'public');
            $produk->foto = $fotoPath;
        }

        $produk->update($validatedData);

        return redirect(route('admin.tambahproduk.index'))->with('success', 'Produk berhasil diperbarui');
    }

    // Menghapus produk dari database
    public function destroy($id)
    {
        $produk = TambahProduk::findOrFail($id);
        $produk->delete();
        return redirect(route('admin.tambahproduk.index'))->with('success', 'Produk berhasil dihapus');
    }
}