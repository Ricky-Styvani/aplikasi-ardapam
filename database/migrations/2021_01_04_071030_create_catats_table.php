<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelanggan')->reference('id_pelanggan')->on('pelanggans');
            $table->integer('id_transaksi')->unique();
            $table->bigInteger('harga_air');
            $table->integer('meter_awal');
            $table->integer('meter_akhir');
            $table->integer('admin');
            $table->integer('perawatan');
            $table->bigInteger('total');
            $table->DATETIME('pembayaran');
            $table->string('status');
            $table->softDeletes('deleted_at');
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
        Schema::dropIfExists('transaksis');
    }
}
