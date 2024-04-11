<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'nama' => 'Ganteng',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
    ]);
});


// POST PAGE w/ controller
Route::get('/posts', [PostController::class, 'index'])->middleware('auth');
Route::get('posts/{post:slug}', [PostController::class,'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/authors', function () {
    return view('authors', [
        'title' => 'Authors',
    'authors' => User::all(),
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'save'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('{user}/posts/checkSlug', [DashboardController::class,'checkSlug']);
Route::resource('{user}/posts', DashboardController::class)->middleware('auth');
