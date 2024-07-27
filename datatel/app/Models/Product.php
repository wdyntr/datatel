<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'datapelanggan';

    use HasFactory;

    protected $fillable = [
        'witel',
        'ubis',
        'id_number',
        'nama_akun',
        'am',
        'nipnas',
        'nama_grup',
    ];

    public function getDisplayNameAttribute()
    {
        return $this->nama_akun;
    }
}
