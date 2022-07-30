<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSolidwasteTenYearMonitoring extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_solidwaste_ten_year_monitoring', function (Blueprint $table) {
            $table->id();
            $table->string('ten_year_mon_status')->nullable();
            $table->string('ten_year_mon_date_monitored')->nullable();
            $table->string('ten_year_mon_date_submitted')->nullable();
            $table->string('ten_year_mon_iis_number')->nullable();
            $table->string('ten_year_mon_copy_report')->nullable();
            $table->string('ten_year_mon_by')->nullable();
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
        Schema::dropIfExists('tbl_solidwaste_ten_year_monitoring');
    }
}
