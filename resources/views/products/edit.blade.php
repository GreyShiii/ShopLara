@extends('layouts.main')

@section('contents')
    <h2>Editting: {{ $product->name }}</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Product Name</label><br>
        <input type="text" name="name" value="{{ old('name', $product->name) }}">
        @error('name') <span>{{ $message }}</span> @enderror<br><br>

        <label>Category</label><br>
        <select name="category_id" id="">
            <option value="">-- Select Category --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $product->category->id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select><br><br>

        <label for="">Price</label><br>
        <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}">
        @error('price') <span>{{ $message }}</span> @enderror<br><br>

        <label for="">Stock</label><br>
        <input type="number" name="stock" value="{{ old('stock', $product->stock) }}">
        @error('stock') <span>{{ $message }}</span> @enderror<br><br>

        <button type="submit">Update Product</button>
        <a href="{{ route('products.index') }}">Cancel</a>
    </form>
@endsection
