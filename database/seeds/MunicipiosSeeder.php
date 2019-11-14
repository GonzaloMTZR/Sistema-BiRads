<?php

use Illuminate\Database\Seeder;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([
            [
                'nombre_municipio' => 'Abasolo',
                'jurisdiccion_id' => 4
            ],
            [
                'nombre_municipio' => 'Casas',
                'jurisdiccion_id' => 4
            ],
            [
                'nombre_municipio' => 'Güemez',
                'jurisdiccion_id' => 4
            ],
            [
                'nombre_municipio' => 'Hidalgo',
                'jurisdiccion_id' => 4
            ],
            [
                'nombre_municipio' => 'Llera',
                'jurisdiccion_id' => 4
            ],
            [
                'nombre_municipio' => 'Mainero',
                'jurisdiccion_id' => 4
            ],
            [
                'nombre_municipio' => 'Victoria',
                'jurisdiccion_id' => 4
            ],
            [
                'nombre_municipio' => 'Villagran',
                'jurisdiccion_id' => 4
            ],
            [
                'nombre_municipio' => 'Padilla',
                'jurisdiccion_id' => 4
            ],
            [
                'nombre_municipio' => 'San Fernando',
                'jurisdiccion_id' => 4
            ],
            [
                'nombre_municipio' => 'Tampico',
                'jurisdiccion_id' => 4
            ],
            [
                'nombre_municipio' => 'Valle Hermoso',
                'jurisdiccion_id' => 4
            ],
        ]);
    }
}
