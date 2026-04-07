<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles
        $admin = Role::create(['name' => 'Admin']);
        $manager = Role::create(['name' => 'Manager']);
        $employed = Role::create(['name' => 'Employed']);

        // Permisos
        Permission::create(['name' => 'view-dashboard']);
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);

        $admin->givePermissionTo(Permission::all());
        $manager->givePermissionTo(['view-dashboard', 'create-users', 'edit-users']);
        $employed->givePermissionTo('view-dashboard');
    }
}
