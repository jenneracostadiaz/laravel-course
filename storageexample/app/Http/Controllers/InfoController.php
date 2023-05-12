<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoRequest;
use App\Models\Info;
use Illuminate\Support\Facades\Storage;

class InfoController extends Controller
{
    public function index()
    {
        $infos = Info::get();
        return view('index', compact('infos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(InfoRequest $request)
    {
        $fileName = time() . '.' . $request->file->extension();
        // $request->file->move(public_path('images'), $fileName);

        $request->file->storeAs('public/images', $fileName);

        $info = new Info();
        $info->name = $request->name;
        $info->file_url = $fileName;
        $info->save();

        // return redirect()->route('index');
        return Storage::download('descarga.jpg', $info->file_url);

        // Storage::url( $info->file_url);
        // Storage::temporaryUrl(
        //     'my_image.jpg', now()->addMinutes(10)
        // );
    }
}
