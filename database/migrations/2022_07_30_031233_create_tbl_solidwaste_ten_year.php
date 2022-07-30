<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSolidwasteTenYear extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_solidwaste_ten_year', function (Blueprint $table) {
            $table->id();
            $table->string('ten_year_planning_period')->nullable();
            $table->string('ten_year_year_approved')->nullable();
            $table->string('ten_year_number')->nullable();
            $table->string('ten_year_file')->nullable();
            $table->string('ten_year_copy_plan')->nullable();
            $table->string('ten_year_copy_resolution')->nullable();
            $table->string('ten_year_copy_form')->nullable();
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
        Schema::dropIfExists('tbl_solidwaste_ten_year');
    }
}
