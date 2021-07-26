<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoreController extends Controller
{

    public function index()
    {

        return  view('categores.index') ;
    }



    public function create()
    {

        return  view('categores.create')    ;
    }
}
