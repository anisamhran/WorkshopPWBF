<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToPekerjaTable extends Migration
{
    public function up()
    {
        Schema::table('pekerja', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('pekerja', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
