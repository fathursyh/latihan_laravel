<?php

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

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'header' => 'Categories',
        'posts'=> $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/authors', function () {
    return view('authors', [
        'header' => 'Authors',
        'title' => 'User Posts',
        'authors' => User::all(),
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'header' => 'Authors',
        'title' => $author->name,
        'posts' => $author->posts->load('author', 'category'),
    ]);
});