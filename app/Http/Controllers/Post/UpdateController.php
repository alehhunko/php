<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class UpdateController extends Controller
{
    public function __invoke(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tagss = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tagss);
        return redirect()->route('post.show', $post->id);
    }
}