<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersSeeder extends Seeder
{
   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Dr. Derek Shepeard',
            'email' => 'REP@mail.com',
            'password' => bcrypt('123456'),
            'sistema' => 'CAMA',
            'institucion' => 'PEMEX',
            'entidad' => 'Tamaulipas',
            'jurisdiccion' => 'Ciudad Victoria',
            'municipio' => 'Victoria',
            'localidad' => 'Cd. Victoria',
            'unidad_Medica' => 'UNEME Centro Oncológico de Tamaulipas',
        ]);

        $user->assignRole('Responsable Estatal de Programa');

        $user2 = User::create([
            'name' => 'Dra. Meredith Grey',
            'email' => 'CJ@mail.com',
            'password' => bcrypt('123456'),
            'sistema' => 'CAMA',
            'institucion' => 'PEMEX',
            'entidad' => 'Tamaulipas',
            'jurisdiccion' => 'Ciudad Victoria',
            'municipio' => 'Victoria',
            'localidad' => 'Cd. Victoria',
            'unidad_Medica' => 'UNEME Centro Oncológico de Tamaulipas',
        ]);

        $user2->assignRole('Coordinador Jurisdiccional');

        $user3 = User::create([
            'name' => 'Dr. Alex Karev',
            'email' => 'DR@mail.com',
            'password' => bcrypt('123456'),
            'sistema' => 'CAMA',
            'institucion' => 'PEMEX',
            'entidad' => 'Tamaulipas',
            'jurisdiccion' => 'Ciudad Victoria',
            'municipio' => 'Victoria',
            'localidad' => 'Cd. Victoria',
            'unidad_Medica' => 'UNEME Centro Oncológico de Tamaulipas',
        ]);

        $user3->assignRole('Doctor');
    }
}
