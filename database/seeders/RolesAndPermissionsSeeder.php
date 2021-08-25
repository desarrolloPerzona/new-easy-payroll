<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // create permissions

        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'read users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'access users']);

        Permission::create(['name' => 'create banks']);
        Permission::create(['name' => 'read banks']);
        Permission::create(['name' => 'update banks']);
        Permission::create(['name' => 'delete banks']);
        Permission::create(['name' => 'access banks']);

        $superAdminRole = Role::create(["name" => "Super Admin"]);
        $adminRole = Role::create(["name" => "Admin"]);
        $tenantRole = Role::create(["name" => "Tenant"]);

        $superAdminRole->givePermissionTo(Permission::all());
        $adminRole->givePermissionTo(Permission::all());
        $tenantRole->givePermissionTo(['create users','read users','update users','delete users']);

        $user = User::find(1);
        $user->assignRole('super Admin');

    }
}
