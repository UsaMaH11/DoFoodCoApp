<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string("otp")->nullable();
            $table->enum('status', ['active', 'inactive', 'terminated'])->default('active');
            $table->enum('Type', ['buyer', 'seller', 'admin'])->default('buyer');
            $table->string('profile_picture')->nullable();
            $table->string('location');
            $table->tinyInteger('isEmailVerified')->default(0);
            $table->tinyInteger('isRequestedToBecomeCook')->default(0);
            $table->tinyInteger('isPhoneVerified')->default(0);
            $table->tinyInteger('isIdVerified')->default(0);
            $table->string("dob")->nullable();
            $table->enum("gender", ['male', 'female', 'not interested to answer'] )->default('male');
            $table->string("id_number")->nullable();
            $table->integer('zip')->nullable();
            $table->rememberToken();
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
};
