<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SchoolGroup;

class SchoolGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!SchoolGroup::count()) {

            SchoolGroup::insert([
                ['name' => 'Year 5'],
                ['name' => 'Year 6'],
                ['name' => 'Year 7'],
                ['name' => 'Year 8'],
                ['name' => 'Year 9'],
                ['name' => 'Year 10'],
                ['name' => 'Year 11'],
            ]);
        }
    }
}
