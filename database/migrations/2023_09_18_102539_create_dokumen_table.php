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
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pembayaran_id');
            $table->string('document');
            $table->timestamps();

            $table->foreign('pembayaran_id')->references('id')->on('pembayaran')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen');
        Schema::table('dokumen', function (Blueprint $table) {
            // $table->foreignId('users_role_id_foreign');
            // $table->dropColumn('role_id');
        });
    }
};
