<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{

    protected $table = 'pembayaran';
    protected $fillable = [
        'produksi_id',
        'jumlah_pembayaran',
        'tanggal_pembayaran',
        'metode_pembayaran',
    ];
    public function Produksi()
    {
        return $this->hasMany(Produksi::class, 'produksi_id', 'produksi_id');
    }
}
