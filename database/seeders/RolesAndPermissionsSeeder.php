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
        $role1 = Role::create(["name" => "superAdmin"]);
        $role2 = Role::findOrCreate("tenant");
        $permission = Permission::create(['name' => 'superAdmin.index']);
        $permission2 = Permission::create(['name' => 'tenant.index']);
        $role1->permissions()->attach(1);
        $role2->permissions()->attach(2);
        $user = User::find(1);
        $user->assignRole('superAdmin');
    }
}
