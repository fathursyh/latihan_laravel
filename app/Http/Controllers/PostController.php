<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        return view('posts', [
            'header'=> 'Posts',
            'title' => 'All Posts',
            'posts'=> Post::latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString(),
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            'header'=> 'Posts',
            'title' => $post->title,
            'post'=> $post,
        ]);
    }
}
