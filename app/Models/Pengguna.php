<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Pengguna extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'pengguna'; // Nama tabel yang digunakan

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];
 
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
