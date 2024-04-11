@extends('layouts.main')

@section('body')
    <div class="col-lg-8">
        <h1 class="h2">Crete New Post</h1>
        <form action="/{{ auth()->user()->username }}/posts" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Category</label>
                <select name="category" id="category" class="form-select">
                    <option selected disabled>-- Choose Category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input id="blogBody" type="hidden" name="body">
                <trix-editor input="blogBody"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection
