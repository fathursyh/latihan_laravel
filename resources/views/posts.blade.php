@extends('layouts.main')


@section('body')
@foreach ($posts as $post)
<article class="mb-5">
    <h2><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
    <h5>By : {{ $post['author'] }}</h5>
    <p class="mb-1"><?= substr($post['body'], 0, 180) . ' ...' ?></p>
    <p class="text-end mt-0"><a href="/posts/{{ $post['slug'] }}">Read More</a></p>
</article>
@endforeach

@endsection
