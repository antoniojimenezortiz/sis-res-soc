<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Antonio Jimenez',
            'email' => 'antonio@gmail.com',
            'tipo_usuario' => '1',
            'password' => Hash::make('12345'),
            'estado' => 'Activo',
        ]);

        DB::table('users')->insert([
            'name'=> 'Randy Huaccha',
            'email' => 'randy@gmail.com',
            'tipo_usuario' => '2',
            'password' => Hash::make('12345'),
            'estado' => 'Activo',
        ]);
    }
}
