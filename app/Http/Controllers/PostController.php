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

    public function Update()
    {
        $post = Post::find(9);
        $post->update([
            "title" => "update another some post",
            "content" => " updateanothersome content",
            "image" => " update another_imagepost.jpg",
        ]);
        dd($post->title);
    }

    public function Delete()
    {
        // $post = Post::find(2);
        // $post->delete();
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('delete');
    }

    public function firstOrCreate()
    {
        $post = Post::find(1);
        $postAnother = ([
            "title" => "some filtr post",
            "content" => "some filtr content",
            "image" => "filtr some_imagepost.jpg",
            "likes" => 3000,
        ]);
        $filtrPost = Post::firstOrCreate(["title" => "somes post"], $postAnother);
        dump($filtrPost);
    }
}
