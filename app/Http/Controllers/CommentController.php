<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use function Couchbase\basicDecoderV1;


class CommentController extends Controller
{



    public function store(Request $request)
    {



//        $comment = new Comment;
//        $comment->comment = $request->comment ;
//        $comment->user()->associate($request->user());
//        $post = Post::find($request->get('post_id'));
//        $post->comment()->save($comment);


        Comment::create([
            'user_id' => 1 ,
            'commentable_id' => 1 ,
            'commentable_type' => 'App\Post' ,
            'comment' => $request->comment ,

        ]);


        return response()->json(["res"   => "نظر با موفقت ثبت شد ."]);


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
