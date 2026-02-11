<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaldeakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $taldeak = [
            ['izena' => 'DAW-1', 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'DAW-2', 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'ASIR-1', 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'ASIR-2', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('taldeak')->insert($taldeak);
    }
}
