<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPermitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_permit', function (Blueprint $table) {
            $table->id();
            $table->string('perm_law')->nullable();
            $table->string('perm_hazwaste_type')->nullable();
            $table->string('perm_number')->nullable();
            $table->string('perm_date_acceptance')->nullable();
            $table->string('perm_date_issuance')->nullable();
            $table->string('perm_date_expiry')->nullable();
            $table->longText('perm_file')->nullable();
            $table->longText('perm_description')->nullable();
            $table->string('perm_status')->nullable();
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
        Schema::dropIfExists('tbl_permit');
    }
}
