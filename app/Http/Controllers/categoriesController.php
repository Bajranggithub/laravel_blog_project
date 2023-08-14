<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Blog;
use \App\Models\category;
class categoriesController extends Controller
{
    public function familyview(){
        return view('Categories.Family');
    }
    
    public function healthview(){
        return view('Categories.health');
    }
    public function lifestyleview(Request $req, $id){
        $category_name = category::where('id',$id)->first('category');
        $data = Blog::select('blogs.*','users.name','users.file as userImage')
                ->leftjoin('users','users.id','blogs.user_id')
                ->where('blogs.category_id',$id)
                ->get();
                // dd($data);
        return view('Categories.categories', compact('data','category_name'));
    }
    public function manegmentview(){
        return view('Categories.manegment');
    }
    public function travelview(){
        return view('Categories.travel');
    }
    public function workview(){
        return view('Categories.work');
    }
}
