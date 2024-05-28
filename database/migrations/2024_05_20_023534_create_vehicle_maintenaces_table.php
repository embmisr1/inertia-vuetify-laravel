<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleMaintenacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_chauffeur')->create('vehicle_maintenances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->string('odo_meter');
            $table->date('date_of_pr')->nullable();
            $table->integer('gross_amount')->nullable();
            $table->text('description');
            $table->string('supplier');
            $table->date('date_of_p_o')->nullable();
            $table->integer('net_amount')->nullable();
            $table->date('date_repaired')->nullable();
            $table->text('remarks');
            $table->timestamps();
            $table->foreign('vehicle_id')->references('id')->connection('mysql_chauffeur')->on('fleet_vehicles')->onUpdate('cascade')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_chauffeur')->dropIfExists('vehicle_maintenances');
    }
}
