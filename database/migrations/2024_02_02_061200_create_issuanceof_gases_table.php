<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuanceofGasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_chauffeur')->create('fleet_issuanceof_gases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trip_id')->nullable();
            $table->date("date")->nullable();
            $table->string("gas_requested")->nullable();
            $table->string("extra")->nullable();
            $table->string("regular")->nullable();
            $table->string("diesel")->nullable();
            $table->string("motor_oil")->nullable();
            $table->string("gear_oil")->nullable();
            $table->string("grease")->nullable();
            $table->string("brake_fluid")->nullable();
            $table->text("others")->nullable();

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
        Schema::dropIfExists('issuanceof_gases');
    }
}
