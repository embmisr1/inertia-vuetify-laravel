<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->string("platform");
            $table->string("original_link");
            $table->string("shorten_link");
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events_links');
    }
}
