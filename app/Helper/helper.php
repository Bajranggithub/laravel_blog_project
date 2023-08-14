<?php
namespace App\Helpers;
use App\Models\category;
class Helper{

    public static function getCetegorys(){
        $category = category::all();
        return $category;
    }
}




