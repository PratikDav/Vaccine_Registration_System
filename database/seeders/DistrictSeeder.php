<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('districts')->insert([
            [
                'name' => 'Dhaka',
                'division_id' => 1,
            ],
            [
                'name' => 'Gazipur',
                'division_id' => 1,
            ],
            [
                'name' => 'Kishoreganj',
                'division_id' => 1,
            ],
            [
                'name' => 'Khagrachhari',
                'division_id' => 2,
            ],
            [
                'name' => 'Bandarban',
                'division_id' => 2,
            ],
            [
                'name' => 'Chittagong',
                'division_id' => 2,
            ],
            [
                'name' => "Cox's Bazar",
                'division_id' => 2,
            ],
            // [
            //     'name' => 'Barisal',
            //     'division_id'=> 3
            // ],
            // [
            //     'name' => 'Barguna',
            //     'division_id'=> 3
            // ],
            // [
            //     'name' => 'Bhola',
            //     'division_id'=> 3
            // ],
            // [
            //     'name' => 'Jashore',
            //     'division_id'=> 4
            // ],
            // [
            //     'name' => 'Khulna',
            //     'division_id'=> 4
            // ],
            // [
            //     'name' => 'Mymensingh',
            //     'division_id'=> 5
            // ],
            // [
            //     'name' => 'Jamalpur',
            //     'division_id'=> 5
            // ],
            // [
            //     'name' => 'Natore',
            //     'division_id'=> 6
            // ],
            // [
            //     'name' => 'Rajshahi',
            //     'division_id'=> 6
            // ],
            // [
            //     'name' => 'Rangpur',
            //     'division_id'=> 7
            // ],
            // [
            //     'name' => 'Gaibandha',
            //     'division_id'=> 7
            // ],
            // [
            //     'name' => 'Habiganj',
            //     'division_id'=> 8
            // ],
            // [
            //     'name' => 'Moulvibazar',
            //     'division_id'=> 8
            // ],

        ]);

    }
}
