<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToKategoriPekerjaTable extends Migration
{
    public function up()
    {
        Schema::table('kategori_pekerja', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('kategori_pekerja', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
