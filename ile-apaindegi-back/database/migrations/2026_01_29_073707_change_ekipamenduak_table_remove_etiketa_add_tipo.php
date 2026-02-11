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
        Schema::table('ekipamenduak', function (Blueprint $table) {
            $table->dropColumn('etiketa');
            $table->string('tipo')->default('bestelakoak')->after('izena');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ekipamenduak', function (Blueprint $table) {
            $table->dropColumn('tipo');
            $table->string('etiketa')->after('id');
        });
    }
};
