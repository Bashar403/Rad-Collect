<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{

    public function index()
    {
        $mediaItems = Media::all();
        return view('media.index', compact('mediaItems'));


    }



}
