<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->integer('hotel_id');
            $table->timestamps();
            $table->boolean('concierge');
            $table->boolean('business');
            $table->boolean('spa');
            $table->boolean('fitness');
            $table->boolean('pool');
            $table->boolean('restaurant');
            $table->boolean('laundry');
            $table->boolean('shuttle');
            $table->boolean('wifi');
            $table->boolean('beach');
            $table->boolean('breakfast');
            $table->boolean('pet');
            $table->boolean('nonsmoking');
            $table->boolean('family');
            $table->boolean('charging');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facilities');
    }
}
