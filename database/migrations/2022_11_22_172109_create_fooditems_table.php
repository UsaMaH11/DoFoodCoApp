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
        Schema::create('food_items', function (Blueprint $table) {
            $table->id();
            $table->text('food_title');
            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            $table->longText('description');
            $table->tinyInteger('cook_time');
            $table->text('type');
            $table->enum('status', ['approved', 'processing', 'rejected'])->default('processing');
            $table->text('images')->nullable();
            $table->integer('price');
            $table->integer('order_limit');
            $table->json('portion_size');
            $table->json('ingredients');
            $table->string('spcice_level')->nullable();
            $table->text('comments')->nullable();
            $table->integer('rating')->nullable();
            $table->dateTime('expires_in', $precision = 0);
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
        Schema::dropIfExists('food_items');
    }
};
