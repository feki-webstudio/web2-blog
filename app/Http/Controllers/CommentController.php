<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function saveComment(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
        ]);

        $comment = new Comment();
        $comment->user_id = Auth::guard()->user()->id;
        $comment->blog_post_id = $request->blog_post_id;
        $comment->content = $request->content;
        $comment->save();

        return redirect('/');
    }
}
