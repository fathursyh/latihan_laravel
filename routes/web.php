<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'nama' => 'Ganteng',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title'=> 'About',
    ]);
});


// POST PAGE w/ controller
Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{slug}', [PostController::class,'show']);