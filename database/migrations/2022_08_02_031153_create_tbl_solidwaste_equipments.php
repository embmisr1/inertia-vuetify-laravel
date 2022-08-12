<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSolidwasteEquipments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_solidwaste_equipments', function (Blueprint $table) {
            $table->id();
            $table->string('equipment_description')->nullable();
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
        Schema::dropIfExists('tbl_solidwaste_equipments');
    }
}
