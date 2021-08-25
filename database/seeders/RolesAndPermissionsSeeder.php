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

        Permission::create(['name' => 'create Fiscal Regimes']);
        Permission::create(['name' => 'read Fiscal Regimes']);
        Permission::create(['name' => 'update Fiscal Regimes']);
        Permission::create(['name' => 'delete Fiscal Regimes']);
        Permission::create(['name' => 'access Fiscal Regimes']);

        Permission::create(['name' => 'create Industries']);
        Permission::create(['name' => 'read Industries']);
        Permission::create(['name' => 'update Industries']);
        Permission::create(['name' => 'delete Industries']);
        Permission::create(['name' => 'access Industries']);

        Permission::create(['name' => 'create Zipcodes']);
        Permission::create(['name' => 'read Zipcodes']);
        Permission::create(['name' => 'update Zipcodes']);
        Permission::create(['name' => 'delete Zipcodes']);
        Permission::create(['name' => 'access Zipcodes']);




        $superAdminRole = Role::create(["name" => "Super Admin"]);
        $adminRole = Role::create(["name" => "Admin"]);
        $tenantRole = Role::create(["name" => "Tenant"]);

        $superAdminRole->givePermissionTo(Permission::all());
        $adminRole->givePermissionTo(Permission::all());
        $tenantRole->givePermissionTo(['create users','read users','update users','delete users']);

        $user = User::find(1);
        $user->assignRole('super Admin');
        $user1 = User::find(2);
        $user1->assignRole('Admin');
        $user2 = User::find(3);
        $user2->assignRole('Tenant');

    }
}
