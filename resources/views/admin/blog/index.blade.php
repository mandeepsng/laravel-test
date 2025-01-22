<!-- resources/views/blog/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Blog Posts</h1>
    <a href="{{ route('blog.create') }}">Create New Post</a>
    <ul>
        @foreach ($blogPosts as $post)
            <li>
                <a href="{{ route('blog.edit', $post->id) }}">{{ $post->title }}</a>
                <form action="{{ route('blog.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection