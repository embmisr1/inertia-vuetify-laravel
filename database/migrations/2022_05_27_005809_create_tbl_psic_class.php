<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPsicClass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_psic_class', function (Blueprint $table) {
            $table->id();
            $table->string('psic_class_desc')->nullable();
            $table->unsignedBigInteger('psic_group_FK')->nullable();
            $table->timestamps();
            $table->foreign('psic_group_FK')->references('id')->on('tbl_psic_group')->onUpdate('cascade')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_psic_class');
    }
}
