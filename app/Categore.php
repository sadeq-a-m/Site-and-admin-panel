<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categore extends Model
{
    protected $guarded = [] ;


    public function post()
    {
        return  $this->belongsToMany(Post::class)   ;
    }
}
