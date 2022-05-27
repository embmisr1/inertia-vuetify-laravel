<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProjectSubtype extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_project_subtype', function (Blueprint $table) {
            $table->id();
            $table->string('project_subtype_desc')->nullable();
            $table->unsignedBigInteger('project_type_FK')->nullable();
            $table->timestamps();
            $table->foreign('project_type_FK')->references('id')->on('tbl_project_type')->onUpdate('cascade')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_project_subtype');
    }
}
