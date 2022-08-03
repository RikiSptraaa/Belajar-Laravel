<?php

namespace App\Models;


class Post
{
    // pemanggilan static var harus diawali self::
    // sedangkan untuk static fun static::
    private static $blog_posts = [
        [
            "title" => "Posts",
            "author" => "Riki",
            "slug" => "post-pertama",
            "body" => "
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, qui?",
        ],
        [
            "title" => "Posts 2",
            "author" => "Riki",
            "slug" => "post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore vero perspiciatis ut quas aperiam adipisci quisquam libero, nihil at, excepturi laudantium ad nisi, iusto officiis unde sit explicabo. Sequi amet magnam quae vel ex omnis eos eum corporis voluptatibus. Incidunt quod 
            praesentium doloremque ullam nisi cumque voluptates aliquam perspiciatis beatae.",
        ]
    ];

    public static function all()
    {
        // collection memungkinkan array untuk memanggil fungsi seperti mencari data paling awal
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
