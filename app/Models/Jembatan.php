<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jembatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'ruas_jalan', 'panjang', 'jumlah_bentang'
    ];
}
