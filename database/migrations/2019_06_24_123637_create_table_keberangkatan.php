<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKeberangkatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keberangkatan', function (Blueprint $table) {
            $table->String('kode_keberangkatan',7)->primary();
            $table->String('status_keberangkatan',20);
            $table->date('tanggal_keberangkatan');

            $table->String('jadwal',7);
            $table->foreign('jadwal')->references('kode_jadwal')->on('jadwal_keberangkatan');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keberangkatan');
    }
}
