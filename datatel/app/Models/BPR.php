<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bpr extends Model
{
    protected $table = 'bpr';

    use HasFactory;

    protected $fillable = [
        'nama_pelanggan',
        'nama_am',
        'alamat',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'pelayanan',
        'koordinat',
        'email_pic',
        'no_hp',
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
