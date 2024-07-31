<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    protected $table = 'perusahaan';

    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'pelayanan',
        'titik_koordinat',
        'berlangganan',
        'no_telp',
        'jenis_layanan',
        'status_berlangganan',
        'tersedia_layanan',
        'sosmed_email_pic',
        'ket',
    ];

    public function getDisplayNameAttribute()
    {
        return $this->nama;
    }
}
