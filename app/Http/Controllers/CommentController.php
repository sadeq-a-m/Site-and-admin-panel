<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{



    public function store(Request $request)
    {

        $comment = new Comment;
        $comment->comment = $request->get('comment');
        $comment->user()->associate($request->user());
        $post = Post::find($request->get('post_id'));
        $post->comment()->save($comment);
        return back()->with('create' , 'کامنت شما ثبت شد ') ;   ;

    }




    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->comment = $request->get('comment');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('parent_id');

        $post = Post::find($request->get('post_id'));

        $post->comment()->save($reply);

        return back();

    }

}
