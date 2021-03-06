<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded = [];



    public function user()
    {
        return $this->belongsTo(User::class)    ;
    }



    public function categore()
    {

        return  $this->belongsToMany(Categore::class)   ;
    }





    public function episode()
    {

        return$this->hasMany(Episode::class)    ;
    }






    public function comment()
    {

        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

}

