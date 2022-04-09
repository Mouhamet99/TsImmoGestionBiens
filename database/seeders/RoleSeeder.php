<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Role::create(['name' => 'admin'], ['name' => 'superadmin'], ['name' => 'proprietaire']);
        $userRoles = ["user-list", 'user-create', 'user-edit', 'user-delete'];
        $proprietaireRoles = ["proprietaire-list", 'proprietaire-create', 'proprietaire-edit', 'proprietaire-delete'];
        $rolesRoles = ['role-list', 'role-create', 'role-edit', 'role-delete'];
        $proprieteRoles = ["propriete-list", 'propriete-create', 'propriete-edit', 'propriete-delete'];

        Role:: where('name', 'proprietaire')->get()->first()->syncPermissions([
            ...$proprietaireRoles,
            ...$proprieteRoles,
            ...$userRoles
        ]);

        Role::where('name', 'admin')->get()->first()->syncPermissions([
            ...$proprietaireRoles,
            ...$proprieteRoles,
            ...$userRoles
        ]);
        Role::where('name', 'superadmin')->get()->first()->syncPermissions([
            ...$proprietaireRoles,
            ...$proprieteRoles,
            ...$rolesRoles,
            ...$userRoles
        ]);
    }
}
