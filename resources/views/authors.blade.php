@extends('layouts.main')


@section('body')
<h1 class="mb-5">{{ $header }}</h1>
<ul>
@foreach ($authors as $author)
    <li>
        <h2><a href="/posts?author={{ $author->username }}">{{ $author->name }}</a></h2>
    </li>
    @endforeach
</ul>

@endsection
