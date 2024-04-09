@extends('layouts.main')


@section('body')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
@foreach ($posts as $post)
<article class="mb-5">
    <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
    <p class="mb-1"><?= substr($post->body, 0, 180) . ' ...' ?></p>
    <p class="text-end mt-0"><a href="/posts/{{ $post->id }}">Read More</a></p>
</article>
@endforeach

@endsection