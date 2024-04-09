@extends('layouts.main')

@section('body')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        <p>{{ $post->body }}</p>
    </article>

    <a href="/posts">Back</a>
@endsection
