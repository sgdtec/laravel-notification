<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    public function index(Post $post) {
        $posts = $post->with('comments')->paginate();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($id) {
       $post = $this->post->with(['comments.user', 'user'])->find($id);
       
       return view('posts.show', [
            'post' => $post
       ]);
    }
}
