<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'view-barang',
            'create-barang',
            'update-barang',
            'delete-barang',
            'view-order',
            'create-order',
            'update-order',
            'delete-order',
            'view-users',
            'create-users',
            'update-users',
            'delete-users',
            'create-laporan',
        ];

        foreach($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission]);
        }

        $roles = [
            'Super-Admin' => $permissions,
            'Administrator' => [
                'view-barang',
                'create-barang',
                'update-barang',
                'delete-barang',
                'view-order',
                'create-order',
                'update-order',
                'delete-order',
                'view-users',
                'create-users',
                'update-users',
                'delete-users',
            ],
            'Owner' => $permissions,
            'Employee' => [
                'view-barang',
                'create-barang',
                'update-barang',
                'view-order',
                'create-order',
            ],
        ];

        foreach ($roles as $role => $permissions) {
            $role = Role::updateOrCreate(['name' => $role]);
            $role->syncPermissions($permissions);
        }
    }
}
