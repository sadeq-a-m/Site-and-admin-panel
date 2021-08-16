<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RoleController extends Controller
{



    public function index()
    {
        $roles = Role::all()    ;
        return  view('roles.index' , ['roles' => $roles]) ;
    }





    public function create()
    {
        return view('roles.create');
    }





    public function store(RoleRequest $request)
    {

        $data   =   $request->all();

        Role::create($data) ;
        return redirect(route('roles')) ;
    }



    public function edit(Role $role)
    {


        return view('roles.edit' , ['role' => $role])   ;
    }



    public function update(RoleRequest $request , Role $role)

    {

        $newdata    =   $request->all() ;
        $role->update($newdata);
        return redirect(route('roles')) ;

    }





    public function destroy(Role $role)
    {

       $role->delete()  ;
       return back();
    }




}
