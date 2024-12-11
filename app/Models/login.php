<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table='login';
    protected $fillable = ['username', 'password'];

    public function pengguna(){
        return $this->hasOne(Pengguna::class,'name','name')
        ->where('password', $this->password);
    }
}
