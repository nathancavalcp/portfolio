<?php

use Illuminate\Support\Facades\Route;
use App\Models\Skill;

Route::get('/', function () {
    return view('index.index');
});

Route::get('/presentation', function() {
    $skills = Skill::all();
    return view('index.presentation', ['skills' => $skills]);
});

Route::get('/competences', function() {
    return view('index.competences');
});

require __DIR__.'/api.php';
require __DIR__.'/auth.php';
require __DIR__.'/blog.php';