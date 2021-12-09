<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat', 'type', 'slug', 'title', 'subtitle', 'content', 'cover', 'images', 'extra', 'status', 'meta-description', 'meta-keywords', 'meta-author'
    ];

    protected $hidden = ['id'];
}
