<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use PharIo\Manifest\Author;

class PostController extends Controller
{
    public function index()
    {
        $title = "All Post";
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = $category->name . " Posts";
        } elseif (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = $author->name . " Posts";
        }

        return view('posts', [
            "title" => $title,
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(9),
            "logo" => "logodivi.svg"
        ]);
    }

    public function single(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post,
            "logo" => "logodivi.svg"
        ]);
    }
}
