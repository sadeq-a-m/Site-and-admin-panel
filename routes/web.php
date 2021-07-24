<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route    ;



Auth::routes();



Route::middleware(['auth'])->group(function (){


    Route::get('users' , 'UserController@main')->name('panel.users') ;
    Route::resource('panel' ,   'UserController');
    Route::get('roles' , 'RoleController@index')->name('roles') ;
    Route::get('create_role'    ,  'RoleController@create')->name('create_role') ;
    Route::post('create_role' , 'RoleController@store')->name('store.role') ;
    Route::delete('delete_role/{role}' ,   'RoleController@destroy')->name('destroy.role')   ;
    Route::get('edit_role/{role}' , 'RoleController@edit')->name('edit.role')   ;
    Route::put('update_role/{role}' , 'RoleController@update')->name('update.role')   ;

});



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/role' , function (){

    return view('roles.index')      ;

})  ;


Route::get('/create_role' , function (){

    return view('roles.create') ;
})  ;
