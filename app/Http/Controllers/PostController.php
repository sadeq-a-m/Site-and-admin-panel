<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
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

        return view('post.create')  ;
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
        //   $post->categore()->attach(request('categores'))    ;


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

        $post   =   Post::find($id)      ;
        return view('post.edit' , ['post' => $post])    ;
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

//       $post->categore()->detach($post->categore)  ;
//       $post->categore()->attach(request('categores'))    ;
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
}
