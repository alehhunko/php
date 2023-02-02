<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use Illuminate\Support\Facades\Redirect;

class UpdateController extends Controller
{
    public function __invoke(Post $post, UpdateRequest $request)
    {
        $data = $request->validated();
        $tagss = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tagss);
        return redirect()->route('post.show', $post->id);
    }
}