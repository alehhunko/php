<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Support\Facades\Redirect;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('post/edit', compact('post', 'categories', 'tags'));
    }
}