<?php

use Illuminate\Database\Seeder;

class InstitucionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instituciones')->insert([
            ['nombre_institucion' => 'CRO'],
            ['nombre_institucion' => 'HUN'],
            ['nombre_institucion' => 'ISSES'],
            ['nombre_institucion' => 'ISSFAM'],
            ['nombre_institucion' => 'ISSSTE'],
            ['nombre_institucion' => 'IMSS'],
            ['nombre_institucion' => 'IMSS-PROSPERA'],
            ['nombre_institucion' => 'OTRA'],
            ['nombre_institucion' => 'PEMEX'],
            ['nombre_institucion' => 'PGR'],
            ['nombre_institucion' => 'SCT'],
            ['nombre_institucion' => 'SEDENA'],
            ['nombre_institucion' => 'SEMAR'],
            ['nombre_institucion' => 'SSA'],
            ['nombre_institucion' => 'SME'],
            ['nombre_institucion' => 'SMM'],
            ['nombre_institucion' => 'SMP'],
            ['nombre_institucion' => 'DIFDIF'],
        ]);
    }
}