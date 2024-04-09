@extends('layouts.main')

@section('body')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <h5>By : {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/posts">Back</a>
@endsection