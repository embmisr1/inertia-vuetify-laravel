<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSolidwasteDues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_solidwaste_dues', function (Blueprint $table) {
            $table->id();
            $table->string('dues_purpose')->nullable();
            $table->float('dues_amount_granted', 11, 2)->nullable();
            $table->string('dues_date_granted')->nullable();
            $table->string('dues_unliquidated')->nullable();
            $table->string('dues_remarks')->nullable();
            $table->string('dues_accountant')->nullable();
            $table->string('dues_contact_email')->nullable();
            $table->unsignedBigInteger('lce_FK')->nullable();
            $table->foreign('lce_FK')->references('id')->on('tbl_solidwaste_lce')->onUpdate('cascade')->nullOnDelete();
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
        Schema::dropIfExists('tbl_solidwaste_dues');
    }
}
