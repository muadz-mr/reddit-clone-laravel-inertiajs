<?php

namespace App\Models;

class Community extends SlugModel
{
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'description',
    ];

    protected $casts = [
        'user_id' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
