@extends('layouts.main')

@section('body')
<div class="col-8">
    <article>
        <h1>{{ $post->title }}</h1>
        <h6>By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                @if ($post->image)
                <div style="max-height: 400px; overflow: hidden; ">
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid " alt="...">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="...">
                @endif
        <article class="my-3">
            {!! $post->body !!}
        </article>
        <a href="/{{ auth()->user()->username }}/posts">Back</a>
</div>

    @endsection
