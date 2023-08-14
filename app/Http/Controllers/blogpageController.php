<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogpageController extends Controller
{
    public function audioview(){
        return view('blog.audio');
    }
    public function galleryview(){
        return view('blog.gallery');
    }
    public function standeredview(){
        return view('blog.standered');
    }
    public function videopostview(){
        return view('blog.videopost');
    }
}
