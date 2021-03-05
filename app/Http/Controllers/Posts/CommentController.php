<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentFormRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(StoreCommentFormRequest $request) {
        
        $comments = $request->user()
                            ->comments()
                            ->create($request->all());
        
        return redirect()->route('posts.show', $comments->post_id )
                         ->withSuccess('Comentário realizado com sucesso!!!');
    }
}
