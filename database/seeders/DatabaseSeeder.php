<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Tag;
use App\Category;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(10)->create();
        $tags = Tag::factory(5)->create();
        $posts = Post::factory(20)->create();

        foreach ($posts as $post) {
            $tagsId = $tags->random(3)->pluck('id');
            $post->tags()->attach($tagsId);
        }
    }
}
