<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About',[
        "title" => "About",
        "name" => "Salman Faishal",
        "email" => "salmanfaishal@gmail.com",
        "image" => "isal.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories',function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category){
    return view('category',[
        'title' =>$category->name,
        'posts' =>$category->posts,
        'category'=> $category->name
    ]);
});


Route::get('/authors/{author:username}', function (User $author){
    return view('posts',[
        'title' =>'User Posts',
        'posts' =>$author->posts,
    ]);
});