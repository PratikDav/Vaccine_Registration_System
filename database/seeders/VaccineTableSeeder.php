<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaccineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vaccines')->insert([
            [
                'vaccine_name' => 'Covishield',
                'manufacturing_company' => 'AstraZeneca',

            ],
            [
                'vaccine_name' => 'Moderna',
                'manufacturing_company' => 'Moderna',

            ],

        ]);

    }
}
