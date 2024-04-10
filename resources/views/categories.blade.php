@extends('layouts.main')


@section('body')
<h1 class="mb-5">{{ $header }}</h1>
<ul>
@foreach ($categories as $category)
    <li>
        <h2><a href="/posts?category={{ $category->slug }}">{{ $category->name }}</a></h2>
    </li>
    @endforeach
</ul>

@endsection
