<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('ecomm_puja_id');
            $table->string('address_id');
            $table->string('payment_id');
            $table->string('booking_id');
            $table->string('pandit_id')->nullable();
            $table->string('puja_type');
            $table->string('puja_category');
            $table->string('price_order');
            $table->string('price_tax');
            $table->string('price_coupan');
            $table->string('price_total');
            $table->string('booking_type');
            $table->string('booking_active');
            $table->string('booking_status');
            $table->string('booking_date');
            $table->string('deliver_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
