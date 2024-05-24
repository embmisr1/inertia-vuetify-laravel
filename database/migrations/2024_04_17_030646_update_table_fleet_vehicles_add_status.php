<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableFleetVehiclesAddStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_chauffeur')->table('fleet_vehicles', function (Blueprint $table) {
            $table->enum('status', ['parked', 'driving', 'forthcoming', 'flawed'])->default('parked')->after('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_chauffeur')->table('fleet_vehicles', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
