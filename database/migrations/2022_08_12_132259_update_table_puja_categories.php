<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTablePujaCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('puja_categories', function (Blueprint $table) {
            $table->id('pooja_id')->nullable()->change();
            $table->longText('standard_pooja')->nullable()->change();
            $table->longText('premium_pooja')->nullable()->change();
            $table->longText('grand_pooja')->nullable()->change();
            $table->longText('category_samagri')->nullable()->change();
            $table->longText('category_wsamagri')->nullable()->change();
            $table->longText('category_all')->nullable()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
