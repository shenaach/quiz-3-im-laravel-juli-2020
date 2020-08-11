<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek_staff', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('karyawan_id');
            $table->unsignedInteger('proyek_id');
            $table->foreign('karyawan_id')->references('id')->on('karyawan');
            $table->foreign('proyek_id')->references('id')->on('proyek');
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
        Schema::dropIfExists('proyek_staff');
    }
}

