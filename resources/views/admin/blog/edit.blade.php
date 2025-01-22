<!-- resources/views/blog/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Blog Post</h1>
    <form action="{{ route('blog.update', $blogPost->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $blogPost->title }}" required>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required>{{ $blogPost->content }}</textarea>
        <label for="meta_description">Meta Description:</label>
        <input type="text" name="meta_description" id="meta_description" value="{{ $blogPost->meta_description }}" required>
        <label for="meta_keywords">Meta Keywords:</label>
        <input type="text" name="meta_keywords" id="meta_keywords" value="{{ $blogPost->meta_keywords }}" required>
        <button type="submit">Update</button>
    </form>
@endsection