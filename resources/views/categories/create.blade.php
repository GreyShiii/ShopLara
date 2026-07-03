@extends('layouts.main')

@section('contents')
    <h2>Add Category</h2>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="">Category Name</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name') <span>{{ $message }}</span> @enderror<br><br>

        <button type="submit">Add Category</button>
        <a href="{{ route('categories.index') }}">Cancel</a>
    </form>
@endsection
