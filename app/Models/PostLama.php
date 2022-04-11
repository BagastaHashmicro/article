<?php

namespace App\Models;

class Post
{
    private static $blog_posts = 
    [
        [
        "title" => "Memek",
        "slug" => "Mmk",
        "author" => "Bagasta",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, eligendi." 
        ],
        [
        "title" => "Cuki",
        "slug" => "Cuk",
        "author" => "Bagasta",
        "body" => "Melor ipsum dolor sit amet consectetur adipisicing elit. Odio, eligendi." 
        ]
    ];

    public static function all()
    {
        return collect (self::$blog_posts);
    } 
        public static function find($slug)
    { 
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}