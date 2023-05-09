<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        Phone::create([
            'prefix' => 51,
            'phone_number' => 984651354,
            'user_id' => 1
        ]);*/
        Phone::create([
            'prefix' => 33,
            'phone_number' => 7777777,
            'user_id' => 1
        ]);
    }
}
