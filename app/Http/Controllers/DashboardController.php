<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'posts'=> Post::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create', [
            'title'=> 'Create Post',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request->file('image')->store('post-images');
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'unique:post',
            'category_id'=> 'required',
            'body'=> 'required',
        ]);

        $validated['user_id'] = auth()->user()->id;
        Post::create($validated);
        return redirect(auth()->user()->username .'/posts')->with('success', 'New post added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($user, Post $post)
    {
        return view('dashboard.show', [
            'post' => $post,
            'title' => $post->title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($user, Post $post)
    {
        return view('dashboard.edit', [
            'title'=> 'Create Post',
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($user, Request $request, Post $post)
    {
        $rules = ([
            'title' => 'required|max:255',
            'category_id'=> 'required',
            'body'=> 'required',
        ]);
        if($request['slug'] != $post->slug){
            $rules['slug'] = 'unique:posts';
        }

        $validated = $request->validate($rules);
        $validated['user_id'] = auth()->user()->id;
        Post::where('id', $post->id)->update($validated);
        return redirect(auth()->user()->username .'/posts')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user, Post $post)
    {
        Post::destroy($post->id);
        return redirect(auth()->user()->username .'/posts')->with('success', 'Post Deleted Successfully!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json([
            'slug' => $slug,
        ]);
    }
}
