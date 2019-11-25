<?php

use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipousuario')->insert([
            'descripcion'=>'Administrador',
            'estado' => 'Activo',
        ]);
        DB::table('tipousuario')->insert([
            'descripcion'=>'Usuario',
            'estado' => 'Activo',
        ]);
    }
}
