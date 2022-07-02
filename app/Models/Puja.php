<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puja extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'type',
        'category',
        'advantage',
        'desc',        
        'created_at',
        'updated_at'
    ];
}
