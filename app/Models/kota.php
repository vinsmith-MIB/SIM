<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $table = 'kotas';

    protected $fillable = [
        'nama_kota', 
        'ongkir', 
        'kota_seo'
    ];

    public function konsumens()
    {
        return $this->hasMany(Konsumen::class, 'id_kota');
    }
}