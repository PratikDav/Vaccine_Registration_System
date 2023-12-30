<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'firstName' => 'Kingshuk',
                'lastName' => 'Dhar',
                'email' => 'kingshuk@gmail.com',
                'password' => md5('123456'),
                'number' => '01852088728',
                'address' => 'Premier University, Chattogram',
                'role' => 'Super Admin',
                'status' => 1,
            ],
            [
                'firstName' => 'Pratik',
                'lastName' => 'Dav',
                'email' => 'royonup@gmail.com',
                'password' => md5('123456'),
                'number' => '01852088728',
                'address' => 'Premier University, Chattogram',
                'role' => 'Admin',
                'status' => 1,
            ],

        ]);

    }
}
