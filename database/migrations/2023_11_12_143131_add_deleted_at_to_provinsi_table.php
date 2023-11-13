<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToProvinsiTable extends Migration
{
    public function up()
    {
        Schema::table('provinsi', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('provinsi', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};

