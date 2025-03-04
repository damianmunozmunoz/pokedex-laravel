<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonsTableSeeder extends Seeder
{
    public function run()
    {
        // Generación 1: Kanto
        // Línea evolutiva de tipo_id Planta (Bulbasaur)
        DB::table('pokemons')->insert([
            'nombre' => 'Bulbasaur',
            'peso' => 6.9,
            'altura' => 0.7,
            'genero' => 'Masculino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 1, // Kanto
            'objeto_id' => 1,
            'habilidad_id' => 1
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Ivysaur',
            'peso' => 13.0,
            'altura' => 1.0,
            'genero' => 'Femenino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 1, // Kanto
            'objeto_id' => 2,
            'habilidad_id' => 2 
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Venusaur',
            'peso' => 100.0,
            'altura' => 2.0,
            'genero' => 'Masculino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 1, // Kanto
            'objeto_id' => 3,
            'habilidad_id' => 3
        ]);

        // Línea evolutiva de tipo_id Fuego (Charmander)
        DB::table('pokemons')->insert([
            'nombre' => 'Charmander',
            'peso' => 8.5,
            'altura' => 0.6,
            'genero' => 'Femenino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 1, // Kanto
            'objeto_id' => 4,
            'habilidad_id' => 4
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Charmeleon',
            'peso' => 12.0,
            'altura' => 1.1,
            'genero' => 'Masculino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 1, // Kanto
            'objeto_id' => 5,
            'habilidad_id' => 5
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Charizard',
            'peso' => 90.5,
            'altura' => 1.7,
            'genero' => 'Femenino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 1, // Kanto
            'objeto_id' => 6,
            'habilidad_id' => 6
        ]);

        // Generación 2: Johto
        // Línea evolutiva de tipo_id Planta (Chikorita)
        DB::table('pokemons')->insert([
            'nombre' => 'Chikorita',
            'peso' => 6.4,
            'altura' => 0.9,
            'genero' => 'Femenino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 2, // Johto
            'objeto_id' => 7,
            'habilidad_id' => 7
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Bayleef',
            'peso' => 15.8,
            'altura' => 1.2,
            'genero' => 'Masculino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 2, // Johto
            'objeto_id' => 8,
            'habilidad_id' => 8
             
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Meganium',
            'peso' => 100.5,
            'altura' => 1.8,
            'genero' => 'Femenino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 2, // Johto
            'objeto_id' => 9,
            'habilidad_id' => 9
             
        ]);

        // Línea evolutiva de tipo_id Fuego (Cyndaquil)
        DB::table('pokemons')->insert([
            'nombre' => 'Cyndaquil',
            'peso' => 7.9,
            'altura' => 0.5,
            'genero' => 'Masculino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 2, // Johto
            'objeto_id' => 10,
            'habilidad_id' => 10
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Quilava',
            'peso' => 12.0,
            'altura' => 0.9,
            'genero' => 'Femenino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 2, // Johto
            'objeto_id' => 11,
            'habilidad_id' => 11
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Typhlosion',
            'peso' => 79.5,
            'altura' => 1.7,
            'genero' => 'Masculino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 2, // Johto
            'objeto_id' => 12,
            'habilidad_id' => 12
                  
        ]);

        // Generación 3: Hoenn
        // Línea evolutiva de tipo_id Planta (Treecko)
        DB::table('pokemons')->insert([
            'nombre' => 'Treecko',
            'peso' => 5.0,
            'altura' => 0.5,
            'genero' => 'Masculino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 13,
            'habilidad_id' => 13
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Grovyle',
            'peso' => 21.6,
            'altura' => 0.9,
            'genero' => 'Femenino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 14,
            'habilidad_id' => 14
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Sceptile',
            'peso' => 52.2,
            'altura' => 1.7,
            'genero' => 'Masculino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 15,
            'habilidad_id' => 15
                  
        ]);

        // Línea evolutiva de tipo_id Fuego (Torchic)
        DB::table('pokemons')->insert([
            'nombre' => 'Torchic',
            'peso' => 2.5,
            'altura' => 0.4,
            'genero' => 'Femenino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 16,
            'habilidad_id' => 16
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Combusken',
            'peso' => 12.5,
            'altura' => 0.9,
            'genero' => 'Masculino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 17,
            'habilidad_id' => 17
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Blaziken',
            'peso' => 52.0,
            'altura' => 1.9,
            'genero' => 'Femenino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 18,
            'habilidad_id' => 18
                  
        ]);

        // Generación 4: Sinnoh
        // Línea evolutiva de tipo_id Planta (Turtwig)
        DB::table('pokemons')->insert([
            'nombre' => 'Turtwig',
            'peso' => 10.2,
            'altura' => 0.4,
            'genero' => 'Femenino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 4, // Sinnoh
            'objeto_id' => 12,
            'habilidad_id' => 12
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Grotle',
            'peso' => 97.0,
            'altura' => 1.1,
            'genero' => 'Masculino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 4, // Sinnoh
            'objeto_id' => 1,
            'habilidad_id' => 1
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Torterra',
            'peso' => 310.0,
            'altura' => 2.2,
            'genero' => 'Femenino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 4, // Sinnoh
            'objeto_id' => 2,
            'habilidad_id' => 2
                  
        ]);

        // Línea evolutiva de tipo_id Fuego (Chimchar)
        DB::table('pokemons')->insert([
            'nombre' => 'Chimchar',
            'peso' => 6.2,
            'altura' => 0.5,
            'genero' => 'Masculino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 4, // Sinnoh
            'objeto_id' => 3,
            'habilidad_id' => 3
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Monferno',
            'peso' => 22.0,
            'altura' => 0.9,
            'genero' => 'Femenino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 4, // Sinnoh
            'objeto_id' => 4,
            'habilidad_id' => 4
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Infernape',
            'peso' => 55.0,
            'altura' => 1.2,
            'genero' => 'Masculino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 4, // Sinnoh
            'objeto_id' => 5,
            'habilidad_id' => 5
                  
        ]);

        // Generación 5: Teselia
        // Línea evolutiva de tipo_id Planta (Snivy)
        DB::table('pokemons')->insert([
            'nombre' => 'Snivy',
            'peso' => 8.1,
            'altura' => 0.6,
            'genero' => 'Masculino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 5, // Teselia
            'objeto_id' => 6,
            'habilidad_id' => 6
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Servine',
            'peso' => 16.0,
            'altura' => 0.8,
            'genero' => 'Femenino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 5, // Teselia
            'objeto_id' => 7,
            'habilidad_id' => 7
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Serperior',
            'peso' => 63.0,
            'altura' => 3.3,
            'genero' => 'Masculino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 5, // Teselia
            'objeto_id' => 8,
            'habilidad_id' => 8
                  
        ]);

        // Línea evolutiva de tipo_id Fuego (Tepig)
        DB::table('pokemons')->insert([
            'nombre' => 'Tepig',
            'peso' => 9.9,
            'altura' => 0.5,
            'genero' => 'Femenino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 5, // Teselia
            'objeto_id' => 9,
            'habilidad_id' => 9
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Pignite',
            'peso' => 55.5,
            'altura' => 1.0,
            'genero' => 'Masculino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 5, // Teselia
            'objeto_id' => 10,
            'habilidad_id' => 10
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Emboar',
            'peso' => 150.0,
            'altura' => 1.6,
            'genero' => 'Femenino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 5, // Teselia
            'objeto_id' => 11,
            'habilidad_id' => 11
                  
        ]);

        // Generación 6: Kalos
        // Línea evolutiva de tipo_id Planta (Chespin)
        DB::table('pokemons')->insert([
            'nombre' => 'Chespin',
            'peso' => 9.0,
            'altura' => 0.4,
            'genero' => 'Femenino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 6, // Kalos
            'objeto_id' => 12,
            'habilidad_id' => 12
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Quilladin',
            'peso' => 29.0,
            'altura' => 0.7,
            'genero' => 'Masculino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 6, // Kalos
            'objeto_id' => 13,
            'habilidad_id' => 13
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Chesnaught',
            'peso' => 90.0,
            'altura' => 1.6,
            'genero' => 'Femenino',
            'tipo_id' => 2, // Planta
            'generacion_id' => 6, // Kalos
            'objeto_id' => 14,
            'habilidad_id' => 14
                  
        ]);

        // Línea evolutiva de tipo_id Fuego (Fennekin)
        DB::table('pokemons')->insert([
            'nombre' => 'Fennekin',
            'peso' => 9.4,
            'altura' => 0.4,
            'genero' => 'Masculino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 6, // Kalos
            'objeto_id' => 15,
            'habilidad_id' => 15
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Braixen',
            'peso' => 14.5,
            'altura' => 1.0,
            'genero' => 'Femenino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 6, // Kalos
            'objeto_id' => 16,
            'habilidad_id' => 16
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Delphox',
            'peso' => 39.0,
            'altura' => 1.5,
            'genero' => 'Masculino',
            'tipo_id' => 3, // Fuego
            'generacion_id' => 6, // Kalos
            'objeto_id' => 17,
            'habilidad_id' => 17
                  
        ]);

        // Línea evolutiva de Froakie (Tipo_id Agua)
        DB::table('pokemons')->insert([
            'nombre' => 'Froakie',
            'peso' => 7.0,
            'altura' => 0.3,
            'genero' => 'Masculino',
            'tipo_id' => 4, // Agua
            'generacion_id' => 6, // Kalos
            'objeto_id' => 18,
            'habilidad_id' => 18
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Frogadier',
            'peso' => 10.9,
            'altura' => 0.6,
            'genero' => 'Femenino',
            'tipo_id' => 4, // Agua
            'generacion_id' => 6, // Kalos
            'objeto_id' => 12,
            'habilidad_id' => 12
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Greninja',
            'peso' => 40.0,
            'altura' => 1.5,
            'genero' => 'Masculino',
            'tipo_id' => 4, // Agua
            'generacion_id' => 6, // Kalos
            'objeto_id' => 1,
            'habilidad_id' => 1
                  
        ]);

        // Línea evolutiva de tipo_id Eléctrico (Pikachu)
        DB::table('pokemons')->insert([
            'nombre' => 'Pichu',
            'peso' => 2.0,
            'altura' => 0.3,
            'genero' => 'Femenino',
            'tipo_id' => 5, // Eléctrico
            'generacion_id' => 2, // Johto
            'objeto_id' => 2,
            'habilidad_id' => 2
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Pikachu',
            'peso' => 6.0,
            'altura' => 0.4,
            'genero' => 'Masculino',
            'tipo_id' => 5, // Eléctrico
            'generacion_id' => 1, // Kanto
            'objeto_id' => 3,
            'habilidad_id' => 3
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Raichu',
            'peso' => 30.0,
            'altura' => 0.8,
            'genero' => 'Femenino',
            'tipo_id' => 5, // Eléctrico
            'generacion_id' => 1, // Kanto
            'objeto_id' => 4,
            'habilidad_id' => 4
                  
        ]);

        // Línea evolutiva de tipo_id Eléctrico (Mareep)
        DB::table('pokemons')->insert([
            'nombre' => 'Mareep',
            'peso' => 7.8,
            'altura' => 0.6,
            'genero' => 'Masculino',
            'tipo_id' => 5, // Eléctrico
            'generacion_id' => 2, // Johto
            'objeto_id' => 5,
            'habilidad_id' => 5
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Flaaffy',
            'peso' => 13.3,
            'altura' => 0.8,
            'genero' => 'Femenino',
            'tipo_id' => 5, // Eléctrico
            'generacion_id' => 2, // Johto
            'objeto_id' => 6,
            'habilidad_id' => 6
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Ampharos',
            'peso' => 61.5,
            'altura' => 1.4,
            'genero' => 'Masculino',
            'tipo_id' => 5, // Eléctrico
            'generacion_id' => 2, // Johto
            'objeto_id' => 7,
            'habilidad_id' => 7
                  
        ]);

        // Línea evolutiva de tipo_id Tierra (Sandshrew)
        DB::table('pokemons')->insert([
            'nombre' => 'Sandshrew',
            'peso' => 12.0,
            'altura' => 0.6,
            'genero' => 'Femenino',
            'tipo_id' => 7, // Tierra
            'generacion_id' => 1, // Kanto
            'objeto_id' => 8,
            'habilidad_id' => 8
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Sandslash',
            'peso' => 29.5,
            'altura' => 1.0,
            'genero' => 'Masculino',
            'tipo_id' => 7, // Tierra
            'generacion_id' => 1, // Kanto
            'objeto_id' => 9,
            'habilidad_id' => 9
                  
        ]);

        // Línea evolutiva de tipo_id Tierra (Trapinch)
        DB::table('pokemons')->insert([
            'nombre' => 'Trapinch',
            'peso' => 15.0,
            'altura' => 0.7,
            'genero' => 'Femenino',
            'tipo_id' => 7, // Tierra
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 10,
            'habilidad_id' => 10
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Vibrava',
            'peso' => 15.3,
            'altura' => 1.1,
            'genero' => 'Masculino',
            'tipo_id' => 7, // Tierra
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 11,
            'habilidad_id' => 11
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Flygon',
            'peso' => 82.0,
            'altura' => 2.0,
            'genero' => 'Femenino',
            'tipo_id' => 7, // Tierra
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 12,
            'habilidad_id' => 12
                  
        ]);

        // Línea evolutiva de tipo_id Roca (Geodude)
        DB::table('pokemons')->insert([
            'nombre' => 'Geodude',
            'peso' => 20.0,
            'altura' => 0.4,
            'genero' => 'Masculino',
            'tipo_id' => 8, // Roca
            'generacion_id' => 1, // Kanto
            'objeto_id' => 13,
            'habilidad_id' => 13
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Graveler',
            'peso' => 105.0,
            'altura' => 1.0,
            'genero' => 'Femenino',
            'tipo_id' => 8, // Roca
            'generacion_id' => 1, // Kanto
            'objeto_id' => 14,
            'habilidad_id' => 14
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Golem',
            'peso' => 300.0,
            'altura' => 1.4,
            'genero' => 'Masculino',
            'tipo_id' => 8, // Roca
            'generacion_id' => 1, // Kanto
            'objeto_id' => 15,
            'habilidad_id' => 15
                  
        ]);

        // Línea evolutiva de tipo_id Roca (Larvitar)
        DB::table('pokemons')->insert([
            'nombre' => 'Larvitar',
            'peso' => 72.0,
            'altura' => 0.6,
            'genero' => 'Femenino',
            'tipo_id' => 8, // Roca
            'generacion_id' => 2, // Johto
            'objeto_id' => 16,
            'habilidad_id' => 16
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Pupitar',
            'peso' => 152.0,
            'altura' => 1.2,
            'genero' => 'Masculino',
            'tipo_id' => 8, // Roca
            'generacion_id' => 2, // Johto
            'objeto_id' => 17,
            'habilidad_id' => 17
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Tyranitar',
            'peso' => 202.0,
            'altura' => 2.0,
            'genero' => 'Femenino',
            'tipo_id' => 8, // Roca
            'generacion_id' => 2, // Johto
            'objeto_id' => 18,
            'habilidad_id' => 18
                  
        ]);

        // Línea evolutiva de tipo_id Lucha (Machop)
        DB::table('pokemons')->insert([
            'nombre' => 'Machop',
            'peso' => 12.5,
            'altura' => 0.8,
            'genero' => 'Masculino',
            'tipo_id' => 9, // Lucha
            'generacion_id' => 1, // Kanto
            'objeto_id' => 12,
            'habilidad_id' => 12
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Machoke',
            'peso' => 70.5,
            'altura' => 1.5,
            'genero' => 'Femenino',
            'tipo_id' => 9, // Lucha
            'generacion_id' => 1, // Kanto
            'objeto_id' => 1,
            'habilidad_id' => 1
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Machamp',
            'peso' => 130.0,
            'altura' => 1.6,
            'genero' => 'Masculino',
            'tipo_id' => 9, // Lucha
            'generacion_id' => 1, // Kanto
            'objeto_id' => 2,
            'habilidad_id' => 2
                  
        ]);

        // Línea evolutiva de tipo_id Lucha (Riolu)
        DB::table('pokemons')->insert([
            'nombre' => 'Riolu',
            'peso' => 20.2,
            'altura' => 0.7,
            'genero' => 'Femenino',
            'tipo_id' => 9, // Lucha
            'generacion_id' => 4, // Sinnoh
            'objeto_id' => 3,
            'habilidad_id' => 3
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Lucario',
            'peso' => 54.0,
            'altura' => 1.2,
            'genero' => 'Masculino',
            'tipo_id' => 9, // Lucha
            'generacion_id' => 4, // Sinnoh
            'objeto_id' => 4,
            'habilidad_id' => 4
                  
        ]);

        // Línea evolutiva de tipo_id Psíquico (Abra)
        DB::table('pokemons')->insert([
            'nombre' => 'Abra',
            'peso' => 12.5,
            'altura' => 0.9,
            'genero' => 'Masculino',
            'tipo_id' => 10, // Psíquico
            'generacion_id' => 1, // Kanto
            'objeto_id' => 5,
            'habilidad_id' => 5
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Kadabra',
            'peso' => 56.5,
            'altura' => 1.3,
            'genero' => 'Femenino',
            'tipo_id' => 10, // Psíquico
            'generacion_id' => 1, // Kanto
            'objeto_id' => 6,
            'habilidad_id' => 6
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Alakazam',
            'peso' => 48.0,
            'altura' => 1.5,
            'genero' => 'Masculino',
            'tipo_id' => 10, // Psíquico
            'generacion_id' => 1, // Kanto
            'objeto_id' => 7,
            'habilidad_id' => 7
                  
        ]);

        // Línea evolutiva de tipo_id Psíquico (Ralts)
        DB::table('pokemons')->insert([
            'nombre' => 'Ralts',
            'peso' => 6.6,
            'altura' => 0.4,
            'genero' => 'Femenino',
            'tipo_id' => 10, // Psíquico
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 8,
            'habilidad_id' => 8
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Kirlia',
            'peso' => 20.2,
            'altura' => 0.8,
            'genero' => 'Masculino',
            'tipo_id' => 10, // Psíquico
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 9,
            'habilidad_id' => 9
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Gardevoir',
            'peso' => 48.4,
            'altura' => 1.6,
            'genero' => 'Femenino',
            'tipo_id' => 10, // Psíquico
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 10,
            'habilidad_id' => 10
                  
        ]);

        // Línea evolutiva de tipo_id Fantasma (Gastly)
        DB::table('pokemons')->insert([
            'nombre' => 'Gastly',
            'peso' => 0.1,
            'altura' => 1.3,
            'genero' => 'Masculino',
            'tipo_id' => 11, // Fantasma
            'generacion_id' => 1, // Kanto
            'objeto_id' => 11,
            'habilidad_id' => 11
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Haunter',
            'peso' => 0.1,
            'altura' => 1.6,
            'genero' => 'Femenino',
            'tipo_id' => 11, // Fantasma
            'generacion_id' => 1, // Kanto
            'objeto_id' => 12,
            'habilidad_id' => 12
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Gengar',
            'peso' => 40.5,
            'altura' => 1.5,
            'genero' => 'Masculino',
            'tipo_id' => 11, // Fantasma
            'generacion_id' => 1, // Kanto
            'objeto_id' => 13,
            'habilidad_id' => 13
                  
        ]);

        // Línea evolutiva de tipo_id Fantasma (Shuppet)
        DB::table('pokemons')->insert([
            'nombre' => 'Shuppet',
            'peso' => 2.3,
            'altura' => 0.6,
            'genero' => 'Femenino',
            'tipo_id' => 11, // Fantasma
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 14,
            'habilidad_id' => 14
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Banette',
            'peso' => 12.5,
            'altura' => 1.1,
            'genero' => 'Masculino',
            'tipo_id' => 11, // Fantasma
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 15,
            'habilidad_id' => 15
                  
        ]);

        // Línea evolutiva de tipo_id Veneno (Nidoran♀)
        DB::table('pokemons')->insert([
            'nombre' => 'Nidoran♀',
            'peso' => 7.0,
            'altura' => 0.4,
            'genero' => 'Femenino',
            'tipo_id' => 12, // Veneno
            'generacion_id' => 1, // Kanto
            'objeto_id' => 16,
            'habilidad_id' => 16
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Nidorina',
            'peso' => 20.0,
            'altura' => 0.8,
            'genero' => 'Femenino',
            'tipo_id' => 12, // Veneno
            'generacion_id' => 1, // Kanto
            'objeto_id' => 17,
            'habilidad_id' => 17
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Nidoqueen',
            'peso' => 60.0,
            'altura' => 1.3,
            'genero' => 'Femenino',
            'tipo_id' => 12, // Veneno
            'generacion_id' => 1, // Kanto
            'objeto_id' => 18,
            'habilidad_id' => 18
                  
        ]);

        // Línea evolutiva de tipo_id Veneno (Grimer)
        DB::table('pokemons')->insert([
            'nombre' => 'Grimer',
            'peso' => 30.0,
            'altura' => 0.9,
            'genero' => 'Masculino',
            'tipo_id' => 12, // Veneno
            'generacion_id' => 1, // Kanto
            'objeto_id' => 12,
            'habilidad_id' => 12
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Muk',
            'peso' => 30.0,
            'altura' => 1.2,
            'genero' => 'Femenino',
            'tipo_id' => 12, // Veneno
            'generacion_id' => 1, // Kanto
            'objeto_id' => 1,
            'habilidad_id' => 1
                  
        ]);

        // Línea evolutiva de tipo_id Hielo (Swinub)
        DB::table('pokemons')->insert([
            'nombre' => 'Swinub',
            'peso' => 6.5,
            'altura' => 0.4,
            'genero' => 'Masculino',
            'tipo_id' => 13, // Hielo
            'generacion_id' => 2, // Johto
            'objeto_id' => 2,
            'habilidad_id' => 2
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Piloswine',
            'peso' => 55.8,
            'altura' => 1.1,
            'genero' => 'Femenino',
            'tipo_id' => 13, // Hielo
            'generacion_id' => 2, // Johto
            'objeto_id' => 3,
            'habilidad_id' => 3
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Mamoswine',
            'peso' => 291.0,
            'altura' => 2.5,
            'genero' => 'Masculino',
            'tipo_id' => 13, // Hielo
            'generacion_id' => 4, // Sinnoh
            'objeto_id' => 4,
            'habilidad_id' => 4
                  
        ]);

        // Línea evolutiva de tipo_id Hielo (Snorunt)
        DB::table('pokemons')->insert([
            'nombre' => 'Snorunt',
            'peso' => 16.8,
            'altura' => 0.7,
            'genero' => 'Femenino',
            'tipo_id' => 13, // Hielo
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 5,
            'habilidad_id' => 5
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Glalie',
            'peso' => 256.5,
            'altura' => 1.5,
            'genero' => 'Masculino',
            'tipo_id' => 13, // Hielo
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 6,
            'habilidad_id' => 6
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Froslass',
            'peso' => 26.6,
            'altura' => 1.3,
            'genero' => 'Femenino',
            'tipo_id' => 13, // Hielo
            'generacion_id' => 4, // Sinnoh
            'objeto_id' => 7,
            'habilidad_id' => 7
                  
        ]);

        // Línea evolutiva de tipo_id Dragón (Dratini)
        DB::table('pokemons')->insert([
            'nombre' => 'Dratini',
            'peso' => 3.3,
            'altura' => 1.8,
            'genero' => 'Masculino',
            'tipo_id' => 14, // Dragón
            'generacion_id' => 1, // Kanto
            'objeto_id' => 8,
            'habilidad_id' => 8
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Dragonair',
            'peso' => 16.5,
            'altura' => 4.0,
            'genero' => 'Femenino',
            'tipo_id' => 14, // Dragón
            'generacion_id' => 1, // Kanto
            'objeto_id' => 9,
            'habilidad_id' => 9
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Dragonite',
            'peso' => 210.0,
            'altura' => 2.2,
            'genero' => 'Masculino',
            'tipo_id' => 14, // Dragón
            'generacion_id' => 1, // Kanto
            'objeto_id' => 10,
            'habilidad_id' => 10
                  
        ]);

        // Línea evolutiva de tipo_id Dragón (Bagon)
        DB::table('pokemons')->insert([
            'nombre' => 'Bagon',
            'peso' => 42.1,
            'altura' => 0.6,
            'genero' => 'Femenino',
            'tipo_id' => 14, // Dragón
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 11,
            'habilidad_id' => 11
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Shelgon',
            'peso' => 110.5,
            'altura' => 1.1,
            'genero' => 'Masculino',
            'tipo_id' => 14, // Dragón
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 12,
            'habilidad_id' => 12
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Salamence',
            'peso' => 102.6,
            'altura' => 1.5,
            'genero' => 'Femenino',
            'tipo_id' => 14, // Dragón
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 13,
            'habilidad_id' => 13
                  
        ]);

        // Línea evolutiva de tipo_id Bicho (Weedle)
        DB::table('pokemons')->insert([
            'nombre' => 'Weedle',
            'peso' => 3.2,
            'altura' => 0.3,
            'genero' => 'Masculino',
            'tipo_id' => 15, // Bicho
            'generacion_id' => 1, // Kanto
            'objeto_id' => 14,
            'habilidad_id' => 14
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Kakuna',
            'peso' => 10.0,
            'altura' => 0.6,
            'genero' => 'Femenino',
            'tipo_id' => 15, // Bicho
            'generacion_id' => 1, // Kanto
            'objeto_id' => 15,
            'habilidad_id' => 15
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Beedrill',
            'peso' => 29.5,
            'altura' => 1.0,
            'genero' => 'Masculino',
            'tipo_id' => 15, // Bicho
            'generacion_id' => 1, // Kanto
            'objeto_id' => 16,
            'habilidad_id' => 16
                  
        ]);

        // Línea evolutiva de tipo_id Bicho (Wurmple)
        DB::table('pokemons')->insert([
            'nombre' => 'Wurmple',
            'peso' => 3.6,
            'altura' => 0.3,
            'genero' => 'Femenino',
            'tipo_id' => 15, // Bicho
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 17,
            'habilidad_id' => 17
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Silcoon',
            'peso' => 10.0,
            'altura' => 0.6,
            'genero' => 'Masculino',
            'tipo_id' => 15, // Bicho
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 18,
            'habilidad_id' => 18
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Beautifly',
            'peso' => 28.4,
            'altura' => 1.0,
            'genero' => 'Femenino',
            'tipo_id' => 15, // Bicho
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 12,
            'habilidad_id' => 12
                  
        ]);

        // Línea evolutiva de tipo_id Acero (Aron)
        DB::table('pokemons')->insert([
            'nombre' => 'Aron',
            'peso' => 60.0,
            'altura' => 0.4,
            'genero' => 'Masculino',
            'tipo_id' => 16, // Acero
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 1,
            'habilidad_id' => 1
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Lairon',
            'peso' => 120.0,
            'altura' => 0.9,
            'genero' => 'Femenino',
            'tipo_id' => 16, // Acero
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 2,
            'habilidad_id' => 2
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Aggron',
            'peso' => 360.0,
            'altura' => 2.1,
            'genero' => 'Masculino',
            'tipo_id' => 16, // Acero
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 3,
            'habilidad_id' => 3
                  
        ]);

        // Línea evolutiva de tipo_id Acero (Beldum)
        DB::table('pokemons')->insert([
            'nombre' => 'Beldum',
            'peso' => 95.2,
            'altura' => 0.6,
            'genero' => 'Femenino',
            'tipo_id' => 16, // Acero
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 4,
            'habilidad_id' => 4
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Metang',
            'peso' => 202.5,
            'altura' => 1.2,
            'genero' => 'Masculino',
            'tipo_id' => 16, // Acero
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 5,
            'habilidad_id' => 5
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Metagross',
            'peso' => 550.0,
            'altura' => 1.6,
            'genero' => 'Femenino',
            'tipo_id' => 16, // Acero
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 6,
            'habilidad_id' => 6
                  
        ]);

        // Línea evolutiva de tipo_id Siniestro (Poochyena)
        DB::table('pokemons')->insert([
            'nombre' => 'Poochyena',
            'peso' => 13.6,
            'altura' => 0.5,
            'genero' => 'Masculino',
            'tipo_id' => 17, // Siniestro
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 7,
            'habilidad_id' => 7
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Mightyena',
            'peso' => 37.0,
            'altura' => 1.0,
            'genero' => 'Femenino',
            'tipo_id' => 17, // Siniestro
            'generacion_id' => 3, // Hoenn
            'objeto_id' => 8,
            'habilidad_id' => 8
                  
        ]);

        // Línea evolutiva de tipo_id Siniestro (Sneasel)
        DB::table('pokemons')->insert([
            'nombre' => 'Sneasel',
            'peso' => 28.0,
            'altura' => 0.9,
            'genero' => 'Masculino',
            'tipo_id' => 17, // Siniestro
            'generacion_id' => 2, // Johto
            'objeto_id' => 9,
            'habilidad_id' => 9
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Weavile',
            'peso' => 34.0,
            'altura' => 1.1,
            'genero' => 'Femenino',
            'tipo_id' => 17, // Siniestro
            'generacion_id' => 4, // Sinnoh
            'objeto_id' => 10,
            'habilidad_id' => 10
                  
        ]);

        // Línea evolutiva de tipo_id Hada (Cleffa)
        DB::table('pokemons')->insert([
            'nombre' => 'Cleffa',
            'peso' => 3.0,
            'altura' => 0.3,
            'genero' => 'Femenino',
            'tipo_id' => 18, // Hada
            'generacion_id' => 2, // Johto
            'objeto_id' => 11,
            'habilidad_id' => 11
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Clefairy',
            'peso' => 7.5,
            'altura' => 0.6,
            'genero' => 'Masculino',
            'tipo_id' => 18, // Hada
            'generacion_id' => 1, // Kanto
            'objeto_id' => 12,
            'habilidad_id' => 12
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Clefable',
            'peso' => 40.0,
            'altura' => 1.3,
            'genero' => 'Femenino',
            'tipo_id' => 18, // Hada
            'generacion_id' => 1, // Kanto
            'objeto_id' => 13,
            'habilidad_id' => 13
                  
        ]);

        // Línea evolutiva de tipo_id Hada (Togepi)
        DB::table('pokemons')->insert([
            'nombre' => 'Togepi',
            'peso' => 1.5,
            'altura' => 0.3,
            'genero' => 'Masculino',
            'tipo_id' => 18, // Hada
            'generacion_id' => 2, // Johto
            'objeto_id' => 14,
            'habilidad_id' => 14
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Togetic',
            'peso' => 3.2,
            'altura' => 0.6,
            'genero' => 'Femenino',
            'tipo_id' => 18, // Hada
            'generacion_id' => 2, // Johto
            'objeto_id' => 15,
            'habilidad_id' => 15
                  
        ]);
        DB::table('pokemons')->insert([
            'nombre' => 'Togekiss',
            'peso' => 38.0,
            'altura' => 1.5,
            'genero' => 'Masculino',
            'tipo_id' => 18, // Hada
            'generacion_id' => 4, // Sinnoh
            'objeto_id' => 16,
            'habilidad_id' => 16
                  
        ]);
    }
}
