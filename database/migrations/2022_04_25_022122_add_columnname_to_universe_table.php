<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnnameToUniverseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('universe', function (Blueprint $table) {
            $table->string('universe_type')->after('id')->nullable();
            $table->string('crs_number')->after('id')->nullable();
            $table->string('proponent')->after('id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('universe', function (Blueprint $table) {
            $table->dropColumn('universe_type')->nullable();
            $table->dropColumn('crs_number')->nullable();
            $table->dropColumn('proponent')->nullable();
        });
    }
}
