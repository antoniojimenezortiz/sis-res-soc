<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TipoUsuarioSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FacultadSeeder::class);
        $this->call(AreasSeeder::class);
        $this->call(ProgramaSeeder::class);
        $this->call(DetalleProgramaSeeder::class);

    }
}
