<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sma extends Model
{
    protected $table = 'sma';

    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'status',
        'jumlah_siswa',
        'kecamatan',
        'kabupaten/kota',
        'provinsi',
        'jaringan_optik',
        'odp',
        'layanan_telkom',
        'titik_koordinat',
        'jarak',
        'layak_tidak',
    ];

    public function getDisplayNameAttribute()
    {
        return $this->nama;
    }
}
