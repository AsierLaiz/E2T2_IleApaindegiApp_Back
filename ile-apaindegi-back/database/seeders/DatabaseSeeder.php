<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            // Orden con dependencias: Taldeak -> Ikasleak
            TaldeakTableSeeder::class,
            IkasleakTableSeeder::class,

            // Categorías y servicios base
            KategoriakTableSeeder::class,
            ZerbitzuakTableSeeder::class,

            // Clientes e inventario
            BezeroakTableSeeder::class,
            EkipamenduakTableSeeder::class,
            KontsumigarriakTableSeeder::class,

            // Agenda y relaciones
            OrdutegiakTableSeeder::class,
            TxandakTableSeeder::class,
            HitzorduakTableSeeder::class,
            HitzorduakZerbitzuakTableSeeder::class,
            IkasleakEkipamenduakTableSeeder::class,
            IkasleakKontsumigarriakTableSeeder::class,

            // Usuarios del sistema
            ErabiltzaileakTableSeeder::class,
        ]);
    }
}