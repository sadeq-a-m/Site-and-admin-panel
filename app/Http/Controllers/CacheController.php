<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{

    public function index()
    {

  //  return Post::all() ;


//        Cache::put('posts'  ,   Post::all()     ,   600)    ;
//
//        return Cache::get('posts')  ;

       // Cache::put('postss'  ,   Post::all()     ,   600)    ;

      //  return Cache::get('postss')  ;

      //  Cache::put('p'  ,   Post::all()     ,   600)    ;

        return Cache::get('p')  ;
    }

}
