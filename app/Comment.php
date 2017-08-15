<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function getCommentUser(){
        return $this->belongsToMany('App\User');
    }
    public function getCommentPost(){
        return $this->belongsToMany('App\Post');
    }
}
