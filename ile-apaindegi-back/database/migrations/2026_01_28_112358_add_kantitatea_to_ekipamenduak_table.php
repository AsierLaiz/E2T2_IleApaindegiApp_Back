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
            $table->integer('kantitatea')->default(1)->after('marka');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ekipamenduak', function (Blueprint $table) {
            $table->dropColumn('kantitatea');
        });
    }
};
