<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puja extends Model
{
    use HasFactory;
    public function getImageAttribute($value){
        if(empty($value)){
            return "";
        }else{
            return $_SERVER['SERVER_NAME']."/web/Image/".$value;
             
        }
    }
    
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
