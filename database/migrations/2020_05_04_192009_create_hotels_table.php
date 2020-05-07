<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 20);
            $table->string('type', 20);
            $table->integer('rating');
            $table->string('website', 20)->unique();
            $table->text('description', 100);
            $table->string('address', 50);
            $table->string('country', 20);
            $table->string('city', 20);
            $table->string('zip', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
