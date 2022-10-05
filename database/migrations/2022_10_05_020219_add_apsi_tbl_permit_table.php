<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddApsiTblPermitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_permit', function (Blueprint $table) {
            $table->string('perm_apsi_unit')->nullable()->after('perm_description');
            $table->integer('perm_apsi_capacity')->nullable()->after('perm_description');
            $table->integer('perm_apsi_qty')->nullable()->after('perm_description');
            $table->string('perm_apsi_type')->nullable()->after('perm_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_permit', function (Blueprint $table) {
            $table->dropColumn('perm_apsi_unit');
            $table->dropColumn('perm_apsi_capacity');
            $table->dropColumn('perm_apsi_qty');
            $table->dropColumn('perm_apsi_type');
        });
    }
}
