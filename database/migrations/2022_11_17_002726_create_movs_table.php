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
        Schema::connection('mysql1')->create('movs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();//mov creator
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
            // $table->timestamp("notice_of_date")->default(null)->nullable();
            // $table->timestamp("compliance_date")->default(null)->nullable();
            $table->text("notice_of_date")->default(null)->nullable();
            $table->text("compliance_date")->default(null)->nullable();
            $table->boolean("complied")->default(false)->nullable();
            $table->text("remarks")->nullable();
            // $table->timestamp("payment_date")->default(null)->nullable();
            $table->text("payment_date")->default(null)->nullable();

            $table->timestamps();
            $table->softDeletes();
            // $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->nullOnDelete();
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
