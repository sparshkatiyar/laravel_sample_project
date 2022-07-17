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

    public function getPanditPicAttribute($value){
        if(empty($value)){
            return "";
        }else{
            $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
            $server = $_SERVER['SERVER_NAME'];
            $port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
            return $protocol.$server.$port."/public/web/Image/".$value;
            // return $_SERVER['SERVER_PORT']."/web/Image/".$value;
             
        }
    }
}
