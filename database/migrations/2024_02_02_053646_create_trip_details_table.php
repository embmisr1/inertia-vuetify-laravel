<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_chauffeur')->create('fleet_trip_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trip_id')->nullable();
            $table->dateTime('departure_time', $precision = 0)->nullable();
            $table->dateTime('departure_place', $precision = 0)->nullable();
            $table->dateTime('arrival_time', $precision = 0)->nullable();
            $table->dateTime('arrival_place', $precision = 0)->nullable();

            $table->string("reading_departure")->nullable();
            $table->string("reading_arrival")->nullable();
            $table->string("km_traveled")->nullable();
            $table->string("gas_consumed")->nullable();
            $table->timestamps();
            $table->foreign('trip_id')->references('id')->on('fleet_trips')->onUpdate('cascade')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trip_details');
    }
}
