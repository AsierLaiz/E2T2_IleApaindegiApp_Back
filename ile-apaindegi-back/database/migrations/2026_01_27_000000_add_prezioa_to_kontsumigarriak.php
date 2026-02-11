<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('kontsumigarriak', function (Blueprint $table) {
            $table->decimal('prezioa', 10, 2)->nullable()->after('marka');
        });
    }

    public function down()
    {
        Schema::table('kontsumigarriak', function (Blueprint $table) {
            $table->dropColumn('prezioa');
        });
    }
};
