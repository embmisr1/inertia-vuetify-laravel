<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEccNumberToUniverseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_universe', function (Blueprint $table) {
            $table->unsignedBigInteger('un_ecc_number')->nullable()->after('id');
            $table->foreign('un_ecc_number')->references('id')->on('tbl_permit')->onUpdate('cascade')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_universe', function (Blueprint $table) {
            $table->dropForeign(['un_ecc_number']);
            $table->dropColumn('un_ecc_number');
        });
    }
}
