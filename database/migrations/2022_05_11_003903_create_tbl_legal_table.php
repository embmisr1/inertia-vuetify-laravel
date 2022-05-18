<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblLegalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_legal', function (Blueprint $table) {
            $table->id();
            $table->string('nov_law')->nullable();
            $table->string('nov_desc')->nullable();
            $table->string('nov_date')->nullable();
            $table->string('nov_tc')->nullable();
            $table->string('nov_compliance_status')->nullable();
            $table->longText('nov_file')->nullable();
            $table->string('nov_order_number')->nullable();
            $table->string('nov_order_amt')->nullable();
            $table->string('nov_order_date_issuance')->nullable();
            $table->string('nov_order_date_settlement')->nullable();
            $table->string('nov_official_receipt_number')->nullable();
            $table->string('nov_order_status')->nullable();
            $table->longText('nov_order_remarks')->nullable();
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
        Schema::dropIfExists('tbl_legal');
    }
}
