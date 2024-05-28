<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    use HasFactory;

    protected $table = 'konsumens';

    protected $fillable = [
        'nama_user', 
        'alamat', 
        'kota_asal', 
        'kodepos', 
        'telpon', 
        'email', 
        'password', 
        'foto', 
        'id_kota'
    ];

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'id_kota');
    }
}