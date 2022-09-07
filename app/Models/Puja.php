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
            $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
            $server = $_SERVER['SERVER_NAME'];
            $port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
            return $protocol.$server.$port."/web/Image/".$value;
            // return $protocol.$server.$port."/web/Image/".$value;

             
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
