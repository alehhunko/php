<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Redirect;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
