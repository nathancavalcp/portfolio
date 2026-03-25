<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index.index');
});

require __DIR__.'/api.php';
require __DIR__.'/auth.php';