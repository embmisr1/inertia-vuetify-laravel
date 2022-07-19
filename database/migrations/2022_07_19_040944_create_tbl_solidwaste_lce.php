<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSolidwasteLce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_solidwaste_lce', function (Blueprint $table) {
            $table->id();
            $table->string('lce_title')->nullable();
            $table->string('lce_first_name')->nullable();
            $table->string('lce_middle_name')->nullable();
            $table->string('lce_last_name')->nullable();
            $table->string('lce_salutation')->nullable();
            $table->string('lce_position')->nullable();
            $table->integer('lce_province_FK')->nullable();
            $table->integer('lce_municipality_FK')->nullable();
            $table->integer('lce_barangay_FK')->nullable();
            $table->string('lce_disctrict')->nullable();
            $table->string('lce_zip_code')->nullable();
            $table->string('lce_focal_person')->nullable();
            $table->string('lce_contact_number')->nullable();
            $table->string('lce_email_address')->nullable();
            $table->timestamps();

            $table->foreign('lce_province_FK')->references('PK_province_ID')->on('ref_province')->onUpdate('cascade')->nullOnDelete();
            $table->foreign('lce_municipality_FK')->references('PK_citymun_ID')->on('ref_citymun')->onUpdate('cascade')->nullOnDelete();
            $table->foreign('lce_barangay_FK')->references('PK_brgy_ID')->on('ref_brgy')->onUpdate('cascade')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_solidwaste_lce');
    }
}
