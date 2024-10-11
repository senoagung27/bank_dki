<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use DB;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_has_permissions')->insert([
            [
                'permission_id' => 4,
                'role_id' => 2, // Admin
            ],
            [
                'permission_id' => 5,
                'role_id' => 2, // Admin
            ],
            [
                'permission_id' => 5,
                'role_id' => 4, // Sales Manager
            ],
            [
                'permission_id' => 6,
                'role_id' => 2, // Admin
            ],
            [
                'permission_id' => 6,
                'role_id' => 3, // Project Manager
            ],
            // Permissions for Supervisi
            [
                'permission_id' => 7, // Assign appropriate permission ID for Supervisi
                'role_id' => 5, // Supervisi
            ],
            // Permissions for Customer Service
            [
                'permission_id' => 8, // Assign appropriate permission ID for Customer Service
                'role_id' => 6, // Customer Service
            ],
        ]);


        DB::table('model_has_roles')->insert([
            [
                'role_id' => 1, // Super Admin
                'model_type' => 'App\\Models\\User',
                'model_id' => 1,
            ],
            [
                'role_id' => 2, // Admin
                'model_type' => 'App\\Models\\User',
                'model_id' => 4,
            ],
            [
                'role_id' => 3, // Project Manager
                'model_type' => 'App\\Models\\User',
                'model_id' => 2,
            ],
            [
                'role_id' => 4, // Sales Manager
                'model_type' => 'App\\Models\\User',
                'model_id' => 3,
            ],
            [
                'role_id' => 5, // Supervisi
                'model_type' => 'App\\Models\\User',
                'model_id' => 5,
            ],
            [
                'role_id' => 6, // Customer Service
                'model_type' => 'App\\Models\\User',
                'model_id' => 6,
            ],
        ]);
    }
}
