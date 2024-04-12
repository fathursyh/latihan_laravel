@extends('layouts.main')


@section('body')
<div class="col-8">
  <h1 class="text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts" method="GET">
      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}" />
      @endif
      @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}" />
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>
@if ($posts->count() > 0)
<div class="card mb-5">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="..." >
    <div class="card-body">
      <h3 class="card-title">{{ $posts[0]->title }}</h3>
      <h5>By : <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></h5>
      <p class="card-text">{!! Str::limit($posts[0]->body, 150, '...') !!}</p>
      <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
      <p class="card-text text-end"><small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
    </div>
</div>  

@foreach ($posts->skip(1) as $post)
<article class="mb-5 border">
    <h4><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h4>
    <h5>By : <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h5>

    <p class="mb-1">{!! Str::limit($posts[0]->body, 150, '...') !!}</p>
    <p class="mt-0"><a href="/posts/{{ $post->slug }}">Read More</a></p>
    <p class="text-end"><small class="text-body-secondary">Published 3 mins ago</small></p>

</article>
@endforeach
@else
<p class="text-center fs-4">No Posts Found.</p> 
@endif 


<div class="d-flex justify-content-end">
  {{ $posts->links() }}
</div>
</div>


@endsection