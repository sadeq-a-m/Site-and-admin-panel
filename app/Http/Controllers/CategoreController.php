<?php

namespace App\Http\Controllers;

use App\Categore;
use App\Http\Requests\CategoreRequest;
use Illuminate\Http\Request;

class CategoreController extends Controller
{

    public function index()
    {


        $all_categore   =   Categore::all()         ;
        return  view('categores.index'  ,   ['categores'        =>      $all_categore])        ;
    }






    public function create()
    {

        return  view('categores.create')    ;
    }






    public function store(CategoreRequest $request)
    {

       $data    =   $request->all()     ;
       Categore::create($data)       ;
       return redirect(route('all_categore'))   ;

    }






    public function edit(Categore $categore)
    {

        return  view('categores.edit' , ['categore' => $categore])  ;
    }




    public function update(CategoreRequest $request ,  Categore $categore)
    {

       $data    =   $request->all() ;

       $categore->update($data) ;
       return redirect(route('all_categore'));
    }







    public function destroy(Categore $categore)
    {

        $categore->delete() ;
        return  back()  ;
    }
}
