<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("month");
            // $table->text("address");
            $table->string("prov");
            $table->string("citymun");
            $table->string("brgy");
            $table->string("longitude")->nullable();
            $table->string("latitude")->nullable();
            $table->enum("office",['RO','PA','IS','IN'])->default("RO");
            $table->enum("type_of_monitoring",['DESK','SITE','REMOTE'])->default('SITE');
            $table->enum("type_of_inspection",['PD1586','RA9275','RA8749','RA6969']);
            $table->date("date_of_inspection");
            $table->enum("type",['FIRM','SITE'])->default('FIRM');
            $table->date("notice_of_date")->nullable();
            $table->date("compliance_date")->nullable();
            $table->boolean("complied")->default(false)->nullable();
            $table->text("remarks")->nullable();
            $table->date("payment_date")->nullable();

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
        Schema::dropIfExists('movs');
    }
}
