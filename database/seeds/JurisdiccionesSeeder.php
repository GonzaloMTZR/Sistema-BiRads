<?php

use Illuminate\Database\Seeder;

class JurisdiccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurisdicciones')->insert([
            [
                'nombre_jurisdiccion' => 'Altamira',
                'estado_id' => 28
            ],
            [
                'nombre_jurisdiccion' => 'Ciudad Mante',
                'estado_id' => 28
            ],
            [
                'nombre_jurisdiccion' => 'Ciudad Reynosa',
                'estado_id' => 28
            ],
            [
                'nombre_jurisdiccion' => 'Ciudad Victoria',
                'estado_id' => 28
            ],
            [
                'nombre_jurisdiccion' => 'Jaumave',
                'estado_id' => 28
            ],
            [
                'nombre_jurisdiccion' => 'Matamoros',
                'estado_id' => 28
            ],
            [
                'nombre_jurisdiccion' => 'Miguel Aleman',
                'estado_id' => 28
            ],
            [
                'nombre_jurisdiccion' => 'Nuevo Laredo',
                'estado_id' => 28
            ],
            [
                'nombre_jurisdiccion' => 'Padilla',
                'estado_id' => 28
            ],
            [
                'nombre_jurisdiccion' => 'San Fernando',
                'estado_id' => 28
            ],
            [
                'nombre_jurisdiccion' => 'Tampico',
                'estado_id' => 28
            ],
            [
                'nombre_jurisdiccion' => 'Valle Hermoso',
                'estado_id' => 28
            ],
        ]);
    }
}
