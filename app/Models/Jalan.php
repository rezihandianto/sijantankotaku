<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jalan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_ruas', 'nama', 'kecamatan', 'panjang_jalan'
    ];

    public function perbaikans()
    {
        return $this->hasMany(Perbaikan::class, 'jalans_id');
    }
}
