<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMonitoringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_monitoring', function (Blueprint $table) {
            $table->id();
            $table->string('mon_law')->nullable();
            $table->string('mon_date_monitored')->nullable();
            $table->string('mon_type')->nullable();
            $table->longText('mon_file')->nullable();
            $table->integer('universe_FK')->nullable();
            $table->integer('is_priority')->nullable();
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
        Schema::dropIfExists('tbl_monitoring');
    }
}
