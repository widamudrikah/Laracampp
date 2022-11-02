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
        Schema::table('transaksis', function (Blueprint $table) {
            $table->string('kode_trx')->after('bootcamp_id')->nullable();
            $table->bigInteger('total_harga')->after('status')->nullable();
            $table->bigInteger('kode_unik')->after('total_harga')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->dropColumn('kode_trx');
            $table->dropColumn('total_harga');
            $table->dropColumn('kode_unik');
        });
    }
};
