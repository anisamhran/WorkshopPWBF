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
        Schema::create('pekerja', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pekerja');
            $table->date('tgl_lahir');
            $table->string('alamat_pekerja');
            $table->integer('gaji');
            $table->string('no_hp_ewallet', 13);
            $table->string('foto_pekerja');
            $table->string('ktp_pekerja');
            $table->text('deskripsi_pekerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerja');
    }
};
