<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class univ extends Model
{
    protected $table = 'univ';

    use HasFactory;

    protected $fillable = [
        'nama_univ',
        'status',
        'alamat',
        'kecamatan',
        'kabupaten',
        'am',
        'layanan_telkom',
    ];

    public function getDisplayNameAttribute()
    {
        return $this->nama_univ;
    }
}
