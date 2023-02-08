<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    public function __invoke()
    {
        // $posts = Post::paginate(10);
        return view('admin/post/index');
    }
}
