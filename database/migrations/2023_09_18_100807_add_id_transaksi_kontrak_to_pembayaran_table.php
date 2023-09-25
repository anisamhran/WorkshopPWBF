<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->unsignedBigInteger('transaksi_kontrak_id');
            $table->foreign('transaksi_kontrak_id')->references('id')->on('transaksi_kontrak');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->foreignId('pembayaran_transaksi_kontrak_id_foreign');
            $table->dropForeign('transaksi_kontrak_id');
        });
    }
};
