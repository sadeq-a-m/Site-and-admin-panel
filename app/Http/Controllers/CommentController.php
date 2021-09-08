<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{



    public function store(Request $request)
    {

       $comment = $request->all()   ;
       $comment['user_id'] = auth()->user()->id;
       Comment::create($comment)    ;
       return back()    ;

    }
}
