<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function Index()
    {
        $post=Post::find(2);
        dump($post->title);
        echo'Hi word';
       
    }
}
