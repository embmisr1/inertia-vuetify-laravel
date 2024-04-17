<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_chauffeur')->create('fleet_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');// names of to travel
            $table->text('purpose');
            $table->text('destination');
            $table->text('name_of_firms')->nullable();
            $table->text('places')->nullable();
            $table->date('departure');
            $table->date('arrival');
            $table->unsignedBigInteger('requestedBy'); // name of requestor
            $table->string('approvedBy')->nullable(); // division chief of the unit requested
            $table->enum('status',["pending","approved","declined","archive"])->default('pending');
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
        Schema::dropIfExists('requests');
    }
}
