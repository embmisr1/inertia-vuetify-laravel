<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProjectSpecificType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_project_specific_type', function (Blueprint $table) {
            $table->id();
            $table->string('project_specific_type_desc')->nullable();
            $table->foreign('project_subtype_FK')->references('id')->on('tbl_project_subtype')->onUpdate('cascade')->nullOnDelete()->nullable();
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
        Schema::dropIfExists('tbl_project_specific_type');
    }
}
