<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompleteaddressToTblSolidwasteMrf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_solidwaste_mrf', function (Blueprint $table) {
            $table->longText('mrf_complete_address')->nullable()->after('id');
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
            $table->dropColumn('mrf_complete_address');
        });
    }
}
