<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSolidwasteSection24 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_solidwaste_section24', function (Blueprint $table) {
            $table->id();
            $table->string('section24_iis_number')->nullable();
            $table->string('section24_catered_barangay')->nullable();
            $table->longText('section24_collection_vehicle')->nullable();
            $table->boolean('section24_schedule_of_collection')->nullable();
            $table->boolean('section24_swm_personnel')->default(false);
            $table->boolean('section24_basis_1')->default(false);
            $table->boolean('section24_basis_2')->default(false);
            $table->boolean('section24_basis_3')->default(false);
            $table->boolean('section24_basis_4')->default(false);
            $table->boolean('section24_basis_5')->default(false);
            $table->boolean('section24_basis_6')->default(false);
            $table->boolean('section24_basis_7')->default(false);
            $table->boolean('section24_basis_8')->default(false);
            $table->boolean('section24_basis_9')->default(false);
            $table->boolean('section24_basis_10')->default(false);
            $table->boolean('section24_basis_11')->default(false);
            $table->longText('section24_findings')->nullable();
            $table->longText('section24_remarks')->nullable();
            $table->string('section24_with_letter')->nullable();
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
        Schema::dropIfExists('tbl_solidwaste_section24');
    }
}
