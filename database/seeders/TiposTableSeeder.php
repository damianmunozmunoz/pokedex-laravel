<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos')->insert([
            'nombre' => 'Normal',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Planta',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Fuego',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Agua',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Eléctrico',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Volador',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Tierra',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Roca',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Lucha',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Psiquico',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Fantasma',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Veneno',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Hielo',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Dragon',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Bicho',
            'generacion_id' => 1
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Acero',
            'generacion_id' => 2
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Siniestro',
            'generacion_id' => 2
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Hada',
            'generacion_id' => 6
        ]);
    }
}
