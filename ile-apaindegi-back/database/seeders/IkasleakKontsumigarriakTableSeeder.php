<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IkasleakKontsumigarriakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rel = [
            [
                'ikaslea_id' => 1,
                'kontsumigarria_id' => 1,
                'erabilitako_kopurua' => 2,
                'erabiltzeko_data' => Carbon::now()->format('Y-m-d'),
                'erabiltzeko_ordua' => Carbon::now()->format('H:i:s'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'ikaslea_id' => 2,
                'kontsumigarria_id' => 2,
                'erabilitako_kopurua' => 1,
                'erabiltzeko_data' => Carbon::now()->subDay()->format('Y-m-d'),
                'erabiltzeko_ordua' => Carbon::now()->subDay()->format('H:i:s'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('ikasleak_kontsumigarriak')->insert($rel);
    }
}
