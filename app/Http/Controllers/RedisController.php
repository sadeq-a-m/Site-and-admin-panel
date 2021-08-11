<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;


class RedisController extends Controller
{


    public function index()
    {

//        Redis::set('myname' ,   'mohammad');
//        return  Redis::get('myname')    ;

 //       return Redis::get('myname')  ;

        Redis::del('myname')    ;
        Redis::set('myname' ,   'mohammad');
        return Redis::get('myname')  ;
    }

}
