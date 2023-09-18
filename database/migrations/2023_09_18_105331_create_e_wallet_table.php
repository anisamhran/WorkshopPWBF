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
        Schema::create('e_wallet', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ewallet');
            $table->string('no_hp_ewallet');
            $table->date('tgl_pembayaran_ewallet');
            $table->boolean('lunas_ewallet')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_wallet');
    }
};
