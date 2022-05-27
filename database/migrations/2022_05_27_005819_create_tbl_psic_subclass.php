<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPsicSubclass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_psic_subclass', function (Blueprint $table) {
            $table->id();
            $table->string('psic_subclass_desc')->nullable();
            $table->foreign('psic_class_FK')->references('id')->on('tbl_psic_class')->onUpdate('cascade')->nullOnDelete()->nullable();
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
        Schema::dropIfExists('tbl_psic_subclass');
    }
}
