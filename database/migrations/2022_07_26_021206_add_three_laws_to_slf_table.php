<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThreeLawsToSlfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_solidwaste_slf', function (Blueprint $table) {
            $table->string('slf_1586_compliance')->after('slf_discharge_permit');
            $table->string('slf_9275_compliance')->after('slf_1586_compliance');
            $table->string('slf_6969_compliance')->after('slf_9275_compliance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_solidwaste_slf', function (Blueprint $table) {
            $table->dropColumn('slf_1586_compliance');
            $table->dropColumn('slf_9275_compliance');
            $table->dropColumn('slf_6969_compliance');
        });
    }
}
