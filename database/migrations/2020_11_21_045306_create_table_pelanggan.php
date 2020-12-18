<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pelanggans', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_pelanggan')->nullable();
            $table->unsignedInteger('token')->nullable();
            $table->string('nama');
            $table->string('password');
            $table->integer('no_telp');
            $table->string('id_alamat');
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
        Schema::dropIfExists('Pelanggans');
    }
}
