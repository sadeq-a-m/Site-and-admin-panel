<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{


    public function search()
    {
       $search  =   request()->get('search')    ;
       $posts   =   Post::query()->where('title'    ,   'LIKE'  ,   "%{$search}%")->get()   ;
       return  view('home.show_all_post' , ['posts'     =>      $posts])    ;

    }
}
