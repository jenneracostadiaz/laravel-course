<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    public function index()
    {
        $msg = __('welcome.greetings', ['name' => 'Luis']);
        return view('example', compact('msg'));
    }
}
