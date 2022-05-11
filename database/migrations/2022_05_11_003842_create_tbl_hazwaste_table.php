<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblHazwasteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_hazwaste', function (Blueprint $table) {
            $table->id();
            $table->string('haz_type')->nullable();
            $table->string('haz_number')->nullable();
            $table->string('haz_date_acceptance')->nullable();
            $table->string('haz_date_issuance')->nullable();
            $table->string('haz_date_expiry')->nullable();
            $table->longText('haz_file')->nullable();
            $table->integer('universe_FK')->nullable();
            $table->integer('is_priority')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_hazwaste');
    }
}
