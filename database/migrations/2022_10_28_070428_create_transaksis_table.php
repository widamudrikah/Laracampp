<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->integer('peserta_id');
            $table->integer('bootcamp_id');
            $table->string('nama');
            $table->string('email');
            $table->string('pekerjaan');
            $table->string('rekening');
            $table->string('expired');
            $table->string('cvc');
            $table->integer('status')->default(2);
            /**
             * 1 = Transaksi Sukses
             * 2 = Menunggu Pembayaran / Pending
             * 3 = Transaksi Batal
             */
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
};
