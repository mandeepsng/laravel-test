<?php
// BlogPostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class BlogPostController extends Controller
{
    // List all blog posts
    public function index(Request $request): View
    {
        $blogPosts = BlogPost::orderBy('id','DESC')->paginate(10);
        return view('admin.blog.index',compact('blogPosts'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    // Show the form for creating a new blog post
    public function create()
    {
        return view('admin.blog.create');
    }

    // Store a newly created blog post in storage
    public function store(Request $request)
    {

        // Create a slug from the title
        $request->merge(['slug' => Str::slug($request->title)]);

        // Validate the request
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Get all input data
        $input = $request->except(['thumbnail']); // Exclude thumbnail for now

        // Handle file upload
        if ($request->hasFile('thumbnail')) {
            $imageName = time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('images'), $imageName);
            $input['thumbnail'] = 'images/' . $imageName; // Store relative path
        }

        // Create blog post
        BlogPost::create($input);

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
        // Merge slug into request data
        $request->merge(['slug' => Str::slug($request->title)]);

        // Validate request
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Thumbnail is optional
        ]);

        $blogPost = BlogPost::findOrFail($id);
        $input = $request->except(['thumbnail']); // Exclude thumbnail initially

        // Handle file upload
        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail if it exists
            if (!empty($blogPost->thumbnail) && file_exists(public_path($blogPost->thumbnail))) {
                unlink(public_path($blogPost->thumbnail));
            }

            // Upload new thumbnail
            $imageName = time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('images'), $imageName);
            $input['thumbnail'] = 'images/' . $imageName; // Store relative path
        }

        // Update blog post
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


    public function bloglist(Request $request): View
    {
        // $blogPosts = BlogPost::all();

        $blogPosts = BlogPost::orderBy('id','DESC')->paginate(10);
        return view('frontend.blog.blog-list-view',compact('blogPosts'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

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