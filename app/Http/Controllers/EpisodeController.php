<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Http\Requests\EpisodeRequest;
use App\Post;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{




    public function index()
    {

        return view('panel.episodes.index') ;
    }




    public function create(Post $post)
    {

        return view('panel.episodes.create' , ['post' => $post->id]) ;
    }





    public function store(EpisodeRequest $request)
    {

       $data    =   $request->all() ;
       Episode::create($data)   ;
       return  redirect(route('episode.index'))  ;
    }
}
