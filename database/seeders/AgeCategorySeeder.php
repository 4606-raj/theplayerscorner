<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AgeCategory;

class AgeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!AgeCategory::count()) {
            AgeCategory::insert([
                ['name' => 'Boys U11', 'dob_from' => '01-09-2012', 'dob_to' => '31-08-2014'],
                ['name' => 'Boys U13', 'dob_from' => '01-09-2010', 'dob_to' => '31-08-2012'],
                ['name' => 'Squade Girl\' Football Programme', 'dob_from' => '12', 'dob_to' => '14'],
            ]);
        }
    }
}
