<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cp_name')->require();
            $table->integer('price')->require();
            $table->integer('capacity')->require();
            $table->string('from')->require();
            $table->string('to')->require();
            $table->datetime('depart_time')->require();

            $table->datetime('return')->require();
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
        Schema::dropIfExists('flights');
    }
}
