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
        $this->call(EstadosSeeder::class);
        $this->call(InstitucionesSeeder::class);
        $this->call(JurisdiccionesSeeder::class);
        $this->call(MunicipiosSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(LocalidadesSeeder::class);
        $this->call(UnidadesMedicasSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
