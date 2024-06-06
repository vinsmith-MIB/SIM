<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Konsumen extends Model
{
    use HasFactory;

    protected $table = 'konsumens';
    

    protected $fillable = [
        'nama_user', 
        'alamat', 
        'kodepos', 
        'telpon', 
        'email', 
        'kota_asal',
        'foto', 
        'id_kota'
    ];

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'id_kota', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }
}