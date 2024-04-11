@extends('layouts.main')

@section('body')
<div class="col-12 col-lg-8 px-3">
    <h1 class="my-5">{{ auth()->user()->username }}'s posts</h1>
    <a href="/{{ auth()->user()->username }}/posts/create" class="btn btn-primary">Create New Post</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nomor</th>
                <th scope="col">Judul</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <a href="posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="file-text"></span></a>
                    <a href="posts/{{ $post->slug }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <a href="posts/{{ $post->slug }}" class="badge bg-danger"><span data-feather="x-circle"></span></a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection
