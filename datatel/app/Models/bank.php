<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    protected $table = 'bank';

    use HasFactory;

    protected $fillable = [
        'nama_bank',
        'alamat',
        'kecamatan',
        'kabupaten/kota',
        'am',
        'layanan_telkom',
    ];

    public function getDisplayNameAttribute()
    {
        return $this->nama_bank;
    }
}
