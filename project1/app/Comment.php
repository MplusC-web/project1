<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    protected $with = ['user', 'post', 'replies'];

    public function post()
    {
        return $this->belongsTo('App\post');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function childrens()
    {
        return $this->hasMany('App\comment', 'parent_id');
    }

    public function replies()
    {
        return $this->hasMany('App\comment', 'parent_id');
    }
}
