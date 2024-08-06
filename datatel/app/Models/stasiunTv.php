<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StasiunTv extends Model
{
    protected $table = 'stasiunTv';

    use HasFactory;

    protected $fillable = [
        'kategori',
        'nama_pelanggan',
        'nama_am',
        'alamat',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'pelayanan',
        'koordinat',
        'email_pic',
        'no_hp_pic',
        'sosmed_pic',
        'tersedia_layanan',
        'status_berlangganan',
        'jenis_layanan',
    ];

    public function getDisplayNameAttribute()
    {
        return $this->nama_pelanggan;
    }
}
