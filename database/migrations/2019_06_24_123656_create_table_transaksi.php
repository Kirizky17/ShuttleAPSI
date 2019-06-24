    <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->String('kode_transaksi',7)->primary();
            $table->String('jenis_transaksi',20);
            $table->String('status_transaksi',20);
            $table->date('tanggal_transaksi');
            $table->integer('total_harga');
            $table->time('jam_transaksi');

            $table->String('keberangkatan',7);
            $table->foreign('keberangkatan')->references('kode_keberangkatan')->on('keberangkatan');

            $table->String('member',14);
            $table->foreign('member')->references('id_member')->on('member');

            $table->bigInteger('non_member')->unsigned();
            $table->foreign('non_member')->references('id')->on('non_member');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
