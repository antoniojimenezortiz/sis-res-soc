<?php

use Illuminate\Database\Seeder;

class DetalleProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detalle_programas')->insert([
            'nombre'=>'Presentación',
            'area' => '1',
            'programa' => '1',
            'estado' => 'activo',
            'fecha_inicio' => '2020-04-15',
            'fecha_fin' => '2020-04-15',
        ]);

        DB::table('detalle_programas')->insert([
            'nombre'=>'Revisión y aprobación',
            'area' => '2',
            'programa' => '1',
            'estado' => 'activo',
            'fecha_inicio' => '2020-04-16',
            'fecha_fin' => '2020-04-22',
        ]);
    }
}
