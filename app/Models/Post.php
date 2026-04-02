<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

#[Table('posts')]
class Post extends Model
{
    use HasTimestamps;
    protected $fillable = ['title', 'contenu', 'user_id'];

    // Exemple de méthode de Model
    public function auteur()
    {
        return $this->belongsTo(User::class);
    }

}