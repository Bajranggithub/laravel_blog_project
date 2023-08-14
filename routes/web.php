<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\blogpageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// This is Home route 
Route::get('/', [BlogController::class, 'index'])->name('welcome');

// Serching blog routes

Route::get('search', [BlogController::class, 'search']);
// Fillter Routes 
Route::get('fillter', [BlogController::class, 'fillter']);

// hearder routes
Route::get('/header', [BlogController::class, 'header']);

// This is other pages 
Route::get('/posts{id}', [BlogController::class, 'viewblog'])->name('viewpost');
Route::get('/about', [BlogController::class, 'aboutview'])->name('about');
Route::get('/style', [BlogController::class, 'styleview'])->name('style');
Route::get('/contect', [BlogController::class, 'contectview'])->name('contect');
// This is categories pages routes 
Route::get('/categories{id}', [categoriesController::class, 'lifestyleview'])->name('categories');
// This is blog pages routes 

Route::get('/blog/audio', [blogpageController::class, 'audioview'])->name('blog.audio');
Route::get('/blog/gallery', [blogpageController::class, 'galleryview'])->name('blog.gallery');
Route::get('/blog/standered', [blogpageController::class, 'standeredview'])->name('blog.standered');
Route::get('/blog/videopost', [blogpageController::class, 'videopostview'])->name('blog.videopost');