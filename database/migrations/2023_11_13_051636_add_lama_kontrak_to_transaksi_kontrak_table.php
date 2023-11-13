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
        Schema::table('transaksi_kontrak', function (Blueprint $table) {
            $table->integer('lama_kontrak'); // Assuming the foto_ktp is a string field, adjust the type if needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi_kontrak', function (Blueprint $table) {
            $table->dropColumn('lama_kontrak');
        });
    }
};
