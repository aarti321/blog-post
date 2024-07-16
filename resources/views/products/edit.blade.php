<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ url('products/'.$product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $product->name }}" required>
        <textarea name="description" required>{{ $product->description }}</textarea>
        <button type="submit">Update Product</button>
    </form>
@endsection
