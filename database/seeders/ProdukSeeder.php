<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'id_kategori' => 1,
            'nama_produk' => 'T-Shirt Basic',
            'produk_seo' => 't-shirt-basic',
            'harga' => 150000,
            'stok' => 100,
            'satuan' => 'pcs',
            'gambar' => 'tshirt-basic.jpg',
            'dibeli' => 0,
            'diskon' => 0,
            'keterangan' => 'T-Shirt Basic dengan bahan katun berkualitas tinggi.'
        ]);

        Produk::create([
            'id_kategori' => 1,
            'nama_produk' => 'T-Shirt Logo',
            'produk_seo' => 't-shirt-logo',
            'harga' => 200000,
            'stok' => 80,
            'satuan' => 'pcs',
            'gambar' => 'tshirt-logo.jpg',
            'dibeli' => 0,
            'diskon' => 10,
            'keterangan' => 'T-Shirt dengan logo brand tercetak di bagian depan.'
        ]);

        Produk::create([
            'id_kategori' => 2,
            'nama_produk' => 'Jeans Basic',
            'produk_seo' => 'jeans-basic',
            'harga' => 250000,
            'stok' => 70,
            'satuan' => 'pcs',
            'gambar' => 'jeans-basic.jpg',
            'dibeli' => 0,
            'diskon' => 0,
            'keterangan' => 'Celana jeans basic yang nyaman digunakan sehari-hari.'
        ]);

        Produk::create([
            'id_kategori' => 2,
            'nama_produk' => 'Jeans Ripped',
            'produk_seo' => 'jeans-ripped',
            'harga' => 280000,
            'stok' => 60,
            'satuan' => 'pcs',
            'gambar' => 'jeans-ripped.jpg',
            'dibeli' => 0,
            'diskon' => 15,
            'keterangan' => 'Celana jeans dengan gaya ripped yang trendi.'
        ]);

        Produk::create([
            'id_kategori' => 3,
            'nama_produk' => 'Jacket Bomber',
            'produk_seo' => 'jacket-bomber',
            'harga' => 300000,
            'stok' => 50,
            'satuan' => 'pcs',
            'gambar' => 'jacket-bomber.jpg',
            'dibeli' => 0,
            'diskon' => 0,
            'keterangan' => 'Jaket bomber dengan desain modern.'
        ]);

        Produk::create([
            'id_kategori' => 4,
            'nama_produk' => 'Sneakers Casual',
            'produk_seo' => 'sneakers-casual',
            'harga' => 350000,
            'stok' => 40,
            'satuan' => 'pcs',
            'gambar' => 'sneakers-casual.jpg',
            'dibeli' => 0,
            'diskon' => 0,
            'keterangan' => 'Sneakers casual dengan tampilan yang stylish.'
        ]);

        Produk::create([
            'id_kategori' => 5,
            'nama_produk' => 'Watch Classic',
            'produk_seo' => 'watch-classic',
            'harga' => 400000,
            'stok' => 30,
            'satuan' => 'pcs',
            'gambar' => 'watch-classic.jpg',
            'dibeli' => 0,
            'diskon' => 0,
            'keterangan' => 'Jam tangan klasik dengan desain elegan.'
        ]);

        Produk::create([
            'id_kategori' => 6,
            'nama_produk' => 'Sweater Knit',
            'produk_seo' => 'sweater-knit',
            'harga' => 450000,
            'stok' => 20,
            'satuan' => 'pcs',
            'gambar' => 'sweater-knit.jpg',
            'dibeli' => 0,
            'diskon' => 0,
            'keterangan' => 'Sweater dengan bahan rajut yang hangat.'
        ]);

        Produk::create([
            'id_kategori' => 7,
            'nama_produk' => 'Dress Floral',
            'produk_seo' => 'dress-floral',
            'harga' => 500000,
            'stok' => 10,
            'satuan' => 'pcs',
            'gambar' => 'dress-floral.jpg',
            'dibeli' => 0,
            'diskon' => 0,
            'keterangan' => 'Dress dengan motif bunga yang menarik'
        ]);

        Produk::create([
            'id_kategori' => 8,
            'nama_produk' => 'Hat Snapback',
            'produk_seo' => 'hat-snapback',
            'harga' => 55000,
            'stok' => 5,
            'satuan' => 'pcs',
            'gambar' => 'hat-snapback.jpg',
            'dibeli' => 0,
            'diskon' => 0,
            'keterangan' => 'Topi snapback dengan desain yang trendy.'
        ]);
    }
}