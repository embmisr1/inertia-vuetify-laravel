<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMrfOrRcaToMrfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_solidwaste_mrf', function (Blueprint $table) {
            $table->string('mrf_or_rca')->nullable()->after('mrf_file');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_solidwaste_mrf', function (Blueprint $table) {
            $table->dropColumn('mrf_or_rca');
        });
    }
}
