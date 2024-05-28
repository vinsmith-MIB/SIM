<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = [
        'id_kategori', 
        'nama_produk', 
        'produk_seo', 
        'harga', 
        'stok', 
        'satuan', 
        'gambar', 
        'dibeli', 
        'diskon', 
        'keterangan'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}