<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class exampleController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('example', compact('user'));
    }
}
