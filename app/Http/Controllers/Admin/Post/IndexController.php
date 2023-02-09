<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $query = Post::query();
        if (isset($data['title'])) {
            $query->where('title', 'like', "%{$data['title']}%");
        }
        if (isset($data['category_id'])) {
            $query->where('category_id', "%{$data['category_id']}%");
        }
        if (isset($data['post_content'])) {
            $query->where('post_content', "%{$data['post_content']}%");
        }
        // $posts = Post::paginate(10);
        $posts = $query->paginate(10);
        return view('admin/post/index', compact('posts'));
    }
}
