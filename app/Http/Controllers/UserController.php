<?php

namespace App\Http\Controllers;

use App\Count;
use App\Http\Requests\UserRequesst;
use App\Post;
use App\Providers\CounterViews;
use App\Providers\CounterViewsUser;
use App\Providers\StoreCountViewsUsers;
use App\Role;
use App\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends ImageUploder

{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $user = Auth::user()    ;

        if ($user->can('view' , $user)){

            return view('components.panel')     ;
        }

        else{
           return  "شما اجازه ندارید . ";
        }


    }


    public function main()
    {

        $user   =   Count::find(1)  ;
//        event(new  CounterViewsUser($user)) ;
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
        $roles   =   Role::all()     ;
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
       $role =  $request->only('role')  ;


        if ($request->hasFile('img_user')){

            if ($user->image != null){
                unlink('storage/users/'.$user->image)  ;
            }

            $imageurl =  $this->uploadImage(request()->file('img_user') , 'users') ;
            $user['image']  = $imageurl ;

        }


        $user->update($data);
        $user->role()->detach($user->role)       ;
        $user->role()->attach($role)  ;


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
