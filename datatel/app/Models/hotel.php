<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    protected $table = 'hotel';

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
