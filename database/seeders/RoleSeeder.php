<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'reclutador']);
        $role3 = Role::create(['name' => 'usuario']);

        Permission::create(['name' => 'vacante.index'])->syncRoles([ $role1,$role2]);
        Permission::create(['name' => 'vacante.create'])->syncRoles([ $role1,$role2]);
        Permission::create(['name' => 'vacante.show'])->syncRoles([ $role1,$role2]);
        Permission::create(['name' => 'vacante.edit'])->syncRoles([ $role1,$role2]);

        Permission::create(['name' => 'oferta.index'])->syncRoles([$role1,$role3]);
    }
}