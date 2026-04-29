<?php

use App\Models\TechSkill;
use Illuminate\Support\Facades\Route;
use App\Models\Skill;

Route::get('/', function () {
    $skills = Skill::all();
    $techs = TechSkill::all();
    $experiences = \App\Models\Experience::all();
    $tools = \App\Models\Tool::all();
    return view('index.index', ['skills' => $skills, 'techs' => $techs, 'experiences' => $experiences, 'tools' => $tools]);
});

Route::get('/competence/{id}', function ($id) {
    $tech = TechSkill::findOrFail($id);
    return view('index.detail_competence', ['tech' => $tech]);
})->name('index.detail_competence');

Route::get('/experience/{id}', function ($id) {
    $experience = \App\Models\Experience::findOrFail($id);
    return view('index.detail_experience', ['experience' => $experience]);
})->name('index.detail_experience');

require __DIR__.'/api.php';
require __DIR__.'/auth.php';
require __DIR__.'/blog.php';