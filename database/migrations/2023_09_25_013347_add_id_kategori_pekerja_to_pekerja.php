<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Attributes\After;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pekerja', function (Blueprint $table) {
            $table->unsignedBigInteger('kategoripekerja_id');
            $table->foreign('kategoripekerja_id')->references('id')->on('kategori_pekerja');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pekerja', function (Blueprint $table) {
            $table->foreignId('pekerja_kategoripekerja_id_foreign');
            $table->dropForeign('pekerja_kategoripekerja_id_foreign');
        });
    }
};
