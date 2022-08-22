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
            $table->longText('standard_pooja')->nullable();
            $table->longText('premium_pooja')->nullable();
            $table->longText('grand_pooja')->nullable();
            $table->longText('category_samagri')->nullable();
            $table->longText('category_wsamagri')->nullable();
            $table->longText('category_all')->nullable();
            $table->longText('premium_category_samagri')->nullable();
            $table->longText('premium_category_wsamagri')->nullable();
            $table->longText('premium_category_all')->nullable();
            $table->longText('grand_category_samagri')->nullable();
            $table->longText('grand_category_wsamagri')->nullable();
            $table->longText('grand_category_all')->nullable();
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
