<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Support\Facades\Redirect;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post/create', compact('categories', 'tags'));
    }
}
