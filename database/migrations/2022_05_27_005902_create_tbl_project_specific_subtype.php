<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProjectSpecificSubtype extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_project_specific_subtype', function (Blueprint $table) {
            $table->id();
            $table->string('project_specific_subtype_desc')->nullable();
            $table->foreign('project_specific_type_FK')->references('id')->on('tbl_project_specific_type')->onUpdate('cascade')->nullOnDelete()->nullable();
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
        Schema::dropIfExists('tbl_project_specific_subtype');
    }
}
