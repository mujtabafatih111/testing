<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12341234'),
                'roles' => 'admin',
                'status' => 'active',
            ],
         
            [
                'name' => 'agent',
                'username' => 'agent',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('12341234'),
                'roles' => 'agent',
                'status' => 'active',
            ],
         
         
            [
                'name' => 'user',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('12341234'),
                'roles' => 'user',
                'status' => 'active',
            ],
         
         
        ]);
    }
}
