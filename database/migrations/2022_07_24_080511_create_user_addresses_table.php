<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('contact_name');
            $table->string('contact_no');         
            $table->string('flat_no');
            $table->string('locality_no');
            $table->string('city');
            $table->string('pincode');
            $table->string('address');
            $table->string('town');
            $table->string('state');
            // $table->string('is_main');
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
        Schema::dropIfExists('user_addresses');
    }
}
