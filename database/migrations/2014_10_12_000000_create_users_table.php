<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('password')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('country_code');
            $table->string('mobile_number')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('birth_time')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('access_token')->nullable();
            $table->string('device_token')->nullable();
            $table->string('otp');
            $table->string('is_otp_verify');
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}
