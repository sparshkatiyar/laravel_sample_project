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
            $table->string('baseprice');
            $table->string('type');
            $table->string('category');
            $table->string('price');       
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
