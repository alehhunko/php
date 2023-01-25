<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function Index()
    {
        $posts = Post::all()->where('is_published', 0);
        foreach ($posts as $key => $post) {
            dump($key);
            dump($post->title);
        }
        echo 'Hi Asia';
    }

    public function Create()
    {
        $postsArr = [
            [
                "title" => "some post",
                "content" => "some content",
                "image" => "imagepost.jpg",
                "likes" => 20,
                "is_published" => 1,
            ],
            [
                "title" => "another some post",
                "content" => "anothersome content",
                "image" => "another_imagepost.jpg",
                "likes" => 30,
                "is_published" => 1,
            ]

        ];
        foreach ($postsArr as $post) {
            Post::create($post);
        }
        echo 'Hi America';
    }
}
