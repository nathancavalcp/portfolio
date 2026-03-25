<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table('posts')]
class Post extends Model
{
    protected $fillable = ['title', 'content', 'user_id'];

    // protected $casts = [
    //     'created_at' => 'datetime'
    // ];

    
}