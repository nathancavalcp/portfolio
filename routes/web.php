<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index.index');
});

Route::get('/presentation', function() {
    return view('index.presentation');
});

Route::get('/competences', function() {
    return view('index.competences');
});

require __DIR__.'/api.php';
require __DIR__.'/auth.php';
require __DIR__.'/blog.php';