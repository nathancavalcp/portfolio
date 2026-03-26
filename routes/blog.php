<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

// Route d'affichage des posts (avec 'name' pour redirection facile)
Route::get('/blog', [BlogController::class, 'index'])
    ->name('blog');

// Routes d'ajout (get: formulaire, post: ajout)
Route::get('/blog/new', [BlogController::class, 'create']);
Route::post('/blog/new', [BlogController::class, 'store']);

// Routes de mise à jour (idem)
Route::get('/blog/edit/{post}', [BlogController::class, 'edit'])
    ->name('blog.view_update');
Route::put('/blog/edit/{post}', [BlogController::class, 'update'])
    ->name('blog.update');

// Route de suppression
Route::delete('/blog/delete/{post}', [BlogController::class, 'destroy'])
    ->name('blog.delete');