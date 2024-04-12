@extends('layouts.main')


@section('body')
<div class="col-8">
    <h1 class="mb-5">Authors</h1>
    <ul>
    @foreach ($authors as $author)
        <li>
            <h2><a href="/posts?author={{ $author->username }}">{{ $author->name }}</a></h2>
        </li>
        @endforeach
    </ul>
</div>

@endsection
