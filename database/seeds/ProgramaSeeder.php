<?php

use Illuminate\Database\Seeder;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programas')->insert([
            'anio'=>'2020',
            'estado' => 'Activo',
        ]);

        DB::table('etapas')->insert([
            'nombre'=>'Presentación',
            'area' => '1',
            'programa' => '1',
            'estado' => 'activo',
            'fecha_inicio' => '2020-04-15',
            'fecha_fin' => '2020-04-15',
        ]);

        DB::table('etapas')->insert([
            'nombre'=>'Revisión y aprobación',
            'area' => '2',
            'programa' => '1',
            'estado' => 'activo',
            'fecha_inicio' => '2020-04-16',
            'fecha_fin' => '2020-04-22',
        ]);
    }
}
