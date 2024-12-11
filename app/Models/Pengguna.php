<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table='pengguna';
    protected $fillable=['name','email','password','role'];
    protected $hidden = ['password'];

    public static function boot() {
        parent::boot();

        static::creating(function ($model) {
            if ($model->password) {
                // Hash password sebelum disimpan ke database
                $model->password = Hash::make($model->password);
            }
        });
    }
}
