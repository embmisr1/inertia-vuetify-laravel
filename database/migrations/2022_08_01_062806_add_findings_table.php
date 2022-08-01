<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFindingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_solidwaste_ten_year', function (Blueprint $table) {
            $table->longText('ten_year_findings')->nullable()->after('ten_year_copy_form');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_solidwaste_ten_year', function (Blueprint $table) {
            $table->dropColumn('ten_year_findings');
        });
    }
}
