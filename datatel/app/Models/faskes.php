<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faskes extends Model
{
    protected $table = 'faskes';

    use HasFactory;

    protected $fillable = [
        'kode_puskesmas',
        'kode_puskesmas2',
        'nama_puskes',
        'treg',
        'witel',
        'alamat',
        'kecamatan',
        'kabupaten',
        'concat',
        'provinsi',
        'pelayanan',
        'wilayah_kerja',
        'lat',
        'lon',
        'lat_long',
        'ketersediaan_jaringan_optik',
        'layanan_telkom',
        'kompetitor_eksisting',
        'rekomendasi',
    ];

    public function getDisplayNameAttribute()
    {
        return $this->nama_puskes;
    }
}
