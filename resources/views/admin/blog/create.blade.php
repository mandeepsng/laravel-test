@extends('layout.mainlayout_admin')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/trumbowyg@2.26.0/dist/ui/trumbowyg.min.css">
    

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
                <p class="mb-0 fs-6">Fill out the form below to create a new blog post. Provide all necessary details including the title, content, meta description, and meta keywords.</p>
            </div>
            <form class="row g-3 needs-validation" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data" novalidate>
               @csrf
               <div class="col-lg-12 col-md-12">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" required onkeyup="generateSlug()"/>
                  <div class="invalid-feedback">Please enter title.</div>
               </div>

               <div class="col-lg-12 col-md-12">
                  <label for="slug" class="form-label">Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" required />
                  <div class="invalid-feedback">Slug is required.</div>
               </div>

               <div class="col-lg-12 col-md-12">
                  <label for="content" class="form-label">Content</label>
                  <textarea class="form-control" id="content" name="content" required style="height: 200px;"></textarea>
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

               <div class="col-lg-12 col-md-12">
                  <label for="thumbnail" class="form-label">Thumbnail</label>
                  <input type="file" class="form-control" id="thumbnail" name="thumbnail" />
              </div>

               <div class="col-12 mt-4">
                  <button class="btn btn-primary me-2" type="submit">Save Changes</button>
                  <button class="btn btn-light" type="button">Cancel</button>
               </div>
            </form>
         </div>
      </div>
   </div>

@endsection

@section('script')
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.26.0/dist/trumbowyg.min.js"></script>
   <script>
      // Initialize Trumbowyg
      $(document).ready(function () {
            $('#content').trumbowyg();
        });

      // Generate slug from title
      function generateSlug() {
         let title = document.getElementById("title").value;
         let slug = title.toLowerCase()
                        .replace(/[^a-z0-9\s]/g, '')  // Remove special characters
                        .replace(/\s+/g, '-')        // Replace spaces with hyphens
                        .trim();
         document.getElementById("slug").value = slug;
      }
   </script>
@endsection
