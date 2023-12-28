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
            $table->Integer('gaji'); // Ganti 'kolom_lain' dengan nama kolom yang diinginkan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi_kontrak', function (Blueprint $table) {
            $table->dropColumn('gaji');
        });
    }
};
