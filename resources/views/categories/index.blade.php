@extends('layouts.main')

@section('contents')
    <h2>Categories</h2>
    <a href="{{ route('categories.create') }}">Add Category</a>
    <table>
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty

            @endforelse
        </tbody>
    </table>
@endsection
