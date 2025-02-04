<?php
// BlogPostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Symfony\Component\Console\Input\Input;

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

        // dd($request->all());


        // there is also need to create slug from title
        $request['slug'] = \Str::slug($request->title);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $input = $request->all();


        if ($request->hasFile('thumbnail')) {

            dd($request->thumbnail);
            $imageName = time().'.'.$request->thumbnail->extension();  
            $request->thumbnail->move(public_path('images'), $imageName);
            $input['thumbnail'] = $imageName;
        }

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
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $blogPost = BlogPost::findOrFail($id);
        $input = $request->all();

        if ($request->hasFile('thumbnail')) {
            // Delete the old thumbnail if it exists
            if ($blogPost->thumbnail && file_exists(public_path('images/' . $blogPost->thumbnail))) {
                unlink(public_path('images/' . $blogPost->thumbnail));
            }

            $imageName = time().'.'.$request->thumbnail->extension();  
            $request->thumbnail->move(public_path('images'), $imageName);
            $input['thumbnail'] = $imageName;
        }

        $blogPost->update($input);



        return redirect()->route('blog.index')->with('success', 'Blog post updated successfully.');
    }

    // Remove the specified blog post from storage
    public function destroy($id)
    {
        $blogPost = BlogPost::findOrFail($id);
        $blogPost->delete();

        return redirect()->route('blog.index')->with('success', 'Blog post deleted successfully.');
    }


    // Show the specified blog post
    public function show($id)
    {
        $blogPost = BlogPost::findOrFail($id);
        return view('admin.blog.show', compact('blogPost'));
    }


    public function bloglist()
    {
        $blogPosts = BlogPost::all();
        return view('frontend.blog.blog-list-view', compact('blogPosts'));
    }


    public function blogdetail($slug)
    {
        $blog = BlogPost::where('slug', $slug)->first();
        return view('frontend.blog.blog-single', compact('blog'));
    }

    public function blogsearch(Request $request)
    {
        $search = $request->input('search');
        $blogPosts = BlogPost::where('title', 'like', "%$search%")->get();
        return view('blog', compact('blogPosts'));
    }

    public function blogcategory($category)
    {
        $blogPosts = BlogPost::where('category', $category)->get();
        return view('blog', compact('blogPosts'));
    }

    public function blogjson()
    {
        $blogPosts = BlogPost::all();
        return response()->json($blogPosts);
    }
}