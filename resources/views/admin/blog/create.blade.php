<!-- resources/views/blog/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Blog Post</h1>
    <form action="{{ route('blog.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea>
        <label for="meta_description">Meta Description:</label>
        <input type="text" name="meta_description" id="meta_description" required>
        <label for="meta_keywords">Meta Keywords:</label>
        <input type="text" name="meta_keywords" id="meta_keywords" required>
        <button type="submit">Create</button>
    </form>
@endsection