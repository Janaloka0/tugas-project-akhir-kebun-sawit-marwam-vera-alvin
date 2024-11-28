<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kebun extends Model
{
    protected $table = 'kebun';
    protected $fillable = [
        'lokasi',
        'luas',
        'status',
        'tanggal_tanam',
        'tanggal_panen',
    ];

    
}
