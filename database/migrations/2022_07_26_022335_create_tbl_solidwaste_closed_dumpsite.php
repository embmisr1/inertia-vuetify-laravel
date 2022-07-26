<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSolidwasteClosedDumpsite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_solidwaste_closed_dumpsite', function (Blueprint $table) {
            $table->id();
            $table->string('cd_total_land_area')->nullable();
            $table->string('cd_date_monitored')->nullable();
            $table->string('cd_site_clearing')->nullable();
            $table->string('cd_site_grading')->nullable();
            $table->string('cd_application_maintenance')->nullable();
            $table->string('cd_provision_drainage')->nullable();
            $table->string('cd_leachate_management')->nullable();
            $table->string('cd_gas_management')->nullable();
            $table->string('cd_fencing_security')->nullable();
            $table->string('cd_putting_sinages')->nullable();
            $table->string('cd_prohibition')->nullable();
            $table->string('cd_status')->nullable();
            $table->string('cd_remarks')->nullable();
            $table->string('cd_date_closure')->nullable();
            $table->unsignedBigInteger('lce_FK')->nullable();
            $table->foreign('lce_FK')->references('id')->on('tbl_solidwaste_lce')->onUpdate('cascade')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_solidwaste_closed_dumpsite');
    }
}
