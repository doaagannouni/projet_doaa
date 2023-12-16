<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Create Product</h2>
        <form action="{{ route('products.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="number" name="price" class="form-control" step="0.01" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Create Product</button>
        </form>
    </div>
@endsection
