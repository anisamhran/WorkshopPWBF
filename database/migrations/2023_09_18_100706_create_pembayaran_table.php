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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaksi_kontrak_id');
            $table->date('tgl_pembayaran')->default(now());
            $table->boolean('lunas')->default(false);
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->foreign('transaksi_kontrak_id')->references('id')->on('transaksi_kontrak')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->foreignId('pembayaran_transaksi_kontrak_id_foreign');
            $table->dropForeign('pembayaran_transaksi_kontrak_id_foreign');
        });
    }
};
