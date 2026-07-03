@extends('layouts.main')

@section('contents')
    <h2>Editting: {{ $category->name }}</h2>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Category Name</label><br>
        <input type="text" name="name" value="{{ old('name', $category->name) }}">
        @error('name') <span>{{ $message }}</span> @enderror<br><br>

        <button type="submit">Update Category</button>
        <a href="{{ route('categories.index') }}">Cancel</a>
    </form>
@endsection
