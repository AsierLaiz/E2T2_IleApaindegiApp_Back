<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KontsumigarriakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kontsumigarriak = [
            [
                'izena' => 'Tinte Rubio Ceniza 500ml',
                'deskribapena' => 'Tinte profesional rubio ceniza',
                'batch' => 'BCH-001',
                'marka' => 'Wella',
                'stock' => 15,
                'min_stock' => 5,
                'iraungitze_data' => now()->addMonths(6)->toDateString(),
                'kategoriak_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'izena' => 'Champú Hidratante 1L',
                'deskribapena' => 'Champú con propiedades hidratantes',
                'batch' => 'BCH-002',
                'marka' => 'Loreal',
                'stock' => 24,
                'min_stock' => 5,
                'iraungitze_data' => now()->addMonths(10)->toDateString(),
                'kategoriak_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'izena' => 'Acondicionador Reparador 1L',
                'deskribapena' => 'Acondicionador con efecto reparador',
                'batch' => 'BCH-003',
                'marka' => 'Loreal',
                'stock' => 18,
                'min_stock' => 5,
                'iraungitze_data' => now()->addMonths(10)->toDateString(),
                'kategoriak_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'izena' => 'Mascarilla Capilar 500ml',
                'deskribapena' => 'Mascarilla intensiva para el cabello',
                'batch' => 'BCH-004',
                'marka' => 'Kerastase',
                'stock' => 12,
                'min_stock' => 3,
                'iraungitze_data' => now()->addMonths(8)->toDateString(),
                'kategoriak_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'izena' => 'Laca Fijadora Fuerte 400ml',
                'deskribapena' => 'Laca con fijación fuerte',
                'batch' => 'BCH-005',
                'marka' => 'Schwarzkopf',
                'stock' => 20,
                'min_stock' => 5,
                'iraungitze_data' => now()->addMonths(12)->toDateString(),
                'kategoriak_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'izena' => 'Espuma Volumen 300ml',
                'deskribapena' => 'Espuma para dar volumen al cabello',
                'batch' => 'BCH-006',
                'marka' => 'Schwarzkopf',
                'stock' => 16,
                'min_stock' => 5,
                'iraungitze_data' => now()->addMonths(10)->toDateString(),
                'kategoriak_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'izena' => 'Cera Modeladora 100ml',
                'deskribapena' => 'Cera para modelar el cabello',
                'batch' => 'BCH-007',
                'marka' => 'American Crew',
                'stock' => 10,
                'min_stock' => 3,
                'iraungitze_data' => now()->addMonths(12)->toDateString(),
                'kategoriak_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'izena' => 'Gel Fijador Fuerte 250ml',
                'deskribapena' => 'Gel con fijación fuerte',
                'batch' => 'BCH-008',
                'marka' => 'American Crew',
                'stock' => 14,
                'min_stock' => 5,
                'iraungitze_data' => now()->addMonths(10)->toDateString(),
                'kategoriak_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('kontsumigarriak')->insert($kontsumigarriak);
    }
}
