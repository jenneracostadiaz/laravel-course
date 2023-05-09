<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => 1,
            'name' => 'admin',
        ]);
        Role::create([
            'id' => 2,
            'name' => 'staff',
        ]);
        Role::create([
            'id' => 3,
            'name' => 'user',
        ]);
        Role::create([
            'id' => 4,
            'name' => 'guest',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
            'added_by' => 'juanjo',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 1,
            'added_by' => 'luis',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 2,
            'added_by' => 'josemaria',
        ]);
        
        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 2,
            'added_by' => 'juanjo',
        ]);
        
        DB::table('role_user')->insert([
            'role_id' => 4,
            'user_id' => 3,
            'added_by' => 'maria',
        ]);
    }
}
