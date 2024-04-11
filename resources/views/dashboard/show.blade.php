@extends('layouts.main')

@section('body')
<div class="col-8">
    <article>
        <h1>{{ $post->title }}</h1>
        <h6>By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="...">
        <article class="my-3">
            {!! $post->body !!}
        </article>
        <a href="/posts">Back</a>
</div>

    @endsection
