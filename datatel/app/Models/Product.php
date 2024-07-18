<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'witel',
        'ubis',   
        'Id_Number',   
        'Nama_Akun',   
        'AM',   
        'NIPNAS',   
        'Nama_Grup',   
    ];
}
