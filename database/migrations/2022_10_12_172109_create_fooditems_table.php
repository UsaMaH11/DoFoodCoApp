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
            $table->integer('user_id')->unsigned()->nullable();
            $table->longText('description');
            $table->tinyInteger('cook_time');
            $table->text('type');
            $table->enum('food_status', ['approved', 'processing', 'rejected'])->default('processing');
            $table->string('images')->nullable();
            $table->integer('price');
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
