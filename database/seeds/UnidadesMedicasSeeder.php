<?php

use Illuminate\Database\Seeder;

class UnidadesMedicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidades_medicas')->insert([
            [
                'nombre_unidadMedica' => 'Hospital General',
                'localidad_id' => 1
            ],
            [
                'nombre_unidadMedica' => 'Hospital de alta especialidad',
                'localidad_id' => 1
            ],
            [
                'nombre_unidadMedica' => 'Hospital Infantil',
                'localidad_id' => 1
            ],
            [
                'nombre_unidadMedica' => 'Hospital Civil',
                'localidad_id' => 1
            ],[
                'nombre_unidadMedica' => 'UNEME Centro Oncológico de Tamaulipas',
                'localidad_id' => 1
            ],
            
        ]);
    }
}
