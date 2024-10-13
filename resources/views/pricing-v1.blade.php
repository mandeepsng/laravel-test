@extends('layout.mainlayout_admin')

@section('content')
   <main>
      <div class="pattern-square"></div>
      <!--Pageheader start-->
      <section class="py-5 py-lg-8">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                  <div class="text-center">
                     <h1 class="mb-1 mb-lg-3">Get Started Today</h1>
                     <p class="mb-0">Pick Your Perfect Plan</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Pageheader end-->
      <!--Pricing start-->
      <section class="pt-4 mt-lg-n8">
         <div class="container price-wrapper">
            <div class="row">
               <div class="col-12 z-1">
                  <div class="mb-5">
                     <div class="price-switcher-wrapper switcher">
                        <p class="mb-0 pe-3">Monthly</p>
                        <div class="price-switchers">
                           <div class="price-switcher price-switcher-active"></div>
                           <div class="price-switcher"></div>
                           <div class="switcher-button bg-primary"></div>
                        </div>
                        <p class="mb-0 ps-3">Yearly</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="table-responsive-xl">
               <div class="row flex-nowrap pb-4 me-5 me-lg-0">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                     <!--card-->
                     <div class="card bg-dark border-0">
                        <div class="card-body text-white">
                           <span class="badge text-bg-warning text-uppercase mb-6 d-block py-2">free</span>

                           <h1 class="text-white mb-4 h2">30 Days Trial</h1>
                           <div class="mb-6">
                              <h2 class="h3 text-white">Free</h2>
                              <p>For new web developers ready to create their first site.</p>
                              <p class="mb-0 small">* No credit card required.</p>
                           </div>

                           <ul class="list-unstyled mb-0">
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-body" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Browse Website with ads</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-body" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Build static sites</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-body" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">1 space</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-body" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">10 MB storage</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-body" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">75 MB data / month</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-body" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">500 requests / month</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-body" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Subdomain</span>
                              </li>
                              <li>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-body" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">SSL certificate</span>
                              </li>
                           </ul>
                           <div class="d-grid mt-6">
                              <a href="#" class="btn btn-primary">Get started now free trial</a>
                           </div>
                        </div>
                     </div>
                     <!--card-->
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                     <!--card-->
                     <div class="card pricing">
                        <div class="card-body">
                           <h2 class="mb-4 d-flex align-items-center">
                              <div class="price-text">
                                 <div class="price price-show">
                                    <span>$</span>
                                    <span>5.99</span>
                                    <span class="price-duration fs-6 text-body mt-auto mb-2">/month</span>
                                 </div>
                                 <div class="price price-hide price-hidden">
                                    <span>$</span>
                                    <span>19.99</span>
                                    <span class="price-duration fs-6 text-body mt-auto mb-2">/year</span>
                                 </div>
                              </div>
                           </h2>
                           <div class="mb-6">
                              <h3>Pro</h3>
                              <p class="mb-0">For those running multiple spaces with more traffic.</p>
                           </div>

                           <ul class="list-unstyled mb-0">
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Browse Website with ads</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Build static sites</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">
                                    <span class="fw-bold text-dark">10</span>
                                    space
                                 </span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">
                                    <span class="text-dark fw-bold">3 GB</span>
                                    storage
                                 </span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">
                                    <span class="text-dark fw-bold">15 GB</span>
                                    data / month
                                 </span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">
                                    <span class="fw-bold text-dark">200 000</span>
                                    requests / month
                                 </span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Subdomain</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">SSL certificate</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Access to HTML video</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Priority support</span>
                              </li>

                              <li>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Analytics</span>
                              </li>
                           </ul>
                           <div class="d-grid mt-6">
                              <a href="#" class="btn btn-primary">$5.99 /month</a>
                           </div>
                        </div>
                     </div>
                     <!--card-->
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                     <!--card-->
                     <div class="card pricing">
                        <div class="card-body">
                           <h2 class="mb-4 d-flex align-items-center">
                              <div class="price-text">
                                 <div class="price price-show">
                                    <span>$</span>
                                    <span>15.99</span>
                                    <span class="price-duration fs-6 text-body mt-auto mb-2">/month</span>
                                 </div>
                                 <div class="price price-hide price-hidden">
                                    <span>$</span>
                                    <span>39.99</span>
                                    <span class="price-duration fs-6 text-body mt-auto mb-2">/year</span>
                                 </div>
                              </div>
                           </h2>
                           <div class="mb-6">
                              <h3>Premium</h3>
                              <p class="mb-0">Build more sites and grow your online presence.</p>
                           </div>

                           <ul class="list-unstyled mb-0">
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Browse Website with ads</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Build static sites</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">
                                    <span class="text-dark fw-bold">20</span>
                                    spaces
                                 </span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">
                                    <span class="text-dark fw-bold">10 GB</span>
                                    storage
                                 </span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">
                                    <span class="text-dark fw-bold">200 GB</span>
                                    data / month
                                 </span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">
                                    <span class="fw-bold text-dark">500 000</span>
                                    requests / month
                                 </span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Subdomain</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">SSL certificate</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Access to HTML video</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Priority support</span>
                              </li>

                              <li>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Analytics</span>
                              </li>
                           </ul>
                           <div class="d-grid mt-6">
                              <a href="#" class="btn btn-primary">$15.99 /month</a>
                           </div>
                        </div>
                     </div>
                     <!--card-->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Pricing end-->
      <!--Trusted start-->
      <section class="my-xl-9 my-4">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                  <div class="text-center mb-7">
                     <h2>Trusted by 30,000+ businesses.</h2>
                     <p class="mb-0">Thousands of startups and organizations use Block to improve the productivity of their sales team and create more opportunities.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-10 offset-lg-1 col-12">
                  <div class="swiper logoSwiper">
                     <div class="swiper-wrapper mb-7">
                        <div class="swiper-slide">
                           <figure class="text-center mb-4 mb-lg-0">
                              <img src="assets/images/client-logo/clients-logo-1.svg" alt="logo" />
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="text-center mb-4 mb-lg-0">
                              <img src="assets/images/client-logo/clients-logo-2.svg" alt="logo" />
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="text-center mb-4 mb-lg-0">
                              <img src="assets/images/client-logo/clients-logo-3.svg" alt="logo" />
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="text-center mb-4 mb-lg-0">
                              <img src="assets/images/client-logo/clients-logo-4.svg" alt="logo" />
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="text-center mb-4 mb-lg-0">
                              <img src="assets/images/client-logo/clients-logo-5.svg" alt="logo" />
                           </figure>
                        </div>
                     </div>
                     <div class="swiper-pagination"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Trusted end-->
      <!--Asked question start-->
      <section class="mb-xl-9 mb-4">
         <div class="container">
            <div class="row">
               <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                  <div class="text-center mb-7">
                     <h2>Frequently asked questions</h2>
                     <p class="mb-0">
                        Can’t find any answer for your question?
                        <br />
                        Ask our
                        <a href="#" class="text-primary">customer support</a>
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                  <div class="accordion" id="accordionExample">
                     <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                           <a
                              href="#"
                              class="text-reset d-flex justify-content-between align-items-center"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseOne"
                              aria-expanded="false"
                              aria-controls="collapseOne">
                              Can I trial block before paying?
                              <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                           </a>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae harum adipisci possimus et. Iusto pariatur iste nam incidunt ratione modi.</div>
                        </div>
                     </div>

                     <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                           <a
                              href="#"
                              class="text-reset d-flex justify-content-between align-items-center"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseTwo"
                              aria-expanded="true"
                              aria-controls="collapseTwo">
                              How are additional plan billed?
                              <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                           </a>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                           <div class="mt-3">
                              Sed urna felis, dapibus quis leo nec, luctus auctor augue. Nam gravida placerat sem vitae rutrum. Integer accumsan, enim et facilisis eleifend, ante ligula ornare
                              nulla, sed pharetra tortor diam eget magna.
                           </div>
                        </div>
                     </div>
                     <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                           <a
                              href="#"
                              class="text-reset d-flex justify-content-between align-items-center"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseThree"
                              aria-expanded="false"
                              aria-controls="collapseThree">
                              When should I change my plan?
                              <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                           </a>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="mt-3">
                              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore tenetur cum doloremque iusto molestiae. Minus beatae quam cumque modi quidem asperiores aliquam
                              pariatur in iste.
                           </div>
                        </div>
                     </div>
                     <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                           <a
                              href="#"
                              class="text-reset d-flex justify-content-between align-items-center"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseFour"
                              aria-expanded="false"
                              aria-controls="collapseFour">
                              What payment methods do you offer?
                              <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                           </a>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="mt-3">
                              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore tenetur cum doloremque iusto molestiae. Minus beatae quam cumque modi quidem asperiores aliquam
                              pariatur in iste.
                           </div>
                        </div>
                     </div>
                     <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                           <a
                              href="#"
                              class="text-reset d-flex justify-content-between align-items-center"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseFive"
                              aria-expanded="false"
                              aria-controls="collapseFive">
                              What is your refund policy?
                              <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                           </a>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="mt-3">
                              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore tenetur cum doloremque iusto molestiae. Minus beatae quam cumque modi quidem asperiores aliquam
                              pariatur in iste.
                           </div>
                        </div>
                     </div>
                     <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                           <a
                              href="#"
                              class="text-reset d-flex justify-content-between align-items-center"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseSix"
                              aria-expanded="false"
                              aria-controls="collapseSix">
                              How are paid plans billed when moving other plan?
                              <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                           </a>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="mt-3">
                              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore tenetur cum doloremque iusto molestiae. Minus beatae quam cumque modi quidem asperiores aliquam
                              pariatur in iste.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Asked question end-->
   </main>
@endsection


