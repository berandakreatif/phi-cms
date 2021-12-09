<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug', 'key', 'val', 'image', 'extra', 'status'
    ];

    protected $hidden = ['id'];
}
