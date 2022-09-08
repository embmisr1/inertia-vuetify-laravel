<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPoaWwdpHazwasteMonitoringPcoLegalToUniverseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_universe', function (Blueprint $table) {
            $table->unsignedBigInteger('un_poa_number')->nullable()->after('id');
            $table->foreign('un_poa_number')->references('id')->on('tbl_permit')->onUpdate('cascade')->nullOnDelete();

            $table->unsignedBigInteger('un_wwdp_number')->nullable()->after('id');
            $table->foreign('un_wwdp_number')->references('id')->on('tbl_permit')->onUpdate('cascade')->nullOnDelete();

            $table->unsignedBigInteger('un_hazwaste_number')->nullable()->after('id');
            $table->foreign('un_hazwaste_number')->references('id')->on('tbl_permit')->onUpdate('cascade')->nullOnDelete();

            $table->unsignedBigInteger('un_monitoring')->nullable()->after('id');
            $table->foreign('un_monitoring')->references('id')->on('tbl_permit')->onUpdate('cascade')->nullOnDelete();

            $table->unsignedBigInteger('un_pco')->nullable()->after('id');
            $table->foreign('un_pco')->references('id')->on('tbl_permit')->onUpdate('cascade')->nullOnDelete();

            $table->unsignedBigInteger('un_legal')->nullable()->after('id');
            $table->foreign('un_legal')->references('id')->on('tbl_permit')->onUpdate('cascade')->nullOnDelete();
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
            $table->dropForeign(['un_poa_number']);
            $table->dropColumn('un_poa_number');
            
            $table->dropForeign(['un_wwdp_number']);
            $table->dropColumn('un_wwdp_number');
            
            $table->dropForeign(['un_hazwaste_number']);
            $table->dropColumn('un_hazwaste_number');
            
            $table->dropForeign(['un_monitoring']);
            $table->dropColumn('un_monitoring');
            
            $table->dropForeign(['un_pco']);
            $table->dropColumn('un_pco');
            
            $table->dropForeign(['un_legal']);
            $table->dropColumn('un_legal');
        });
    }
}
