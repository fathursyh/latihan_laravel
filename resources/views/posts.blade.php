@extends('layouts.main')


@section('body')
<h1>{{ $title }}</h1>
@if ($posts->count() > 0)
<div class="card mb-5">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="..." >
    <div class="card-body">
      <h3 class="card-title">{{ $posts[0]->title }}</h3>
      <h5>By : <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></h5>
      <p class="card-text">{{ substr($posts[0]->body, 0, 180) }}..</p>
      <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
      <p class="card-text text-end"><small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
    </div>
  </div>  
@else
<p class="text-center fs-4">No Posts Found.</p> 
@endif



@foreach ($posts->skip(1) as $post)
<article class="mb-5 border-bottom">
    <h4><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h4>
    <h5>By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>

    <p class="mb-1"><?= substr($post->body, 0, 180) . ' ...' ?></p>
    <p class="mt-0"><a href="/posts/{{ $post->slug }}">Read More</a></p>
    <p class="text-end"><small class="text-body-secondary">Published 3 mins ago</small></p>

</article>
@endforeach

@endsection