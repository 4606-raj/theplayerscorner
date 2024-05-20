<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!Role::count()) {

            Role::create([
                'name' => 'admin',
            ]);
            
            Role::create([
                'name' => 'player',
            ]);
        }
    }
}
