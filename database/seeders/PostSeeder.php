<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=Post::factory(10)->make();
        dd($posts);
    }
}
