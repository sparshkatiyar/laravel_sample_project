<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pandit extends Model
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
