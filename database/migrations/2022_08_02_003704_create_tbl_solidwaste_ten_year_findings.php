<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSolidwasteTenYearFindings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_solidwaste_ten_year_findings', function (Blueprint $table) {
            $table->id();
            $table->longText('finding_a')->nullable();
            $table->longText('finding_b')->nullable();
            $table->longText('finding_c')->nullable();
            $table->longText('finding_d')->nullable();
            $table->longText('finding_e')->nullable();
            $table->longText('finding_f')->nullable();
            $table->longText('finding_g')->nullable();
            $table->longText('finding_h')->nullable();
            $table->longText('finding_i')->nullable();
            $table->longText('finding_j')->nullable();
            $table->unsignedBigInteger('ten_year_FK')->nullable();
            $table->foreign('ten_year_FK')->references('id')->on('tbl_solidwaste_ten_year')->onUpdate('cascade')->nullOnDelete();
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
        Schema::dropIfExists('tbl_solidwaste_ten_year_findings');
    }
}
