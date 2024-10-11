<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use DB;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $roles = [
        ['id' => 1, 'name' => 'Super Admin', 'guard_name' => 'web'],
        ['id' => 2, 'name' => 'Admin', 'guard_name' => 'web'],
        ['id' => 3, 'name' => 'Project Manager', 'guard_name' => 'web'],
        ['id' => 4, 'name' => 'Sales Manager', 'guard_name' => 'web'],
        ['id' => 5, 'name' => 'Supervisi', 'guard_name' => 'web'],
        ['id' => 6, 'name' => 'Customer Service', 'guard_name' => 'web'],
        ['id' => 7, 'name' => 'Member', 'guard_name' => 'web'],
    ];

    foreach ($roles as $role) {
        DB::table('roles')->updateOrInsert(
            ['id' => $role['id']],
            ['name' => $role['name'], 'guard_name' => $role['guard_name']]
        );
    }
}
}
