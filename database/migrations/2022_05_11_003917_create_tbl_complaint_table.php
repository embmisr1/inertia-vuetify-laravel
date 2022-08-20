<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblComplaintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_complaint', function (Blueprint $table) {
            $table->id();
            $table->string('comp_name')->nullable();
            $table->string('comp_nature')->nullable();
            $table->longText('comp_attached_file')->nullable();
            $table->longText('comp_action_file')->nullable();
            $table->longText('comp_remarks')->nullable();
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
        Schema::dropIfExists('tbl_complaint');
    }
}
