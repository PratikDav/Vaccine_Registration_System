<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_districts')->insert([
            [
                'name' => 'Dohar',
                'district_id' => 1,
            ],
            [
                'name' => 'Keraniganj',
                'district_id' => 1,
            ],
            [
                'name' => 'Savar',
                'district_id' => 1,
            ],
            [
                'name' => 'Gazipur Sadar',
                'district_id' => 2,
            ],
            [
                'name' => 'Kapasia',
                'district_id' => 2,
            ],
            [
                'name' => 'Kishoreganj Sadar',
                'district_id' => 3,
            ],
            [
                'name' => 'Bhairab',
                'district_id' => 3,
            ],
            [
                'name' => 'Bajitpur',
                'district_id' => 3,
            ],
            [
                'name' => 'Khagrachari Sadar',
                'district_id' => 4,
            ],
            [
                'name' => 'Panchari',
                'district_id' => 4,
            ],
            [
                'name' => 'Guimara',
                'district_id' => 4,
            ],
            [
                'name' => 'Bandarban Sadar',
                'district_id' => 5,
            ],
            [
                'name' => 'Thanchi',
                'district_id' => 5,
            ],
            [
                'name' => 'Anwara',
                'district_id' => 6,
            ],
            [
                'name' => 'Banshkhali',
                'district_id' => 6,
            ],
            [
                'name' => 'Patiya',
                'district_id' => 6,
            ],
            [
                'name' => "Chakaria",
                'district_id' => 7,
            ],
            [
                'name' => "Cox's Bazar Sadar ",
                'district_id' => 7,
            ],
            [
                'name' => "Teknaf",
                'district_id' => 7,
            ],

        ]);

    }
}
