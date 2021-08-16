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


}

