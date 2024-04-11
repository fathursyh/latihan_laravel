<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;

Route::get('/', function () {
    return view('home', [
        'header' => 'Home',
        'title' => 'Home',
        'nama' => 'Ganteng',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'header'=> 'About',
        'title' => 'About',
    ]);
});


// POST PAGE w/ controller
Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class,'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
        'header' => 'Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/authors', function () {
    return view('authors', [
        'header' => 'Authors',
        'title' => 'User Posts',
        'authors' => User::all(),
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'save']);
Route::post('/register', [RegisterController::class, 'store']);