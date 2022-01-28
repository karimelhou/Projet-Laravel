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
            $table->increments('id')->require();
            $table->string('name')->require();
            $table->string('place')->require();
            $table->datetime('booking_date')->require();
            $table->datetime('leaving_date')->require();
            $table->integer('stars')->require();
            $table->integer('price')->require();
            $table->string('image')->require();
            $table->timestamps();

            $table->foreignId('trip_id')->constrained();
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
