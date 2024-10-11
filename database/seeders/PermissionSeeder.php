<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $permissions = [
        [
            'id' => 2,
            'name' => 'manage_role',
            'guard_name' => 'web',
        ],
        [
            'id' => 3,
            'name' => 'manage_permission',
            'guard_name' => 'web',
        ],
        [
            'id' => 4,
            'name' => 'manage_user',
            'guard_name' => 'web',
        ],
        [
            'id' => 5,
            'name' => 'manage_sales',
            'guard_name' => 'web',
        ],
        [
            'id' => 6,
            'name' => 'manage_projects',
            'guard_name' => 'web',
        ],
        [
            'id' => 7,
            'name' => 'manage_customer_service',
            'guard_name' => 'web',
        ],
        [
            'id' => 8,
            'name' => 'manage_supervisi',
            'guard_name' => 'web',
        ],
    ];

    foreach ($permissions as $permission) {
        DB::table('permissions')->updateOrInsert(
            ['id' => $permission['id']],
            ['name' => $permission['name'], 'guard_name' => $permission['guard_name']]
        );
    }
}

}
