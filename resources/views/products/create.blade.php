<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ url('products') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <button type="submit">Create Product</button>
    </form>
@endsection
