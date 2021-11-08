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

        Permission::create(['name' => 'user_create']);
        Permission::create(['name' => 'user_read']);
        Permission::create(['name' => 'user_update']);
        Permission::create(['name' => 'user_delete']);
        Permission::create(['name' => 'user_access']);

        Permission::create(['name' => 'bank_create']);
        Permission::create(['name' => 'bank_read']);
        Permission::create(['name' => 'bank_update']);
        Permission::create(['name' => 'bank_delete']);
        Permission::create(['name' => 'bank_access']);

        Permission::create(['name' => 'fiscal_regime_create']);
        Permission::create(['name' => 'fiscal_regime_read']);
        Permission::create(['name' => 'fiscal_regime_update']);
        Permission::create(['name' => 'fiscal_regime_delete']);
        Permission::create(['name' => 'fiscal_regime_access']);

        Permission::create(['name' => 'industry_create']);
        Permission::create(['name' => 'industry_read']);
        Permission::create(['name' => 'industry_update']);
        Permission::create(['name' => 'industry_delete']);
        Permission::create(['name' => 'industry_access']);

        Permission::create(['name' => 'zipcode_create']);
        Permission::create(['name' => 'zipcode_read']);
        Permission::create(['name' => 'zipcode_update']);
        Permission::create(['name' => 'zipcode_delete']);
        Permission::create(['name' => 'zipcode_access']);

        Permission::create(['name' => 'role_create']);
        Permission::create(['name' => 'role_read']);
        Permission::create(['name' => 'role_update']);
        Permission::create(['name' => 'role_delete']);
        Permission::create(['name' => 'role_access ']);

        Permission::create(['name' => 'permission_create']);
        Permission::create(['name' => 'permission_read']);
        Permission::create(['name' => 'permission_update']);
        Permission::create(['name' => 'permission_delete']);
        Permission::create(['name' => 'permission_access']);


        $superAdminRole = Role::create(["name" => "SuperAdmin"]);
        $adminRole = Role::create(["name" => "Admin"]);
        $tenantRole = Role::create(["name" => "Tenant"]);

        $superAdminRole->givePermissionTo(Permission::all());
        $adminRole->givePermissionTo(Permission::all());

        $user = User::find(1);
        $user->assignRole('superAdmin');
        $user1 = User::find(2);
        $user1->assignRole('Admin');


    }
}
