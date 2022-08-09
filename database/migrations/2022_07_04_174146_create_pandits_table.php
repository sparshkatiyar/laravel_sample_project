<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pandits', function (Blueprint $table) {
            $table->id();
            $table->string('pandit_pic')->nullable();    
            $table->string('name');
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('gender');
            $table->string('dob');
            $table->string('reg_as');
            $table->string('skill_primary');
            $table->string('skill_secondry');
            $table->string('consult_time');
            $table->string('other_platform');
            $table->string('app_or_website')->nullable();
            $table->string('uid_number');
            $table->string('uid_image');
            $table->string('experties');
            $table->integer('charge_chat');
            $table->integer('charge_call');
            $table->integer('charge_video');            
            $table->string('is_term');
            $table->integer('is_verify');
            $table->integer('is_block');
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
        Schema::dropIfExists('pandits');
    }
}
