<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePujaEcommercesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puja_ecommerces', function (Blueprint $table) {
            $table->id();
            $table->string('puja_id');
            $table->string('puja_base_price');
            $table->string('puja_samagri_price');
            $table->string('puja_wsamagri_price');
            $table->string('puja_price_samall');
            $table->string('puja_price_medium');       
            $table->string('puja_price_large');       
            $table->string('puja_price_all');       
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
        Schema::dropIfExists('puja_ecommerces');
    }
}
