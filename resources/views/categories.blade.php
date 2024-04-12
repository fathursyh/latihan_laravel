@extends('layouts.main')


@section('body')
<div class="col-8">
    <h1 class="mb-5">{{ $title }}</h1>
    <ul>
    @foreach ($categories as $category)
        <li>
            <h2><a href="/posts?category={{ $category->slug }}">{{ $category->name }}</a></h2>
        </li>
        @endforeach
    </ul>
</div>

@endsection
