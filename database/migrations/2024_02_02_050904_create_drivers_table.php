<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_chauffeur')->create('fleet_drivers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->unsignedBigInteger('trip_id')->nullable();
            $table->string("assigned_to")->nullable(); // division or section
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->nullOnDelete();
            $table->foreign('vehicle_id')->references('id')->on('fleet_vehicles')->onUpdate('cascade')->nullOnDelete();
            $table->foreign('trip_id')->references('id')->on('fleet_trips')->onUpdate('cascade')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *l
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
