<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequesst;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends ImageUploder

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('components.panel')     ;

    }


    public function main()
    {
        return view('users.index' , ['users' => User::all()])     ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.creat'   ,   ['roles' => Role::all()])  ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequesst $request)
    {


       $data =  $request->except('role')     ;
       $role =  $request->only('role')  ;
       $data['password']  = bcrypt($data['password']) ;
       $user =  User::create($data)  ;

       $user->role()->attach($role)  ;

       return redirect(route('panel.users'))   ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user    =   User::find($id) ;
        $roles   =   Role::all()    ;
        return view('users.edit' , ['user'  =>  $user , 'roles' => $roles]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {

       $user    =   User::find($id) ;
       $data    =   $request->all() ;



        if ($request->hasFile('img_user')){

            $imageurl =  $this->uploadImage(request()->file('img_user')) ;
            $user['image']  = $imageurl ;
        }


        $user->update($data);
        return redirect(route('panel.users'))  ;


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)     ;

        $user->delete();
        return back() ;
    }
}
