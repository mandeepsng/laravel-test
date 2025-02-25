@extends('layout.mainlayout_admin')

@section('content')
      <main>
         <div class="pattern-square"></div>

         <!--Blog single start-->
         <div class="py-xl-9 py-4">
            <div class="container">
               <div class="row">
                  <article class="col-lg-8 offset-lg-2">
                     <h1>{{ $blog->title }}</h1>
                     <div class="d-flex align-items-center mt-lg-6 mt-4">
                        {{-- <div class="me-5">
                           <span class="fs-6">Written by</span>
                           <div class="d-flex align-items-center mt-2">
                              <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar" class="avatar avatar-xs rounded-circle" />
                              <div class="ms-2">
                                 <a href="#" class="text-reset fs-6">Sandip Chauhan</a>
                              </div>
                           </div>
                        </div> --}}
                        <div>
                           <span class="fs-6">Published on</span>
                           <div class="mt-2 text-dark">
                              <span class="fs-6">{{ $blog->created_at->format('j M, Y') }}</span>
                           </div>
                        </div>
                     </div>

                     <figure class="my-6">
                        <img src="{{ asset($blog->thumbnail) }}" alt="blog" class="rounded-3 img-fluid w-100" />
                     </figure>
                     
                     {!!  $blog->content !!}
                  
                  </article>
               </div>
            </div>
         </div>
         <!--Blog single end-->

         <!--Newsletter start-->
         {{-- <section class="mb-7">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2">
                     <div class="bg-primary bg-opacity-10 px-5 pt-5 pb-7 mb-2 rounded-3 text-center">
                        <div class="icon-shape bg-primary bg-opacity-10 icon-xl rounded-circle mb-4">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-check text-primary" viewBox="0 0 16 16">
                              <path
                                 d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                              <path
                                 d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                           </svg>
                        </div>
                        <div class="mb-4">
                           <h3>Subscribe to our newsletter</h3>
                           <p class="mb-0 mx-md-7 px-md-4">Lorem ipsum dolor sit amet consectetur adipiscing elit phasellus amet dui quam vitae quis leo velit aliquam.</p>
                        </div>
                        <form class="row g-3 needs-validation d-flex mx-md-7 px-md-4">
                           <div class="col-md-7 col-xl-8 col-12">
                              <label for="subscribeEmail" class="form-label visually-hidden">Email</label>

                              <input type="email" class="form-control" id="subscribeEmail" placeholder="Enter your email address" aria-label="Enter your business email" required />
                           </div>
                           <div class="col-md-5 col-xl-4 col-12">
                              <div class="d-grid">
                                 <button class="btn btn-primary shadow-sm" type="submit">Subscribe</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section> --}}
         <!--Newsletter end-->
      </main>
@endsection
