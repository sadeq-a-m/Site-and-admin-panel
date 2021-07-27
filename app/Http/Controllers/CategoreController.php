<?php

namespace App\Http\Controllers;

use App\Categore;
use App\Http\Requests\CategoreRequest;
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






    public function store(CategoreRequest $request)
    {

       $data    =   $request->all() ;
       Categore::create($data)  ;
       return redirect(route('all_categore'))   ;

    }
}
