<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(Post $post) {
        $posts = $post->paginate();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }
}
