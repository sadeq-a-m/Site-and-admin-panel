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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;




Route::get('/search' ,  'SearchController@search')->name('search')  ;


Auth::routes();

Route::get('/403' , function (){

    return  view('errors.403')  ;
})  ;


Route::get('/', 'HomeController@all_post')->name('index') ;


Route::get('/cache' ,   'CacheController@index') ;




Route::middleware(['auth'])->prefix('admin')->group(function (){




    Route::get('/episodes/{post}' , "EpisodeController@index")->name('episode.index');
    Route::get('/create/{post}' , 'EpisodeController@create')->name('episode.create')  ;
    Route::post('/store' , 'EpisodeController@store')->name('episode.store')   ;
    Route::put('/free/{episode}'  ,   'EpisodeController@free')->name('episode.free')  ;
    Route::put('/buy/{episode}'  ,   'EpisodeController@buy')->name('episode.buy')  ;
    Route::delete('/delete/{episode}' , 'EpisodeController@delete')->name('episode.delete') ;






    Route::get('/charts' , 'ChartController@index')->name('charts') ;


    Route::put('/apost/{post}'  ,   'PostController@accept')->name('accept_post')  ;
    Route::put('/dpost/{post}'  ,   'PostController@disable')->name('disable_post')  ;



    Route::get('users' , 'UserController@main')->name('panel.users') ;
    Route::resource('panel' ,   'UserController');
    Route::resource('posts' ,   'PostController');
    Route::get('roles' , 'RoleController@index')->name('roles') ;

    //role :
    Route::get('create_role'    ,  'RoleController@create')->name('create_role') ;
    Route::post('create_role' , 'RoleController@store')->name('store.role') ;
    Route::delete('delete_role/{role}' ,   'RoleController@destroy')->name('destroy.role')   ;
    Route::get('edit_role/{role}' , 'RoleController@edit')->name('edit.role')   ;
    Route::put('update_role/{role}' , 'RoleController@update')->name('update.role')   ;

    //categore :
    Route::get('categores' , 'CategoreController@index')->name('all_categore')  ;
    Route::get('create_categore'    ,  'CategoreController@create')->name('create_categore') ;
    Route::post('create_categore' , 'CategoreController@store')->name('store.categore') ;
    Route::delete('delete_categore/{categore}' ,   'CategoreController@destroy')->name('destroy.categore')   ;
    Route::get('edit_categore/{categore}' , 'CategoreController@edit')->name('edit.categore')   ;
    Route::put('update_categore/{categore}' , 'CategoreController@update')->name('update.categore')   ;


});



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/role' , function (){

    return view('roles.index')      ;

})  ;


Route::get('/create_role' , function (){

    return view('roles.create') ;
})  ;
