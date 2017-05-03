<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $visible = [
        'blog_post_id',
        'user_id',
        'content'
    ];

    public function post()
    {
        return $this->belongsTo(BlogPost::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
