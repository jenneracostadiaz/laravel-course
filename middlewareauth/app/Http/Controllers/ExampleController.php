<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function __construct()
    {
        $this->middleware('example');
    }

    public function index()
    {
        return response()->json("Helllo world", 200);
    }

    public function noAccess()
    {
        return response()->json("No access", 200);
    }
}
