<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/posts', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Salman Faishal",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae animi hic itaque repudiandae similique illum eum, necessitatibus sapiente iusto atque, officiis veniam cupiditate quas veritatis facere minus laborum reprehenderit odio!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jason Ranti",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae animi hic itaque repudiandae similique illum eum, necessitatibus sapiente iusto atque, officiis veniam cupiditate quas veritatis facere minus laborum reprehenderit odio! asdawdasdwa sdwadasd wasdwasd"
        ]
        ];
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Salman Faishal",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae animi hic itaque repudiandae similique illum eum, necessitatibus sapiente iusto atque, officiis veniam cupiditate quas veritatis facere minus laborum reprehenderit odio!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jason Ranti",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae animi hic itaque repudiandae similique illum eum, necessitatibus sapiente iusto atque, officiis veniam cupiditate quas veritatis facere minus laborum reprehenderit odio! asdawdasdwa sdwadasd wasdwasd"
        ]
        ];

    $new_post = [];    
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;

        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});