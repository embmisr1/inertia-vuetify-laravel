<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSolidwasteLca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_solidwaste_lca', function (Blueprint $table) {
            $table->id();
            $table->string('lca_title')->nullable();
            $table->string('lca_first_name')->nullable();
            $table->string('lca_middle_name')->nullable();
            $table->string('lca_last_name')->nullable();
            $table->string('lca_salutation')->nullable();
            $table->string('lca_position')->nullable();
            $table->string('lca_municipality')->nullable();
            $table->string('lca_province')->nullable();
            $table->string('lca_disctrict')->nullable();
            $table->longText('lca_complete_address')->nullable();
            $table->string('lca_zip_code')->nullable();
            $table->string('lca_focal_person')->nullable();
            $table->string('lca_contact_number')->nullable();
            $table->string('lca_email_address')->nullable();
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
        Schema::dropIfExists('tbl_solidwaste_lca');
    }
}
