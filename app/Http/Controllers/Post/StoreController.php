<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use Illuminate\Support\Facades\Redirect;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
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