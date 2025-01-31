<!-- resources/views/blog/create.blade.php -->
@extends('layout.mainlayout_admin')

@push('styles')
<script src="https://cdn.ckeditor.com/4.25.0-lts/standard/ckeditor.js"></script>

    <style>
        .home-page .container {
            background-color: #f0f0f0;
        }

        .custom-button {
            background-color: #007bff;
            color: white;
        }
    </style>
@endpush

   @section('content')

   <div class="col-lg-9 col-md-8">
      <div class="mb-4">
         <h1 class="mb-0 h3">Create Blog Post</h1>
      </div>
      
      <div class="card border-0 shadow-sm mb-4">
         <div class="card-body p-lg-5">
            <div class="mb-5">
               {{-- <h4 class="mb-1">Account Information</h4> --}}
                <p class="mb-0 fs-6">Fill out the form below to create a new blog post. Make sure to provide all the necessary information including the title, content, meta description, and meta keywords to optimize your post for search engines.</p>
            </div>
            <form class="row g-3 needs-validation" action="{{ route('blog.store') }}" method="POST" novalidate>
               @csrf
                <div class="col-lg-12 col-md-12">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" required />
                  <div class="invalid-feedback">Please enter title.</div>
               </div>
               <div class="col-lg-12 col-md-12">
                  <label for="content" class="form-label">Content</label>
                  {{-- <textarea name="editor1"></textarea> --}}
				
                  <textarea type="text" class="form-control" id="content" name="content" required style="height: 200px;"></textarea>
                  <div class="invalid-feedback">Please add content.</div>
               </div>
               <div class="col-lg-12 col-md-12">
                  <label for="meta_description" class="form-label">Meta Description</label>
                  <input type="text" class="form-control" id="meta_description" name="meta_description" required />
                  <div class="invalid-feedback">Please enter meta description.</div>
               </div>
               <div class="col-lg-12 col-md-12">
                  <label for="meta_keywords" class="form-label">Meta Keywords</label>
                  <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" required />
                  <div class="invalid-feedback">Please enter meta keywords.</div>
               </div>
               <div class="col-12 mt-4">
                  <button class="btn btn-primary me-2" type="submit">Save Changes</button>
                  <button class="btn btn-light" type="submit">Cancel</button>
               </div>
            </form>
         </div>
      </div>
   </div>

@endsection

@section('script')
   <script>
      CKEDITOR.replace( 'content' );
   </script>

@endsection