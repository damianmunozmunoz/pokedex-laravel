<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabilidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habilidades')->insert([
            'nombre' => 'Impulso',
            'descripcion' => 'Aumenta su velocidad en cada turno.',
            'fecha_añadido' => '2002-11-21',
            'rareza' => 'Rara',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Corte Fuerte',
            'descripcion' => 'Sus golpes críticos hacen más daño.',
            'fecha_añadido' => '2002-11-21',
            'rareza' => 'Poco común',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Seborrea',
            'descripcion' => 'Puede engrasar los objetos de sus aliados.',
            'fecha_añadido' => '2002-11-21',
            'rareza' => 'Común',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Bromista',
            'descripcion' => 'Permite usar movimientos de estado con prioridad.',
            'fecha_añadido' => '2010-09-18',
            'rareza' => 'Rara',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Competitivo',
            'descripcion' => 'Aumenta su Ataque Especial al bajar alguna característica.',
            'fecha_añadido' => '2013-10-12',
            'rareza' => 'Poco común',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Entusiasmo',
            'descripcion' => 'Aumenta el poder de sus movimientos, pero baja su precisión.',
            'fecha_añadido' => '2006-09-28',
            'rareza' => 'Común',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Francotirador',
            'descripcion' => 'Los golpes críticos hacen más daño.',
            'fecha_añadido' => '2006-09-28',
            'rareza' => 'Poco común',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Aclimatación',
            'descripcion' => 'Evita los efectos de las tormentas de arena.',
            'fecha_añadido' => '2010-09-18',
            'rareza' => 'Común',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Cuerpo Maldito',
            'descripcion' => 'Puede inutilizar el movimiento de un rival que le golpee.',
            'fecha_añadido' => '2010-09-18',
            'rareza' => 'Rara',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Herbívoro',
            'descripcion' => 'Aumenta su Ataque al recibir movimientos de tipo Planta.',
            'fecha_añadido' => '2010-09-18',
            'rareza' => 'Poco común',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Absorbe Agua',
            'descripcion' => 'Recupera PS al ser golpeado por un movimiento de tipo Agua.',
            'fecha_añadido' => '2002-11-21',
            'rareza' => 'Común',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Adaptabilidad',
            'descripcion' => 'Aumenta la potencia de los movimientos del mismo tipo.',
            'fecha_añadido' => '2006-09-28',
            'rareza' => 'Rara',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Allanamiento',
            'descripcion' => 'Ignora las barreras del rival para atacar.',
            'fecha_añadido' => '2013-10-12',
            'rareza' => 'Poco común',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Audaz',
            'descripcion' => 'Aumenta el daño recibido y el daño infligido.',
            'fecha_añadido' => '2010-09-18',
            'rareza' => 'Rara',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Barrera Espinosa',
            'descripcion' => 'Daña al rival cuando hace contacto.',
            'fecha_añadido' => '2013-10-12',
            'rareza' => 'Común',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Cálculo Final',
            'descripcion' => 'Reduce el daño recibido si es un golpe crítico.',
            'fecha_añadido' => '2013-10-12',
            'rareza' => 'Poco común',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Cambio de Color',
            'descripcion' => 'Cambia su tipo al del último movimiento recibido.',
            'fecha_añadido' => '2002-11-21',
            'rareza' => 'Rara',
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Cuerpo Puro',
            'descripcion' => 'Evita la reducción de sus estadísticas.',
            'fecha_añadido' => '2002-11-21',
            'rareza' => 'Común',
        ]);
    }
}
