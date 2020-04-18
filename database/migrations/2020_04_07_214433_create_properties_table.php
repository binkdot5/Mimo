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
            $table->string('gallery');
            $table->float('score');
            $table->string('review');
            $table->integer('user_id')->unsigned();
            $table->boolean('active')->default(false);

            //Utility Values
            $table->boolean('utility_heating')->default(false);
            $table->boolean('utility_wifi')->default(false);
            $table->boolean('utility_patio')->default(false);

            //Kitchen Values
            $table->boolean('kitchen_fridge')->default(false);
            $table->boolean('kitchen_freezer')->default(false);
            $table->boolean('kitchen_oven')->default(false);
            $table->boolean('kitchen_stove')->default(false);
            $table->boolean('kitchen_potspans')->default(false);
            $table->boolean('kitchen_microwave')->default(false);
            $table->boolean('kitchen_dishwasher')->default(false);

            //Bathroom Values
            $table->boolean('bathroom_shower')->default(false);
            $table->boolean('bathroom_sink')->default(false);
            $table->boolean('bathroom_toilet')->default(false);
            $table->boolean('bathroom_bathtub')->default(false);
            $table->boolean('bathroom_window')->default(false);
            
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
