<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablePujaCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('puja_categories', function (Blueprint $table) {
            $table->string('pooja_name')->nullable();
            $table->string('standard_pooja')->nullable();
            $table->string('premium_pooja');
            $table->string('grand_pooja');
            $table->string('category_samagri');
            $table->string('category_wsamagri');
            $table->string('category_all');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('puja_categories', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('name_desc');
        });
    }
}
