<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          

            $table->foreign('position_id')->references('id')->on('positions')->onUpdate('cascade')->nullOnDelete();
            $table->foreign('unit_section_id')->references('id')->on('unit_sections')->onUpdate('cascade')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->dropColumn('position_id');
            // $table->dropColumn('unit_section_id');
        });
    }
}
