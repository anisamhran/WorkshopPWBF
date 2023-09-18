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
        Schema::create('transaksi_kontrak', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_transaksi');
            $table->date('tgl_mulai_kontrak');
            $table->date('tgl_akhir_kontrak');
            $table->boolean('ubah_alamat');
            $table->boolean('persetujuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_kontrak');
    }
};
