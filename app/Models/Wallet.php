<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable = [
      
        'user_id',
        'balance',       
        'currency',
        'is_active',
        'is_blocked',
        
    ];
}
