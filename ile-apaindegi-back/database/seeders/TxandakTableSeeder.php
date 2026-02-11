<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TxandakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $txandak = [
            [
                'mota' => 'M', // goiza
                'data' => Carbon::now()->toDateString(),
                'ikaslea_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'mota' => 'T', // arratsaldea
                'data' => Carbon::now()->addDay()->toDateString(),
                'ikaslea_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('txandak')->insert($txandak);
    }
}
