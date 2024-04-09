<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('posts/{post}', [PostController::class,'show']);