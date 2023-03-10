<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
use App\PostTag;
use App\Tag;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function __invoke()
    {
        
    }
    public function index()
    {
        // $post=Post::find(1);
        // $tag=Tag::find(1);
        // dump($tag->title);
        // dd($tag->posts);
        $posts = Post::all();
        return view('post/index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post/create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'post_content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tagss = $data['tags'];
        unset($data['tags']);
        $post = Post::create($data);
        // foreach ($tags as $item) {
        //     PostTag::firstOrCreate([
        //         'tag_id' => $item,
        //         'post_id' => $post->id,
        //     ]);
        // }
        $post->tags()->attach($tagss);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post/show', compact('post'));
    }

    public function edit(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('post/edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tagss = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tagss);
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
