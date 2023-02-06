<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    public function __invoke()
    {
        // $post=Post::find(1);
        // $tag=Tag::find(1);
        // dump($tag->title);
        // dd($tag->posts);
        $posts = Post::paginate(5);
        return view('post/index', compact('posts'));
    }
}