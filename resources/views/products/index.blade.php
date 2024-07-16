<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    @foreach($products as $product)
        <div>
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <a href="{{ url('products/'.$product->id.'/edit') }}">Edit</a>
            <form action="{{ url('products/'.$product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
