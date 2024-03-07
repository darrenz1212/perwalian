<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Perubahan penting di sini

class User extends Authenticatable // Perubahan penting di sini
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable =[
        "nrp",
        "nama",
        "password",
        "prodi",
        "role",
        "fakultas"
    ];
}
