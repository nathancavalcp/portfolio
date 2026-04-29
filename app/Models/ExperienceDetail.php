<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceDetail extends Model
{
    /** @use HasFactory<\Database\Factories\ExperienceDetailFactory> */
    use HasFactory;

    protected $fillable = ['title', 'description', 'pdf_link', 'experience_id'];
}
