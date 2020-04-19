<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title', 200);
            $table->longText('description');
            $table->string('address');
            $table->string('category');
            $table->integer('bed_room');
            $table->integer('bath_room');
            $table->string('gallery')->nullable();
            $table->float('score')->nullable();
            $table->string('review')->nullable();
            $table->integer('user_id')->unsigned();
            $table->boolean('active')->default(false);

            //Utility Values
            $table->boolean('utility_heating')->default(false)->nullable();
            $table->boolean('utility_wifi')->default(false)->nullable();
            $table->boolean('utility_patio')->default(false)->nullable();

            //Kitchen Values
            $table->boolean('kitchen_fridge')->default(false)->nullable();
            $table->boolean('kitchen_freezer')->default(false)->nullable();
            $table->boolean('kitchen_oven')->default(false)->nullable();
            $table->boolean('kitchen_stove')->default(false)->nullable();
            $table->boolean('kitchen_potspans')->default(false)->nullable();
            $table->boolean('kitchen_microwave')->default(false)->nullable();
            $table->boolean('kitchen_dishwasher')->default(false)->nullable();

            //Bathroom Values
            $table->boolean('bathroom_shower')->default(false)->nullable();
            $table->boolean('bathroom_sink')->default(false)->nullable();
            $table->boolean('bathroom_toilet')->default(false)->nullable();
            $table->boolean('bathroom_bathtub')->default(false)->nullable();
            $table->boolean('bathroom_window')->default(false)->nullable();
            
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
        Schema::dropIfExists('properties');
    }
}
