<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function Category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'category_id');
    }

    public function likes()
    {
        return $this->belongsToMany('App\User', 'likes')->withTimestamps();
    }

    public function isLikedBy(?User $user): bool
    {
        return $user
            ? (bool) $this->likes->where('id', $user->id)->count()
            : false;
    }

    public function getCountLikesAttribute(): int
    {
        return $this->likes->count();
    }

    public function comments(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'comments')->withTimestamps();
    }
}
