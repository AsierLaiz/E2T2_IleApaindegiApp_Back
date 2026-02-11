<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IkasleakEkipamenduakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rel = [
            [
                'ikaslea_id' => 1,
                'ekipamendua_id' => 1,
                'hasiera_data' => Carbon::now()->subDays(1),
                'amaiera_data' => Carbon::now()->addDays(7),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'ikaslea_id' => 2,
                'ekipamendua_id' => 2,
                'hasiera_data' => Carbon::now(),
                'amaiera_data' => Carbon::now()->addDays(5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('ikasleak_ekipamenduak')->insert($rel);
    }
}
