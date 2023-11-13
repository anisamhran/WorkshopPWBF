<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToKotaTable extends Migration
{
    public function up()
    {
        Schema::table('kota', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('kota', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};


