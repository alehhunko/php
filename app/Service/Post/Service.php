<?php

namespace App\Service\Post;

use App\Post;

class Service
{
    public function store($data)
    {
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
    }

    public function update($post, $data)
    {
        $tagss = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tagss);
    }
}
