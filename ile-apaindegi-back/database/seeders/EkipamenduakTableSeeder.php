<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkipamenduakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ekipamenduak = [
            [
                'tipo' => 'Secador',
                'izena' => 'Secador Profesional Dyson',
                'deskribapena' => 'Secador de alto rendimiento para uso diario',
                'marka' => 'Dyson',
                'kantitatea' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo' => 'Secador',
                'izena' => 'Secador Redken',
                'deskribapena' => 'Secador compacto profesional',
                'marka' => 'Redken',
                'kantitatea' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo' => 'Plancha',
                'izena' => 'Plancha de Pelo GHD',
                'deskribapena' => 'Plancha cerámica profesional para alisado',
                'marka' => 'GHD',
                'kantitatea' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo' => 'Plancha',
                'izena' => 'Plancha Babyliss',
                'deskribapena' => 'Plancha con cerámica iónica',
                'marka' => 'Babyliss',
                'kantitatea' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo' => 'Rizador',
                'izena' => 'Rizador Profesional',
                'deskribapena' => 'Rizador con recubrimiento cerámico',
                'marka' => 'Babyliss',
                'kantitatea' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo' => 'Tijeras',
                'izena' => 'Tijeras Profesionales Tondeo',
                'deskribapena' => 'Tijeras de corte para estilistas profesionales',
                'marka' => 'Tondeo',
                'kantitatea' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo' => 'Máquina de Afeitar',
                'izena' => 'Máquina Wahl',
                'deskribapena' => 'Máquina de afeitar eléctrica profesional',
                'marka' => 'Wahl',
                'kantitatea' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo' => 'Cepillo',
                'izena' => 'Cepillo Térmico',
                'deskribapena' => 'Cepillo térmico para moldeado',
                'marka' => 'Remington',
                'kantitatea' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('ekipamenduak')->insert($ekipamenduak);
    }
}
