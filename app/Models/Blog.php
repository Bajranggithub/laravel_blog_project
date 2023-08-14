<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'subtitle',
        'user_id',
        'category_id',
        'file',
        'discription',
    ];

    public function group(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    

}
