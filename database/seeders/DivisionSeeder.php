<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('divisions')->insert([
            [
                'name' => 'Dhaka',
            ],
            [
                'name' => 'Chittagong',
            ],
            [
                'name' => 'Barisal',
            ],
            [
                'name' => 'Khulna',
            ],
            [
                'name' => 'Mymensingh',
            ],
            [
                'name' => 'Rajshahi',
            ],
            [
                'name' => 'Rangpur',
            ],
            [
                'name' => 'Sylhet',
            ]


        ]);

    }
}
