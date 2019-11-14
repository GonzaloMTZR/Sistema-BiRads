<?php

use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            ['nombre_estado' => 'Aguascalientes'],
            ['nombre_estado' => 'Baja California'],
            ['nombre_estado' => 'Baja California Sur'],
            ['nombre_estado' => 'Campeche'],
            ['nombre_estado' => 'Coahuila de Zaragoza'],
            ['nombre_estado' => 'Colima'],
            ['nombre_estado' => 'Chiapas'],
            ['nombre_estado' => 'Chihuahua'],
            ['nombre_estado' => 'Distrito Federal'],
            ['nombre_estado' => 'Durango'],
            ['nombre_estado' => 'Guanajuato'],
            ['nombre_estado' => 'Guerrero'],
            ['nombre_estado' => 'Hidalgo'],
            ['nombre_estado' => 'Jalisco'],
            ['nombre_estado' => 'México'],
            ['nombre_estado' => 'Michoacán de Ocampo'],
            ['nombre_estado' => 'Morelos'],
            ['nombre_estado' => 'Nayarit'],
            ['nombre_estado' => 'Nuevo León'],
            ['nombre_estado' => 'Oaxaca'],
            ['nombre_estado' => 'Puebla'],
            ['nombre_estado' => 'Querétaro'],
            ['nombre_estado' => 'Quintana Roo'],
            ['nombre_estado' => 'San Luis Potosí'],
            ['nombre_estado' => 'Sinaloa'],
            ['nombre_estado' => 'Sonora'],
            ['nombre_estado' => 'Tabasco'],
            ['nombre_estado' => 'Tamaulipas'],
            ['nombre_estado' => 'Tlaxcala'],
            ['nombre_estado' => 'Veracruz'],
            ['nombre_estado' => 'Yucatán'],
            ['nombre_estado' => 'Zacatecas'],
        ]);
    }
}
