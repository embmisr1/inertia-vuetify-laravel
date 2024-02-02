<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_chauffeur')->create('fleet_trips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('request_id')->nullable();
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->date('date_of_trip')->nullable();
            $table->text("trip_ticket_no")->nullable();
            $table->text("passengers")->nullable();
            $table->text("meeting")->nullable();


            $table->timestamps();
            $table->foreign('request_id')->references('id')->on('fleet_requests')->onUpdate('cascade')->nullOnDelete();
            $table->foreign('driver_id')->references('id')->on('fleet_drivers')->onUpdate('cascade')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
