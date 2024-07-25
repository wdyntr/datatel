<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cafe extends Model
{
    protected $table = 'cafe';

    use HasFactory;

    protected $fillable = [
        'nama',
        'lokasi',
        'berlangganan',
        'email_sosmed',
        'jenis_layanan',
    ];
}
