<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSolidwasteSlf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_solidwaste_slf', function (Blueprint $table) {
            $table->id();
            $table->longText('slf_complete_address')->nullable();
            $table->string('slf_latitude')->nullable();
            $table->string('slf_longitude')->nullable();
            $table->string('slf_project_operator')->nullable();
            $table->string('slf_ecc_number')->nullable();
            $table->string('slf_contact_person')->nullable();
            $table->string('slf_contact_number')->nullable();
            $table->string('slf_category')->nullable();
            $table->string('slf_site_hectares')->nullable();
            $table->string('slf_total_capacity')->nullable();
            $table->string('slf_tons_per_day')->nullable();
            $table->string('slf_service_life')->nullable();
            $table->string('slf_remaining_service_life')->nullable();
            $table->string('slf_exceeded_capacity')->nullable();
            $table->string('slf_with_planned_extension')->nullable();
            $table->string('slf_lgu_served')->nullable();
            $table->string('slf_leachate_treatment')->nullable();
            $table->string('slf_daily_soil_cover')->nullable();
            $table->string('slf_presence_of_mrf')->nullable();
            $table->string('slf_separate_cells_for_hazwaste')->nullable();
            $table->string('slf_methane_recovery')->nullable();
            $table->string('slf_discharge_permit')->nullable();
            $table->string('slf_file')->nullable();
            $table->unsignedBigInteger('lca_FK')->nullable();
            $table->foreign('lca_FK')->references('id')->on('tbl_solidwaste_lca')->onUpdate('cascade')->nullOnDelete();
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
        Schema::dropIfExists('tbl_solidwaste_slf');
    }
}
