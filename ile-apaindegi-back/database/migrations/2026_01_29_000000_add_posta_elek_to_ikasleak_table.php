<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('ikasleak', function (Blueprint $table) {
            $table->string('posta_elek')->nullable()->after('abizenak');
            $table->index('posta_elek');
        });
    }

    public function down()
    {
        Schema::table('ikasleak', function (Blueprint $table) {
            $table->dropIndex(['posta_elek']);
            $table->dropColumn('posta_elek');
        });
    }
};
