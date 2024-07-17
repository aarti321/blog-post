<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Create Product</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    New Product
                </div>
                <div class="card-body">
                    <form action="{{ url('products') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter product name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Enter product description" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Create Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
