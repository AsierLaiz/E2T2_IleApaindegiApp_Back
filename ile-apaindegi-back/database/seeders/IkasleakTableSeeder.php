<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IkasleakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('ikasleak')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $ikasleak = [
            ['izena' => 'Aithor', 'abizenak' => 'Etxebarria', 'posta_elek' => 'aithor.etxebarria@ikasleak.eus', 'taldea_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Marisa', 'abizenak' => 'González', 'posta_elek' => 'marisa.gonzalez@ikasleak.eus', 'taldea_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Jon', 'abizenak' => 'Azkuna', 'posta_elek' => 'jon.azkuna@ikasleak.eus', 'taldea_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Elena', 'abizenak' => 'Ruiz', 'posta_elek' => 'elena.ruiz@ikasleak.eus', 'taldea_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Carlos', 'abizenak' => 'Fernández', 'posta_elek' => 'carlos.fernandez@ikasleak.eus', 'taldea_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Leire', 'abizenak' => 'Martínez', 'posta_elek' => 'leire.martinez@ikasleak.eus', 'taldea_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Mikel', 'abizenak' => 'Ibáñez', 'posta_elek' => 'mikel.ibanez@ikasleak.eus', 'taldea_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Ainhoa', 'abizenak' => 'Sáenz', 'posta_elek' => 'ainhoa.saenz@ikasleak.eus', 'taldea_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Xabier', 'abizenak' => 'López', 'posta_elek' => 'xabier.lopez@ikasleak.eus', 'taldea_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Erika', 'abizenak' => 'Herranz', 'posta_elek' => 'erika.herranz@ikasleak.eus', 'taldea_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Dani', 'abizenak' => 'Eguía', 'posta_elek' => 'dani.eguia@ikasleak.eus', 'taldea_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Amaia', 'abizenak' => 'Agirre', 'posta_elek' => 'amaia.agirre@ikasleak.eus', 'taldea_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Iñaki', 'abizenak' => 'Urrutia', 'posta_elek' => 'inaki.urrutia@ikasleak.eus', 'taldea_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Nerea', 'abizenak' => 'Goikoetxea', 'posta_elek' => 'nerea.goikoetxea@ikasleak.eus', 'taldea_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['izena' => 'Gorka', 'abizenak' => 'Lizaso', 'posta_elek' => 'gorka.lizaso@ikasleak.eus', 'taldea_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('ikasleak')->insert($ikasleak);
    }
}
