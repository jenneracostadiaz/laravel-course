<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        /** Using Eloquent */
        $users = User::all();
        // $users = User::where('age', '>=',30)->orderBy('age', 'asc')->get();

        /** Using DB */
        // $users = DB::table('users')->select()->get();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $user = new User;
        $user->name = "Carlos";
        $user->email = "demo@demo.com";
        $user->password = Hash::make('123456');
        $user->age = 25;
        $user->address = "Street demo 12";
        $user->zip_code = 290909;
        $user->save();

        User::create([
            "name" => "Ruiz",
            "email" => "info@demo.com",
            "password" => Hash::make('789456'),
            "age" => 42,
            "address" => "Street Local 18",
            "zip_code" => 280808
        ]);

        User::create([
            "name" => "Alejandro",
            "email" => "ale@demo.com",
            "password" => Hash::make('15994826'),
            "age" => 40,
            "address" => "Street Local 16",
            "zip_code" => 280806
        ]);

        return redirect()->route('user.index');
        
    }
}
