<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('post/show', compact('post'));
    }
}