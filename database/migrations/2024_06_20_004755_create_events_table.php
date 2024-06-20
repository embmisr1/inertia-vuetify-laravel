<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\DB;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $databaseName = DB::connection('mysql')->getDatabaseName();
        Schema::connection('mysql_assemblage')->create('events', function (Blueprint $table) use ($databaseName) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // event creator
            $table->string("title");
            $table->text("description")->nullable();
            $table->string("location")->default("DENR-EMB 3RD-FLOOR ORD CONFERENCE ROOM"); // venue
            $table->dateTime("eventDateTime", 0);
            $table->boolean("isOnline")->default(false);
            $table->boolean("isF2f")->default(false);
            $table->boolean("isHybrid")->default(false);
            $table->integer("requestForMIS")->default(0);
            $table->dateTime("departureDateTime", 0)->nullable();
            $table->text("remarks")->nullable();
            $table->enum("status", ['cancelled', 're-schedule', 'operate'])->default("operate");
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on(new Expression($databaseName . '.users'))->onUpdate('cascade')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
