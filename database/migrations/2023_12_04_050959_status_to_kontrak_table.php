<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('transaksi_kontrak', function (Blueprint $table) {
        $table->enum('status',['unpaid','paid'])->after('tgl_akhir_kontrak'); // Ganti 'kolom_lain' dengan nama kolom yang diinginkan
    });
}


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('transaksi_kontrak', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
