@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Create Post</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    New Post
                </div>
                <div class="card-body">
                    <form action="{{ url('posts') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter post title" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="form-control" placeholder="Enter post content" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" name="author" id="author" class="form-control" placeholder="Enter author name" required>
                        </div>
                        <button type="submit" class="btn btn-success">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
