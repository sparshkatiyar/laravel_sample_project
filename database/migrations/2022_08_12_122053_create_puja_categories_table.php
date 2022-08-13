<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePujaCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puja_categories', function (Blueprint $table) {
            $table->id();
            $table->string('pooja_id')->nullable();
            $table->string('standard_pooja')->nullable();
            $table->string('premium_pooja');
            $table->string('grand_pooja');
            $table->string('category_samagri');
            $table->string('category_wsamagri');
            $table->string('category_all');
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
        Schema::dropIfExists('puja_categories');
    }
}
