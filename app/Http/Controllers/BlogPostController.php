<?php
// BlogPostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    // List all blog posts
    public function index()
    {
        $blogPosts = BlogPost::all();
        return view('admin.blog.index', compact('blogPosts'));
    }

    // Show the form for creating a new blog post
    public function create()
    {
        return view('admin.blog.create');
    }

    // Store a newly created blog post in storage
    public function store(Request $request)
    {
        // there is also need to create slug from title
        $request['slug'] = \Str::slug($request->title);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);

        BlogPost::create($request->all());

        return redirect()->route('blog.index')->with('success', 'Blog post created successfully.');
    }

    // Show the form for editing the specified blog post
    public function edit($id)
    {

        $blogPost = BlogPost::findOrFail($id);
        return view('admin.blog.edit', compact('blogPost'));
    }

    // Update the specified blog post in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);

        $blogPost = BlogPost::findOrFail($id);
        $blogPost->update($request->all());

        return redirect()->route('blog.index')->with('success', 'Blog post updated successfully.');
    }

    // Remove the specified blog post from storage
    public function destroy($id)
    {
        $blogPost = BlogPost::findOrFail($id);
        $blogPost->delete();

        return redirect()->route('blog.index')->with('success', 'Blog post deleted successfully.');
    }
}