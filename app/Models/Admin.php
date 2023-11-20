<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = 'admin';

    protected $fillable = [
        'username',
        'password'
    ];

    protected $casts = [
        'time' => 'datetime',
        'password' => 'hashed',
    ];
    
    public $timestamps = false;
}
