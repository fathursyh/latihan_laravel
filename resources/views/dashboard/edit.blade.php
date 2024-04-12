@extends('layouts.main')

@section('body')
    <div class="col-lg-8">
        <h1 class="h2">Edit Post</h1>
        <form action="/{{ auth()->user()->username }}/posts/{{ $post->slug }}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title')
                    is-invalid
                @enderror" id="title" name="title" value="{{ old('title', $post->title) }}" autofocus required>
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <div class="mb-3">
                <input type="hidden" class="form-control" id="slug" name="slug" disabled readonly value="{{ old('slug', $post->slug) }}">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    <option selected disabled value="">-- Choose Category --</option>
                    @foreach ($categories as $category)
                    @if (old('category_id', $post->category_id) == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mt-5">
                <input id="blogBody" type="hidden" name="body" value="{{ old('body', $post->body)  }}">
                <trix-editor input="blogBody"></trix-editor>
                @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-4">Create Post</button>
        </form>
    </div>
@endsection
