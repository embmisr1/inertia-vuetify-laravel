<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMapPolygon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_map_polygon', function (Blueprint $table) {
            $table->id();
            $table->string('polygon_latitude')->nullable();
            $table->string('polygon_longitude')->nullable();
            $table->unsignedBigInteger('universe_FK')->nullable();
            $table->foreign('universe_FK')->references('id')->on('tbl_universe')->onUpdate('cascade')->nullOnDelete();
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
        Schema::dropIfExists('tbl_map_polygon');
    }
}
