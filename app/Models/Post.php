<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends SlugModel
{
    use SoftDeletes;

    protected $slugFromColumn = 'title';

    protected $fillable = [
        'user_id',
        'community_id',
        'title',
        'slug',
        'url',
        'description',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'community_id' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function postVotes()
    {
        return $this->hasMany(PostVote::class);
    }
}
