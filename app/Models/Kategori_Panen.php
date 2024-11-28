<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori_Panen extends Model
{
    protected $table = 'panen';
    protected $fillable = ['nama_kategori', 'deskripsi',];

    public function kategoriPanen()
    {
        return $this->belongsTo(Kategori_Panen::class, 'kategori_panen_id', 'id');
    }
}
