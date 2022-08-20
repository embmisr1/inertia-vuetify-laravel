<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSolidwasteMrf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_solidwaste_mrf', function (Blueprint $table) {
            $table->id();
            $table->float('mrf_emb_funded', 11, 2)->nullable();
            $table->string('mrf_latitude')->nullable();
            $table->string('mrf_longitude')->nullable();
            $table->string('mrf_status_operation')->nullable();
            $table->string('mrf_service_area')->nullable();
            $table->string('mrf_total_waste_generation')->nullable();
            $table->string('mrf_biodegradable')->nullable();
            $table->string('mrf_recyclable')->nullable();
            $table->string('mrf_special_waste')->nullable();
            $table->string('mrf_total_waste_diverted')->nullable();
            $table->string('mrf_number_of_waste_diverted')->nullable();
            $table->string('mrf_file')->nullable();
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
        Schema::dropIfExists('tbl_solidwaste_mrf');
    }
}
