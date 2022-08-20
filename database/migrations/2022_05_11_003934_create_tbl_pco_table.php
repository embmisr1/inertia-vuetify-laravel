<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPcoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pco', function (Blueprint $table) {
            $table->id();
            $table->string('pco_name')->nullable();
            $table->string('pco_number')->nullable();
            $table->string('pco_email')->nullable();
            $table->string('pco_contact')->nullable();
            $table->string('pco_start_date')->nullable();
            $table->string('pco_end_date')->nullable();
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
        Schema::dropIfExists('tbl_pco');
    }
}
