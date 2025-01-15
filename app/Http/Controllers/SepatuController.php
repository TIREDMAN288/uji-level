<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepatu;

class SepatuController extends Controller
{
    // Menampilkan daftar sepatu
    public function index()
    {
        $sepatus = Sepatu::all(); // Mengambil semua data sepatu
        return view('index', compact('sepatus'));
    }

    // Menampilkan form untuk menambah sepatu
    public function create()
    {
        return view('create');
    }

    // Menyimpan data sepatu baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'nomor' => 'required|numeric',
            'catatan' => 'nullable|string',
        ]);

        Sepatu::create($request->all());

        return redirect()->route('sepatu.index')->with('success', 'Sepatu berhasil ditambahkan!');

    }

    // Menampilkan form untuk mengedit sepatu
    public function edit($id)
    {
        $sepatu = Sepatu::findOrFail($id);
        return view('edit', compact('sepatu'));
    }

    // Mengupdate data sepatu
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nomor' => 'required|numeric',
            'catatan' => 'nullable|string',
        ]);

        $sepatu = Sepatu::findOrFail($id);
        $sepatu->update($request->all());

        return redirect()->route('sepatu.index')->with('success', 'Sepatu berhasil diperbarui!');
    }

    // Menghapus data sepatu
    public function destroy($id)
{
    // Cari sepatu berdasarkan ID
    $sepatu = Sepatu::findOrFail($id);

    // Hapus sepatu
    $sepatu->delete();

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('sepatu.index')->with('success', 'Sepatu berhasil dihapus!');
}
}
