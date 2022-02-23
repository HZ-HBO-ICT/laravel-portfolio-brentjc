<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function show($name)
    {

        return view('post', [
            'post' => Post::where('name', $name)->firstOrFail()
        ]);
    }
}
