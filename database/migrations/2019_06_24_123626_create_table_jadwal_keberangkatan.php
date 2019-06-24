<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJadwalKeberangkatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_keberangkatan', function (Blueprint $table) {
            $table->String('kode_jadwal',7)->primary();
            $table->integer('harga');
            $table->time('jam');

            $table->String('mobil',9);
            $table->foreign('mobil')->references('kode_mobil')->on('mobil');

            $table->String('shuttle',7);
            $table->foreign('shuttle')->references('kode_partner')->on('partner');

            $table->String('keberangkatan',7);
            $table->foreign('keberangkatan')->references('kode_pool')->on('pool');

            $table->String('tujuan',7);
            $table->foreign('tujuan')->references('kode_pool')->on('pool');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_keberangkatan');
    }
}
