<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HitzorduakZerbitzuakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pivot = [
            [
                'iruzkinak' => 'Kontsulta + Moztu',
                'hitzordua_id' => 1,
                'zerbitzua_id' => 2, // Moztu
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'iruzkinak' => 'Koloreztatzea ertaina',
                'hitzordua_id' => 2,
                'zerbitzua_id' => 4, // Kolorea - Ertaina
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'iruzkinak' => 'Tratamendu hidratatzailea',
                'hitzordua_id' => 3,
                'zerbitzua_id' => 18, // Ile hidratatzeko tratamendua
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('hitzorduak_zerbitzuak')->insert($pivot);
    }
}
