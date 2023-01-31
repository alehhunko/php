<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function index()
    {
        $post=Post::find(1);
        $tag=Tag::find(1);
        dump($tag->title);
        dd($tag->posts);
        // $posts = Post::all();
        // return view('post/index', compact('posts'));
    }

    public function create()
    {
        return view('post/create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post/show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post/edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function delete()
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
