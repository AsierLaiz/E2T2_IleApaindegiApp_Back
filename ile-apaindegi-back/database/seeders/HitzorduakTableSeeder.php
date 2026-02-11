<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HitzorduakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hoy = Carbon::now();
        $hitzorduak = [
            [
                'eserlekua' => 1,
                'hitzordua_data' => $hoy->copy()->toDateString(),
                'hasiera_ordua' => '09:00:00',
                'amaiera_ordua' => '09:45:00',
                'iruzkina' => 'Kontsulta orokorra',
                'ikaslea_id' => 1,
                'bezeroa_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'eserlekua' => 2,
                'hitzordua_data' => $hoy->copy()->addDay()->toDateString(),
                'hasiera_ordua' => '11:00:00',
                'amaiera_ordua' => '12:15:00',
                'iruzkina' => 'Koloreztatzea - Ertaina',
                'ikaslea_id' => 2,
                'bezeroa_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'eserlekua' => 3,
                'hitzordua_data' => $hoy->copy()->addDays(2)->toDateString(),
                'hasiera_ordua' => '15:00:00',
                'amaiera_ordua' => '16:00:00',
                'iruzkina' => 'Moztu + Tratamendua',
                'ikaslea_id' => 3,
                'bezeroa_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('hitzorduak')->insert($hitzorduak);
    }
}
