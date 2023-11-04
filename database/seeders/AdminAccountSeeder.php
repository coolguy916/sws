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
            'name' => 'Fajar Aja',
            'email' => 'fajar@gmail.com',
            'phone' => '08123456789',
            'password' => Hash::make('123456789')
        ]);
    }
}
