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

        $episodes   =    Episode::all()  ;
        return view('panel.episodes.index' , ['episodes' => $episodes]) ;
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



    public function free(Episode $episode)
    {
        $episode->is_free =   true    ;
        $episode->update()   ;
        return   back()  ;
    }




    public function buy(Episode $episode)
    {
        $episode->is_free    =   false   ;
        $episode->update();
        return  back();
    }
}
