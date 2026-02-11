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
        Schema::table('zerbitzuak', function (Blueprint $table) {
            $table->string('kategoria')->default('ileapaintzea')->after('iraunaldia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('zerbitzuak', function (Blueprint $table) {
            $table->dropColumn('kategoria');
        });
    }
};
