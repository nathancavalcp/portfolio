<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TechSkillDetail extends Model
{
    /** @use HasFactory<\Database\Factories\TechSkillDetailFactory> */
    use HasFactory;

    protected $fillable = ['title', 'description', 'pdf_link', 'tech_skill_id'];
}
