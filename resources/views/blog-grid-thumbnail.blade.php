@extends('layout.mainlayout_admin')

@section('content')
      <main>
         <div class="pattern-square"></div>
         <!--Pageheader start-->
         <section class="py-5 py-lg-8">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-12">
                     <h1 class="mb-3">Blog Grid Thumbnail</h1>
                     <p class="mb-0">Blog grid thumbnail bootstrap 5 examples. we write stuff from time to time that might be interesting 🤷‍</p>
                  </div>
               </div>
            </div>
         </section>
         <!--Pageheader end-->

         <!--Blog thumbnail start-->
         <section class="mb-xl-9 my-4">
            <div class="container">
               <div class="row mb-5">
                  <div class="col-lg-5 col-md-7 col-12">
                     <div class="row g-2 g-sm-3 align-items-center">
                        <div class="col-lg-6 col-md-6 col-12">
                           <form>
                              <label for="searchInput" class="form-label visually-hidden">Search Blog</label>
                              <input type="search" class="form-control" id="searchInput" placeholder="Search Blog" />
                           </form>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                           <label for="categoryList" class="form-label visually-hidden">Search Category</label>
                           <select class="form-select" id="categoryList">
                              <option selected disabled value>Select Category</option>
                              <option value="Digital">Digital</option>
                              <option value="Design">Design</option>
                              <option value="Business">Business</option>
                              <option value="Startup">Startup</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-5 col-12 d-none d-lg-block">
                     <ul class="nav d-flex gap-1 justify-content-md-end mt-3 mt-md-0">
                        <li>
                           <a class="btn btn-primary btn-icon btn-md" href="blog-grid-thumbnail.html">
                              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
                                 <path
                                    d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                              </svg>
                           </a>
                        </li>
                        <li>
                           <a class="btn btn-light btn-icon btn-md" href="blog-list-view.html">
                              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                              </svg>
                           </a>
                        </li>
                        <li>
                           <a class="btn btn-light btn-icon btn-md" href="blog.html">
                              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-grid-3x3-gap" viewBox="0 0 16 16">
                                 <path
                                    d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z" />
                              </svg>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="row gy-lg-7 gy-5">
                  <article class="col-xl-6 col-lg-6 col-md-6 col-12">
                     <figure class="zoom-img">
                        <a href="blog-single.html"><img src="assets/images/blog/blog-img-9.jpg" alt="blog" class="rounded-3 img-fluid" /></a>
                     </figure>
                     <div class="py-4 px-md-4">
                        <div class="mb-5">
                           <h3 class="lh-base h4">
                              <a href="blog-single.html" class="text-reset">Launch week summary</a>
                           </h3>
                           <p class="mb-0">An overview of what we shipped during our first Launch Week.</p>
                        </div>
                        <div class="d-flex align-items-center">
                           <div class="me-5">
                              <span class="fs-6">Written by</span>
                              <div class="d-flex align-items-center mt-2">
                                 <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar" class="avatar avatar-xs rounded-circle" />
                                 <div class="ms-2">
                                    <a href="#" class="text-reset fs-6">Sandip Chauhan</a>
                                 </div>
                              </div>
                           </div>
                           <div>
                              <span class="fs-6">Published on</span>
                              <div class="mt-2 text-dark"><span class="fs-6">9 Oct, 2023</span></div>
                           </div>
                        </div>
                     </div>
                  </article>
                  <article class="col-xl-6 col-lg-6 col-md-6 col-12">
                     <figure class="zoom-img">
                        <a href="blog-single.html"><img src="assets/images/blog/blog-img-1.jpg" alt="blog" class="rounded-3 img-fluid" /></a>
                     </figure>
                     <div class="py-4 px-md-4">
                        <div class="mb-5">
                           <h3 class="lh-base h4">
                              <a href="blog-single.html" class="text-reset">A fresh look and feel</a>
                           </h3>
                           <p class="mb-0">How we’ve changed our design to make it even easier and faster to use.</p>
                        </div>
                        <div class="d-flex align-items-center">
                           <div class="me-5">
                              <span class="fs-6">Written by</span>
                              <div class="d-flex align-items-center mt-2">
                                 <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar" class="avatar avatar-xs rounded-circle" />
                                 <div class="ms-2">
                                    <a href="#" class="text-reset fs-6">Jitu Chauhan</a>
                                 </div>
                              </div>
                           </div>
                           <div>
                              <span class="fs-6">Published on</span>
                              <div class="mt-2 text-dark"><span class="fs-6">7 Oct, 2023</span></div>
                           </div>
                        </div>
                     </div>
                  </article>
                  <article class="col-xl-6 col-lg-6 col-md-6 col-12">
                     <figure class="zoom-img">
                        <a href="blog-single.html"><img src="assets/images/blog/blog-img-5.jpg" alt="blog" class="rounded-3 img-fluid" /></a>
                     </figure>
                     <div class="py-4 px-md-4">
                        <div class="mb-5">
                           <h3 class="lh-base h4">
                              <a href="blog-single.html" class="text-reset">A deep introduction to Bootstrap Block Themes</a>
                           </h3>
                           <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, eligendi!</p>
                        </div>
                        <div class="d-flex align-items-center">
                           <div class="me-5">
                              <span class="fs-6">Written by</span>
                              <div class="d-flex align-items-center mt-2">
                                 <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar" class="avatar avatar-xs rounded-circle" />
                                 <div class="ms-2">
                                    <a href="#" class="text-reset fs-6">Anita Parmar</a>
                                 </div>
                              </div>
                           </div>
                           <div>
                              <span class="fs-6">Published on</span>
                              <div class="mt-2 text-dark"><span class="fs-6">5 Oct, 2023</span></div>
                           </div>
                        </div>
                     </div>
                  </article>
                  <article class="col-xl-6 col-lg-6 col-md-6 col-12">
                     <figure class="zoom-img">
                        <a href="blog-single.html"><img src="assets/images/blog/blog-img-4.jpg" alt="blog" class="rounded-3 img-fluid" /></a>
                     </figure>
                     <div class="py-4 px-md-4">
                        <div class="mb-5">
                           <h3 class="lh-base h4">
                              <a href="blog-single.html" class="text-reset">The power of doing nothing at all</a>
                           </h3>
                           <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis expedita minus totam.</p>
                        </div>
                        <div class="d-flex align-items-center">
                           <div class="me-5">
                              <span class="fs-6">Written by</span>
                              <div class="d-flex align-items-center mt-2">
                                 <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar" class="avatar avatar-xs rounded-circle" />
                                 <div class="ms-2">
                                    <a href="#" class="text-reset fs-6">Sandip Chauhan</a>
                                 </div>
                              </div>
                           </div>
                           <div>
                              <span class="fs-6">Published on</span>
                              <div class="mt-2 text-dark"><span class="fs-6">3 Oct, 2023</span></div>
                           </div>
                        </div>
                     </div>
                  </article>
                  <div class="col-lg-12">
                     <div class="mt-xl-7 mt-3">
                        <a class="btn btn-outline-primary" href="#!">
                           <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                           <span class="ms-2">Load More</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Blog thumbnail end-->
      </main>
@endsection
