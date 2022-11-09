<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSolidwasteIec extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_solidwaste_iec', function (Blueprint $table) {
            $table->id();
            $table->string('iec_topic')->nullable();
            $table->string('iec_speaker')->nullable();
            $table->float('iec_male', 11, 2)->nullable();
            $table->float('iec_female', 11, 2)->nullable();
            $table->float('iec_youth', 11, 2)->nullable();
            $table->float('iec_senior_citizen', 11, 2)->nullable();
            $table->float('iec_pwd', 11, 2)->nullable();
            $table->float('iec_lgbt', 11, 2)->nullable();
            $table->float('iec_pdl', 11, 2)->nullable();
            $table->float('iec_adult', 11, 2)->nullable();
            $table->float('iec_total', 11, 2)->nullable();
            $table->string('iec_iis_number')->nullable();
            $table->longText('iec_file_upload')->nullable();
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
        Schema::dropIfExists('tbl_solidwaste_iec');
    }
}
