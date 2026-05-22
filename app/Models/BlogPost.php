<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'featured_image',
        'author', 'author_id', 'tags', 'category', 'views', 'status', 'published_at'
    ];

    protected $casts = [
        'tags' => 'array',
        'published_at' => 'datetime',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class, 'post_id');
    }
}

class BlogComment extends Model
{
    protected $fillable = ['post_id', 'author_name', 'author_email', 'comment', 'status'];
}
