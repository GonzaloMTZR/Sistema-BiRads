<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
       
        $role = Role::create(['name' => 'Responsable Estatal de Programa']);
        $role = Role::create(['name' => 'Coordinador Jurisdiccional']);
        $role = Role::create(['name' => 'Doctor']);
        //$role = Role::create(['name' => 'Super-Admin']);
    }
}
