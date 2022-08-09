<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
      
        'email',
        'password',       
        'device_token',
        'access_token',
        'device_id',
        'role',
        'remember_token',
    ];
}
