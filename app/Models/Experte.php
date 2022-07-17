<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experte extends Model
{
    use HasFactory;
    protected $fillable = [
      
        'skill_type',
        'experties_name',
    ];
}
