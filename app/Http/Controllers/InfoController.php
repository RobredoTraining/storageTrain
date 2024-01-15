<?php

namespace App\Http\Controllers;
use App\Http\Requests\InfoRequest;
use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
    public  function index()
    {
        $infos = Info::get();
        return view('index', compact('infos'));
    }

    public  function create()
    {
        return view('create');
    }

    public  function store(InfoRequest $request)
    {

        $file = $request->file('file');

    if ($file) {
        // El archivo está presente, puedes acceder a sus propiedades
        $fileName = time().'.'.$file->extension();
        $file->move(public_path('images'), $fileName);
        
        $info = new Info;
        $info->name = $request->name; 
        $info->file_uri = $fileName;
        $info->save();
    } else {
         // El archivo no está presente
         var_dump("No file");
    }

    }
}
