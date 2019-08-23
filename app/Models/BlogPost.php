<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'slug',
        'title',
        'img',
        'excerpt',
        'content',
        'is_published',
        'published_at',
    ];
}
