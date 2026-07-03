@extends('layouts.main')

@section('contents')
    <h2>Add Product</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="">Product Name</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name') <span>{{ $message }}</span> @enderror<br><br>

        <div>
            <label for="">Category</label><br>
            <select name="category_id" id="">
                <option value="">-- Select Category --</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div><br>

        <label for="">Price</label><br>
        <input type="number" step="0.01" name="price" value="{{ old('price') }}">
        @error('price') <span>{{ $message }}</span> @enderror<br><br>

        <label for="">Stock</label><br>
        <input type="number" name="stock" value="{{ old('stock') }}">
        @error('stock') <span>{{ $message }}</span> @enderror<br><br>

        <button type="submit">Create Product</button>
        <a href="{{ route('products.index') }}">Cancel</a>
    </form>
@endsection
