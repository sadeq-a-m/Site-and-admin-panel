<?php

namespace App\Http\Controllers;

use App\Categore;
use App\Count;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Providers\CounterViews;
use App\Providers\CounterViewsPost;
use App\Providers\StoreCountViewsPosts;
use Illuminate\Http\Request;

class PostController extends ImageUploder
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $counter    =  Count::find(1)   ;
      //  event(new CounterViewsPost($counter))   ;


        $posts  =   Post::all() ;
        return  view('post.index' , ['posts'    =>  $posts]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categores  =   Categore::all()     ;
        return view('post.create'   ,   ['categores'    =>  $categores])  ;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

        $data   =   $request->except('categores')     ;
        $imageurl =  $this->uploadImage(request()->file('image_post')  , 'posts')  ;
        $data['image_post'] =   $imageurl   ;



        $post =  auth()->user()->posts()->create($data);



        //   after create categores:
           $post->categore()->attach(request('categores'))    ;


        return redirect(route('posts.index')) ;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts   =   Post::find($id)     ;
        return view('posts.index' , ['posts' => $posts])  ;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post   =   Post::find($id)        ;
        $categores  =   Categore::all()    ;
        return view('post.edit' , ['post' => $post , 'categores'    =>  $categores])    ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {

       $post    =   Post::find($id) ;
       $data    =   $request->except('categores')   ;


       if ($request->hasFile('image_post')){

            $imageurl =  $this->uploadImage(request()->file('image_post') , 'posts') ;
            $data['image_post']  =   $imageurl   ;

       }
       else{
           $data['image_post']  =   $post->image_post ;
       }



       $post->update($data)    ;

       $post->categore()->detach($post->categore)  ;
       $post->categore()->attach(request('categores'))    ;
       return redirect(route('posts.index'))    ;



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post   =   Post::find($id)     ;
        $post->delete() ;
        return back()   ;
    }



    public function accept(Post $post)
    {
        $post->accept =   true    ;
        $post->update()   ;
        return   back()  ;
    }






    public function disable(Post $post)
    {
        $post->accept    =   false   ;
        $post->update();
        return  back();
    }
}
