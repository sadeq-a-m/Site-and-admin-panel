<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Http\Requests\EpisodeRequest;
use App\Post;
use Illuminate\Http\Request;

class EpisodeController extends ImageUploder
{




    public function index(Post $post)
    {

        $episodes   =  $post->episode ;
        return view('panel.episodes.index' , ['episodes' => $episodes]) ;
    }




    public function create(Post $post)
    {

        return view('panel.episodes.create' , ['post' => $post->id]) ;
    }





    public function store(EpisodeRequest $request)
    {

       $data    =   $request->all() ;
       $imageurl =  $this->uploadImage(request()->file('episode_video')  , 'posts')  ;
       $data['episode_video'] =   $imageurl   ;
       Episode::create($data)   ;
       return  redirect(route('episode.index' , $request->post_id))  ;
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



    public function delete(Episode $episode)
    {

        $episode->delete()  ;
        return  redirect(route('episode.index' , $episode->post->id))  ;

    }
}
