<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts=[
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

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
             return $posts->firstWhere('slug',$slug);
        }
}
