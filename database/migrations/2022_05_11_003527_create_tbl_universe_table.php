<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUniverseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_universe', function (Blueprint $table) {
            $table->id();
            $table->string('un_crs_number')->nullable();
            $table->integer('un_psic_group')->nullable();
            $table->integer('un_psic_class')->nullable();
            $table->integer('un_psic_subclass')->nullable();
            $table->integer('un_region')->nullable();
            $table->string('un_firmname')->nullable();
            $table->string('un_proponent')->nullable();
            $table->integer('un_project_type')->nullable();
            $table->integer('un_project_subtype')->nullable();
            $table->integer('un_project_specific_type')->nullable();
            $table->integer('un_project_specific_subtype')->nullable();
            $table->integer('un_detailed_description')->nullable();
            $table->integer('un_specific_address')->nullable();
            $table->integer('un_brgy')->nullable();
            $table->integer('un_municipality')->nullable();
            $table->integer('un_province')->nullable();
            $table->string('un_lat')->nullable();
            $table->string('un_long')->nullable();
            $table->string('un_representative_name')->nullable();
            $table->string('un_representative_designation')->nullable();
            $table->string('un_representative_gender')->nullable();
            $table->longText('ub_remarks')->nullable();
            $table->string('un_status')->nullable();
            $table->string('un_type')->nullable();
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
        Schema::dropIfExists('tbl_universe');
    }
}
