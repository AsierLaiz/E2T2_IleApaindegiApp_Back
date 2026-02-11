<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdutegiakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ordutegiak = [
            [
                'eguna' => 1, // Astelehena
                'hasiera_data' => Carbon::now()->toDateString(),
                'amaiera_data' => Carbon::now()->addMonths(3)->toDateString(),
                'hasiera_ordua' => '09:00:00',
                'amaiera_ordua' => '17:00:00',
                'taldea_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'eguna' => 3, // Asteazkena
                'hasiera_data' => Carbon::now()->toDateString(),
                'amaiera_data' => Carbon::now()->addMonths(3)->toDateString(),
                'hasiera_ordua' => '10:00:00',
                'amaiera_ordua' => '18:00:00',
                'taldea_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('ordutegiak')->insert($ordutegiak);
    }
}
