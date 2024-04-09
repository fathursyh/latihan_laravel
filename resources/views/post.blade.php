@extends('layouts.main')

@section('body')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>By : <a href="/post/{user}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        <p>{{ $post->body }}</p>
    </article>

    <a href="/posts">Back</a>
@endsection
