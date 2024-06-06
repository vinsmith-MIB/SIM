<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class KategoriProdukController extends Controller
{
    public function index(): View
    {
        $categories = Kategori::paginate(5);

        return view('admin.pages.kategoriProduk.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.pages.kategoriProduk.create');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_kategori' => 'required|max:255',
            'kategori_seo' => 'required',
        ]);

        // Menyimpan data
        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'kategori_seo' => $request->kategori_seo,
        ]);

        // Redirect setelah penyimpanan
        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    // Method untuk menampilkan form edit
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.pages.kategoriProduk.edit', compact('kategori'));
    }


    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nama_kategori' => 'required|max:255',
            'kategori_seo' => 'required',
        ]);

        // Temukan kategori berdasarkan ID
        $kategori = Kategori::findOrFail($id);

        // Update data kategori
        $kategori->update([
            'nama_kategori' => $request->nama_kategori,
            'kategori_seo' => $request->kategori_seo,
        ]);

        // Redirect setelah penyimpanan
        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
