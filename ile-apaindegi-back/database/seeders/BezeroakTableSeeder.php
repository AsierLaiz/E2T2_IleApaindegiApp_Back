<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BezeroakTableSeeder extends Seeder
{
    public function run()
    {
        $bezeroak = [
            [
                'izena' => 'Aitor',
                'abizenak' => 'Etxebarria',
                'telefonoa' => '664521398',
                'posta_elek' => 'aitor@example.com',
                'etxeko_bezeroa' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'izena' => 'Marisa',
                'abizenak' => 'González',
                'telefonoa' => '677894521',
                'posta_elek' => 'marisa@example.com',
                'etxeko_bezeroa' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'izena' => 'Jon',
                'abizenak' => 'Azkuna',
                'telefonoa' => '698765432',
                'posta_elek' => 'jon@example.com',
                'etxeko_bezeroa' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'izena' => 'Elena',
                'abizenak' => 'Ruiz',
                'telefonoa' => '687654321',
                'posta_elek' => 'elena@example.com',
                'etxeko_bezeroa' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('bezeroak')->insert($bezeroak);
    }
}
