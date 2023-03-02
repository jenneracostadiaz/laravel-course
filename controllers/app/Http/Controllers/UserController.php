<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        /** Consulta con Eloquent */
        $users = User::all();
        // $users = User::where('age', '>', 30)->orWhere('zip_code', 290909)->get();
        // $users = User::where('age', '>', 30)->orderBy('age', 'asc')->get();
        // $users = User::where('age', '>', 30)->limit(5, 10)->get();
        // $users = User::find(1);
        /* Consulta SQL */
        // $users = DB::select( DB::raw("SELECT * FROM users"));
        // $users = DB::table('users')->select()->get();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $user = new User;
        $user->name = "Juan";
        $user->email = "juan@email.com";
        $user->password = Hash::make('123456');
        $user->age = 25;
        $user->address = "Calle Demo 12";
        $user->zip_code = 290909;
        $user->save();

        User::create([
            "name" => "Ruiz",
            "email" => "ruiz@email.com",
            "password" => Hash::make('984651354'),
            "age" => 42,
            "address" => "Av. demo 17",
            "zip_code" => 280808
        ]);
        
        User::create([
            "name" => "Alejandro",
            "email" => "ale@email.com",
            "password" => Hash::make('654387156'),
            "age" => 40,
            "address" => "Av. demo 16",
            "zip_code" => 280806
        ]);

        return redirect()->route('user.index');
    }


}
