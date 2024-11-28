<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $fillable = ['kebun_id', 'file_path', 'file_type', 'tanggal_laporan',];

    public function Kebun()
    {
        return $this->hasMany(Kebun::class, 'kebun_id', 'kebun_id');
    }
}
