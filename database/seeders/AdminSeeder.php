<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!User::whereEmail('admin@gmail.com')->exists()) {

            $user = User::create([
                'first_name' => 'admin',
                'last_name' => 'user',
                'email' => 'admin@gmail.com',
                'password' => \Hash::make(123456789),
            ]);
            
            $role = Role::whereName('admin')->first();
            
            $role->users()->attach($user);
        }
    }
}
