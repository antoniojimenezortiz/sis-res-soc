<?php

use Illuminate\Database\Seeder;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'descripcion'=>'Mesa de partes',
            'estado' => 'Activo',
        ]);
        DB::table('areas')->insert([
            'descripcion'=>'Comité RSU',
            'estado' => 'Activo',
        ]);

        DB::table('areas')->insert([
            'descripcion'=>'Equipo docente',
            'estado' => 'Activo',
        ]);

        DB::table('areas')->insert([
            'descripcion'=>'Director de dpto académico',
            'estado' => 'Activo',
        ]);
        DB::table('areas')->insert([
            'descripcion'=>'Decano',
            'estado' => 'Activo',
        ]);
    }
}
