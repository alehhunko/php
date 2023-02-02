<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class StoreController extends Controller
{
    public function __invoke()
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
}