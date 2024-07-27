<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisata_lamsel extends Model
{
    protected $table = 'wisata_lamsel';

    use HasFactory;

    protected $fillable = [
        'nama',
        'lokasi',
        'tikor',
        'berlangganan',
        'email_sosmed',
        'jenis_layanan',
    ];

    public function getDisplayNameAttribute()
    {
        return $this->nama;
    }
}
