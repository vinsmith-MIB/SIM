<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::with('kategori')->paginate(5);
        return view('admin.pages.produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.pages.produk.create', compact('kategoris'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required',
            'nama_produk' => 'required|max:255',
            'produk_seo' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'satuan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'diskon' => 'nullable|numeric',
            'keterangan' => 'nullable|string'
        ]);

        // Generate a unique name for the image
        $imageName = time() . '.' . $request->gambar->extension();

        // Move the image to the storage/app/public/products directory
        $request->gambar->storeAs('public/products', $imageName);

        Produk::create([
            'id_kategori' => $request->id_kategori,
            'nama_produk' => $request->nama_produk,
            'produk_seo' => $request->produk_seo,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
            'gambar' => $imageName,
            'dibeli' => 0,
            'diskon' => $request->diskon,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produks = Produk::with('kategori')->paginate(5);
        return view('admin.pages.produk.index', compact('produks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findOrFail($id);
        $kategoris = Kategori::all();
        return view('admin.pages.produk.edit', compact('produk', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_kategori' => 'required',
            'nama_produk' => 'required|max:255',
            'produk_seo' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'satuan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'diskon' => 'numeric',
            'keterangan' => 'string'
        ]);

        $produk = Produk::findOrFail($id);

        $imageName = $produk->gambar;
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if (file_exists(storage_path('app/public/products/' . $produk->gambar))) {
                unlink(storage_path('app/public/products/' . $produk->gambar));
            }
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('public/products', $imageName);
        }

        $produk->update([
            'id_kategori' => $request->id_kategori,
            'nama_produk' => $request->nama_produk,
            'produk_seo' => $request->produk_seo,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
            'gambar' => $imageName,
            'dibeli' => $produk->dibeli,
            'diskon' => $request->diskon,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        // Hapus gambar
        if (file_exists(public_path('images/' . $produk->gambar))) {
            unlink(public_path('images/' . $produk->gambar));
        }

        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
