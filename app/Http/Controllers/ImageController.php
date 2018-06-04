<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class ImageController extends Controller
{
    function form()
    {
        return view('image.form');
    }

    function upload(Request $request)
    {
        $path = Storage::disk('public')->putFile('uploads', $request->image);
        return view('image/detail')->with('path', URL::to('/storage') . "/" . $path);
    }
}