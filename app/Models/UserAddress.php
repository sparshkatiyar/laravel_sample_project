<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillable = [
      
        'user_id',
        'contact_name',       
        'contact_no',
        'flat_no',
        'locality_no',
        'pincode',
        'address',
        'city',
        'state',
        'town',
    ];
}
