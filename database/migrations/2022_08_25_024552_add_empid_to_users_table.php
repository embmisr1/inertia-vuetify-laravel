<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmpidToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable()->after('unit_section_id');
            $table->unsignedBigInteger('section_id')->nullable()->after('unit_section_id');
            $table->foreign('employee_id')->references('PK_employee_ID')->on('tbl_employees')->onUpdate('cascade')->nullOnDelete();
            $table->foreign('section_id')->references('PK_section_ID')->on('tbl_section')->onUpdate('cascade')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['employee_id']);
            $table->dropColumn('employee_id');
            $table->dropForeign(['section_id']);
            $table->dropColumn('section_id');
        });
    }
}
