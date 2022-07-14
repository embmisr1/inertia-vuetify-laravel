<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMonOrSurveyToTblMonitoringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_monitoring', function (Blueprint $table) {
            $table->string('mon_or_survey')->after('mon_date_monitored')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_monitoring', function (Blueprint $table) {
            $table->dropColumn('mon_or_survey');
        });
    }
}
