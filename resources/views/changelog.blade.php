@extends('layout.mainlayout_admin')

@section('content')
   <main>
      <!--Pageheader start-->
      <div class="pattern-square"></div>
      <section class="py-lg-8 py-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-12 col-12">
                  <h1 class="mb-3">Change Log</h1>
                  <p class="mb-0">Stay up to date with all of the latest additions and improvements we've made to Block UI.</p>
               </div>
            </div>
         </div>
      </section>
      <!--Pageheader end-->
      <!--Change log start-->
      <section class="py-7">
         <div class="container py-2">
            <div class="row">
               <div class="col-xl-3 col-md-3">
                  <div class="mb-4 mb-md-0">
                     <h5 class="mb-0 text-body">January 11, 2023</h5>
                  </div>
               </div>
               <div class="col-xl-6 col-md-9">
                  <div class="mb-5">
                     <h2 class="mb-3">Cover the title for product updates.</h2>
                     <p class="mb-0">A changelog is a file which contains a curated, chronologically ordered list of notable changes for each version of a project.</p>
                  </div>
                  <div class="mb-5">
                     <img src="assets/images/change-log/changelog.jpg" alt="changelog" class="w-100 rounded-3" />
                  </div>
                  <div class="mb-5">
                     <h5>🌟 Improvements</h5>
                     <ul class="list-unstyled mb-0">
                        <li class="mb-2 d-flex">
                           <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                 <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                              </svg>
                           </span>
                           <span class="ms-1">for changes in existing functionality tool.</span>
                        </li>
                        <li class="mb-2 d-flex">
                           <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                 <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                              </svg>
                           </span>
                           <span class="ms-1">
                              Lorem ipsum dolor sit amet,
                              <span class="text-primary">consectetur amet</span>
                              congue libero.
                           </span>
                        </li>
                        <li class="mb-2 d-flex">
                           <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                 <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                              </svg>
                           </span>
                           <span class="ms-1">In finibus risus a finibus maximus.</span>
                        </li>
                     </ul>
                  </div>
                  <div class="mb-5">
                     <h5>🐞 Fixed</h5>
                     <ul class="list-unstyled mb-0">
                        <li class="mb-2 d-flex">
                           <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                 <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                              </svg>
                           </span>
                           <span class="ms-1">for any bug fixes.</span>
                        </li>
                     </ul>
                  </div>
                  <div class="mb-5">
                     <h5>🪄 Added</h5>
                     <ul class="list-unstyled mb-0">
                        <li class="mb-2 d-flex">
                           <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                 <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                              </svg>
                           </span>
                           <span class="ms-1">Lorem ipsum dolor sit amet, consectetur amet congue libero.</span>
                        </li>
                        <li class="mb-2 d-flex">
                           <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                 <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                              </svg>
                           </span>
                           <span class="ms-1">In finibus risus a finibus maximus.</span>
                        </li>
                     </ul>
                  </div>

                  <h5>❌ Removed</h5>
                  <ul class="list-unstyled mb-0">
                     <li class="mb-2 d-flex">
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                              <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                           </svg>
                        </span>
                        <span class="ms-1">for now removed features.</span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!--Change log end-->
   </main>
@endsection
