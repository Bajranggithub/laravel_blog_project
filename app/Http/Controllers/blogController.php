<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\category;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index()
    {
        $data = Blog::with('group')->get();
        $data = Blog::paginate(6);
        // dd($data);
        return view('welcome', compact('data'));
    }

    public function viewblog($id)
    {
        $data = Blog::where('id', $id)->get();
        // dd($post);
        return view('viewpost', compact('data'));
    }


    // This is about page view 

    public function aboutview()
    {
        return view('about');
    }

    // This is style page view 
    public function styleview()
    {
        return view('style');
    }

    // This is contect page view 
    public function contectview()
    {
        return view('contect');
    }

    public function search(Request $req)
    {
        $data = Blog::where('title', 'like', '%' . $req->input('search') . '%')->orWhere('subtitle', 'like', '%'. $req->input('search') . '%')->orWhere('category_id', 'like', '%'. $req->input('search') . '%')->get();
        // dd($data);
        return view('search', compact('data'));
    }

    // Fillter route funtion 

    public function fillter(Request $req){
        $input = Blog::query();
        if($req->has('fillter')){
            $fillters = $req->input('fillter');
            $input->whereIn('category_id', $fillters);
        }
        $data = $input->get();
        // dd($data);
        // $data = Blog::Where('category_id', 'like', '%'. $req->input('fillter[]') . '%')->get();
        return view('search', compact('data'));
    }

    public function lifestyle(){

    }

    public function header(Request $request){
       $category = category::all();
       return view('layout.header',compact('category'));
    }
}
