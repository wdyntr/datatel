<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisataKuliner extends Model
{
    protected $table = 'wisataKuliner';

    use HasFactory;

    protected $fillable = [
        'nama',
        'lokasi',
        'berlangganan',
        'email_sosmed',
        'jenis_layanan',
    ];

    public function getDisplayNameAttribute()
    {
        return $this->nama;
    }
}
