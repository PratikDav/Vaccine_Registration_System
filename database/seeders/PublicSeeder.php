<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('general_publics')->insert([
            [

                'birth_reg_no' => 202316917303133576490,
                'nid_no' => 2023080817500670,
                'passport_no' => 'Diptesh346936199320230808',
                'name' => 'Diptesh Bhattacharjee',
                'father_name' => 'Pulok Bhattacharjee',
                'mother_name' => 'Indrani Bhattacharjee',
                'dob' => '2000-08-11',
                'gender' => 'Male',
                'nationality' => 'Bangladeshi',
                'place_of_birth' => 'Post Office,  Patiya, Chattogram',
                'permanent_address' => 'Post Office,  Patiya, Chattogram',
            ],
        ]);

    }
}
