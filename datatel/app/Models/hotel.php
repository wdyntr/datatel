<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    protected $table = 'hotel';

    use HasFactory;

    protected $fillable = [
        'nama_akomodasi',
        'klasifikasi',
        'alamat',
        'no_telp',
        'jumlah_kamar',
        'jumlah_tempat_tidur',
        'kabupaten',
    ];
}
