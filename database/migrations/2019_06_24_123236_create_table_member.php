<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->String('id_member',14)->primary();
            $table->String('username',20);
            $table->String('password',20);
            $table->String('nama',20);
            $table->text('alamat');
            $table->date('tanggal_lahir',14);
            $table->integer('jumlah_deposit');
            $table->String('status',14);
            $table->date('masa_aktif',14);
            $table->date('masa_tenggang',14);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
    }
}
