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
                     <h1 class="mb-1 mb-lg-3">Plans & Pricing</h1>
                     <p class="mb-0">Pick Your Perfect Plan</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Pageheader end-->
      <!--Plans start-->
      <section class="mb-xl-9 my-4">
         <div class="container">
            <!-- Pricing Style 2 -->
            <div class="table-responsive-lg">
               <div class="row flex-nowrap pb-4 me-5 me-lg-0">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                     <!--card-->
                     <div class="card">
                        <div class="card-body">
                           <div class="mb-5">
                              <h3 class="mb-4 d-flex align-items-center">
                                 <span class="text-dark">$49.99</span>
                                 <span class="text-body-tertiary ms-2 fs-6 fw-normal">/ month</span>
                              </h3>
                           </div>
                           <div class="mb-6">
                              <h3 class="h4">Starter</h3>
                              <p class="mb-0">Ideal for developers actively developing before going to prod.</p>
                           </div>
                           <div class="d-grid">
                              <a href="#" class="btn btn-outline-primary">Free Trial for 14 Days</a>
                           </div>
                        </div>
                     </div>
                     <!--card-->
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                     <!--card-->
                     <div class="card bg-primary text-white-stable border-primary">
                        <div class="card-body">
                           <div class="mb-5">
                              <h3 class="mb-4 d-flex align-items-center">
                                 <span class="text-white-stable">$99.99</span>
                                 <span class="ms-2 fs-6 fw-normal text-white-stable">/ month</span>
                              </h3>
                           </div>
                           <div class="mb-6">
                              <div class="d-flex align-items-center mb-2">
                                 <h3 class="h4 mb-0 text-white-stable">Business</h3>
                                 <span class="ms-2 badge bg-warning-subtle text-warning-emphasis text-uppercase">most popular</span>
                              </div>
                              <p class="mb-0">Ideal for developer teams in production, seeking pay-per-use pricing.</p>
                           </div>
                           <div class="d-grid">
                              <a href="#" class="btn btn-white">Sign Up</a>
                           </div>
                        </div>
                     </div>
                     <!--card-->
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                     <!--card-->
                     <div class="card">
                        <div class="card-body">
                           <div class="mb-5">
                              <h3 class="mb-4 d-flex align-items-center">
                                 <span class="text-dark">$199.99</span>
                                 <span class="text-body-tertiary ms-2 fs-6 fw-normal">/ month</span>
                              </h3>
                           </div>
                           <div class="mb-6">
                              <h3 class="h4">Enterprise</h3>
                              <p>Ideal businesses with large workloads in production, seeking discounted rates and advanced support.</p>
                           </div>
                           <div class="d-grid">
                              <a href="#" class="btn btn-outline-warning">Contact Us</a>
                           </div>
                        </div>
                     </div>
                     <!--card-->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Plans end-->
      <!--Compare plan start-->
      <section class="mb-xl-9 py-4">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-12">
                  <div class="text-center mb-7">
                     <h2>Compare plan details</h2>
                     <p class="mb-0">Start building your site for free. Upgrade to unlock more features.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12 col-12">
                  <!-- Striped rows -->
                  <div class="table-responsive">
                     <table class="table table-striped text-nowrap table-lg table-borderless">
                        <thead>
                           <tr>
                              <th scope="col">
                                 <div class="fs-5 text-dark fw-semibold mb-3">Site plans</div>
                              </th>
                              <th scope="col">
                                 <div class="fs-5 text-dark fw-semibold">Starter</div>
                                 <span class="text-primary">Try for free 14 Days</span>
                              </th>
                              <th scope="col">
                                 <div class="fs-5 text-dark fw-semibold">Business</div>
                                 <span class="text-primary">Sign Up Now</span>
                              </th>
                              <th scope="col">
                                 <div class="fs-5 text-dark fw-semibold">Enterprise</div>
                                 <span class="text-primary">Contact us</span>
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>Bandwidth</td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">1 GB</span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-danger" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">10 GB</span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">100 GB</span>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <span class="me-2">Visitors</span>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-question-circle-fill text-gray" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                                    </svg>
                                 </span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">1,000</span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-danger" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">10,000</span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">100,000</span>
                              </td>
                           </tr>
                           <tr>
                              <td>Web pages</td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">5 pages</span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-danger" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">20 pages</span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">30 pages</span>
                              </td>
                           </tr>
                           <tr>
                              <td>Image optimization</td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-gary" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                           </tr>
                           <tr>
                              <td>Storage</td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">3 GB</span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">10 GB</span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">200 GB</span>
                              </td>
                           </tr>
                           <tr>
                              <td>Data / month</td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">5 pages</span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">20 pages</span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">Unlimited</span>
                              </td>
                           </tr>
                           <tr>
                              <td>Requests / month</td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">500</span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">20,000</span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                                 <span class="ms-2">5,00,000</span>
                              </td>
                           </tr>
                           <tr>
                              <td>Subdomain</td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                           </tr>

                           <tr>
                              <td>SSL certificate</td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-x-circle-fill text-gary" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                    </svg>
                                 </span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                           </tr>
                           <tr>
                              <td>Access to HTML video</td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-x-circle-fill text-gary" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                    </svg>
                                 </span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                           </tr>
                           <tr>
                              <td>Priority support</td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-x-circle-fill text-gary" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                    </svg>
                                 </span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                           </tr>
                           <tr>
                              <td>Analytics</td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-x-circle-fill text-gary" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                    </svg>
                                 </span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                              <td>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                       <path
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                 </span>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Compare plan end-->
      <!--Asked question start-->
      <section class="mb-xl-9 my-4">
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

