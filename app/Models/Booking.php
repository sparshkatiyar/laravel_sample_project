<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
      
        'user_id',
        'ecomm_puja_id',
        'address_id',
        'payment_id',
        'booking_id',
        'pandit_id',
        'puja_type',
        'puja_category',
        'price_order',
        'price_tax',
        'price_coupan',
        'price_total',
        'booking_type',
        'booking_active',
        'booking_date',
        'booking_status',        
    ];
}
