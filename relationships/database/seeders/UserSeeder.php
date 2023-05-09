<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'example',
            'email' => 'example@example.com',
            'password' => Hash::make(123456789)
        ]);
        
        User::create([
            'id' => 2,
            'name' => 'example 2',
            'email' => 'example2@example.com',
            'password' => Hash::make(123456789)
        ]);
        
        User::create([
            'id' => 3,
            'name' => 'example 3',
            'email' => 'example3@example.com',
            'password' => Hash::make(123456789)
        ]);
    }
}
