<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('karyawan_id');
            $table->timestamps();
        });
        Schema::table('manager', function (Blueprint $table) {
            $table->foreign('karyawan_id')->references('id')->on('karyawan');
        });
        Schema::table('staff', function (Blueprint $table) {
            $table->foreign('manager_id')->references('id')->on('manager');
        });
        Schema::table('proyek', function (Blueprint $table) {
            $table->foreign('manager_id')->references('id')->on('manager');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manager', function (Blueprint $table) {
            $table->dropForeign(['karyawan_id']);
        });
        Schema::table('staff', function (Blueprint $table) {
            $table->dropForeign(['manager_id']);
            $table->dropForeign(['karyawan_id']);
        });
        Schema::table('proyek', function (Blueprint $table) {
            $table->dropForeign(['manager_id']);
        });
        Schema::dropIfExists('manager');
    }
}

