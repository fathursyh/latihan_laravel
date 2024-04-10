@extends('layouts.main')


@section('body')
<h1>{{ $title }}</h1>
@if ($posts->count() > 0)
<div class="card mb-3">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>  
@else
<p class="text-center fs-4">No Posts Found.</p> 
@endif



@foreach ($posts as $post)
<article class="mb-5 border-bottom">
    <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
    <h5>By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>

    <p class="mb-1"><?= substr($post->body, 0, 180) . ' ...' ?></p>
    <p class="text-end mt-0"><a href="/posts/{{ $post->slug }}">Read More</a></p>
</article>
@endforeach

@endsection