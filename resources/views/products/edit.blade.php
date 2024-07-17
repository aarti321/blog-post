<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Product</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Edit Product Details
                </div>
                <div class="card-body">
                    <form action="{{ url('products/'.$product->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="5" required>{{ $product->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                        <a href="{{ url('products') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
