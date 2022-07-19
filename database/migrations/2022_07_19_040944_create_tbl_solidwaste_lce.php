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
            $table->string('lce_province')->nullable();
            $table->string('lce_municipality')->nullable();
            $table->string('lce_barangay')->nullable();
            $table->string('lce_disctrict')->nullable();
            $table->string('lce_zip_code')->nullable();
            $table->string('lce_focal_person')->nullable();
            $table->string('lce_contact_number')->nullable();
            $table->string('lce_email_address')->nullable();
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
        Schema::dropIfExists('tbl_solidwaste_lce');
    }
}
