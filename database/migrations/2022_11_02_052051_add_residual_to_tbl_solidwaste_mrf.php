<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddResidualToTblSolidwasteMrf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_solidwaste_mrf', function (Blueprint $table) {
            $table->string('mrf_residual')->nullable()->after('mrf_biodegradable');
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
            $table->dropColumn('mrf_residual');
        });
    }
}
