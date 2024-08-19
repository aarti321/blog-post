@extends('layouts.layout')

@section('title', 'Create Post')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Create Post</h1>
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
