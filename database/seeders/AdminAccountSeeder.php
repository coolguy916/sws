<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'AdminSWIS',
            'email' => 'admin@gmail.com',
            'phone' => '-',
            'role' => 'admin',
            'password' => Hash::make('123456789')
        ]);

        User::create([
            'name' => 'TestUser',
            'email' => 'user@gmail.com',
            'phone' => '-',
            'role' => 'user',
            'password' => Hash::make('123456789')
        ]);
    }
}
