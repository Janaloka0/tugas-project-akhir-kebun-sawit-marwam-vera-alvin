<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    protected $table = 'produksi';
    protected $fillable = ['kebun_id', 'jumlah_tandan', 'berat_total', 'tanggal_panen',];
}

