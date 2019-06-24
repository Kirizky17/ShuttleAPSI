<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKursi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kursi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('no_kursi',20);
            $table->String('status',20);
            
            $table->String('kd_mobil',9);
            $table->foreign('kd_mobil')->references('kode_mobil')->on('mobil');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kursi');
    }
}
