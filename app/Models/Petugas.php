<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $fillable = ['pengguna_id', 'nama_petugas', 'jabatan', 'tanggal_bergabung'];

    public function Pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id', 'pengguna_id');
    }
}
