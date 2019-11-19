<?php

use Illuminate\Database\Seeder;

class LocalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('localidades')->insert([
            [
                'nombre_localidad' => 'Ciudad Victoria',
                'codigo_localidad' => '001',
                'municipio_id' => 7
            ],
            [
                'nombre_localidad' => 'Benito Juarez',
                'codigo_localidad' => '002',
                'municipio_id' => 7
            ],
            [
                'nombre_localidad' => 'Buena vista',
                'codigo_localidad' => '003',
                'municipio_id' => 7
            ],
            [
                'nombre_localidad' => 'La Boca de Juan Capitan',
                'codigo_localidad' => '004',
                'municipio_id' => 7
            ],[
                'nombre_localidad' => 'Estacion Caballeros',
                'codigo_localidad' => '005',
                'municipio_id' => 7
            ],
            
        ]);
    }
}
