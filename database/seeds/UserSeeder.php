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
            'email' => 'amjimenezortiz@gmail.com',
            'tipo_usuario' => '1',
            'password' => Hash::make('12345'),
        ]);

        DB::table('users')->insert([
            'name'=> 'Randy Huaccha',
            'email' => 'randyhuacchalucano@gmail.com',
            'tipo_usuario' => '2',
            'password' => Hash::make('12345'),
        ]);
    }
}
