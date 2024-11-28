<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    use HasFactory;

    protected $table = 'distribusi';
    protected $fillable = ['id', 'produksi_id', 'tujuan', 'jumlah', 'tanggal_distribusi',];


    public function Produksi()
    {
        return $this->hasMany(Produksi::class,  'produksi_id');
    }
}
