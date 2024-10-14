<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Super Admin',
                'username' => 'superadmin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('Admin@123'), // Updated password
                'roles' => 'super_admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name' => 'Project Manager',
                'username' => 'projectmanager',
                'email' => 'pm@test.com',
                'password' => Hash::make('Pm!Manager123'), // Updated password
                'roles' => 'project_manager',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name' => 'Sales Manager',
                'username' => 'salesmanager',
                'email' => 'sm@test.com',
                'password' => Hash::make('Sm#Sales123'), // Updated password
                'roles' => 'sales_manager',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name' => 'HR',
                'username' => 'hr',
                'email' => 'hr@test.com',
                'password' => Hash::make('Hr$Human123'), // Updated password
                'roles' => 'hr',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name' => 'Supervisi',
                'username' => 'supervisi',
                'email' => 'supervisi@test.com',
                'password' => Hash::make('Super#Visi123'), // Updated password
                'roles' => 'supervisi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'name' => 'Customer Service',
                'username' => 'cs',
                'email' => 'cs@test.com',
                'password' => Hash::make('Cs!Service123'), // Updated password
                'roles' => 'customer_service',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'name' => 'Customer Service 2',
                'username' => 'cs2',
                'email' => 'cs2@test.com',
                'password' => Hash::make('Cs!Service1234'), // Updated password
                'roles' => 'customer_service',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
