<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
=======
>>>>>>> 4ebbc0bfae1c80d170061222a221d6fc6f9cde68
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        /** Consulta con Eloquent */
        $users = User::all();
        // $users = User::where('age', '>', 30)->orWhere('zip_code', 290909)->get();
        // $users = User::where('age', '>', 30)->orderBy('age', 'asc')->get();
        // $users = User::where('age', '>', 30)->limit(5, 10)->get();
        // $users = User::find(1);
        /* Consulta SQL */
        // $users = DB::select( DB::raw("SELECT * FROM users"));
=======
        /** Using Eloquent */
        $users = User::all();
        // $users = User::where('age', '>=',30)->orderBy('age', 'asc')->get();

        /** Using DB */
>>>>>>> 4ebbc0bfae1c80d170061222a221d6fc6f9cde68
        // $users = DB::table('users')->select()->get();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $user = new User;
<<<<<<< HEAD
        $user->name = "Juan";
        $user->email = "juan@email.com";
        $user->password = Hash::make('123456');
        $user->age = 25;
        $user->address = "Calle Demo 12";
=======
        $user->name = "Carlos";
        $user->email = "demo@demo.com";
        $user->password = Hash::make('123456');
        $user->age = 25;
        $user->address = "Street demo 12";
>>>>>>> 4ebbc0bfae1c80d170061222a221d6fc6f9cde68
        $user->zip_code = 290909;
        $user->save();

        User::create([
            "name" => "Ruiz",
<<<<<<< HEAD
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
=======
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
>>>>>>> 4ebbc0bfae1c80d170061222a221d6fc6f9cde68
            "zip_code" => 280806
        ]);

        return redirect()->route('user.index');
<<<<<<< HEAD
    }


=======
        
    }
>>>>>>> 4ebbc0bfae1c80d170061222a221d6fc6f9cde68
}
