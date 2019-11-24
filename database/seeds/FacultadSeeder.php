<?php

use Illuminate\Database\Seeder;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Facultad')->insert([
            'nombre' => 'Ingeniería',
            'estado' => 'activo'
        ]);
        DB::table('Facultad')->insert([
            'nombre' => 'Ingeniería Química',
            'estado' => 'activo'
        ]);
        DB::table('Facultad')->insert([
            'nombre' => 'Ciencias Económicas',
            'estado' => 'activo'
        ]);
    }
}
