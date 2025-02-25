@extends('layout.mainlayout_admin')

@section('content')
   <main>
      <div class="pattern-square"></div>
      <!--Pageheader start-->
      <section class="py-5 py-lg-8">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                  <div class="text-center">
                     <small class="text-uppercase ls-md fw-bold text-primary">Services</small>
                     <h1 class="mt-4">We provide client-centric services</h1>
                     <p class="lead">Maximize your website's capabilities and reach its full potential with our services.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Pageheader end-->

      <!--Service start-->
      <section class="mb-xl-9 my-4">
         <div class="container">
            <div class="row g-7">
               <div class="col-sm-6 col-md-6">
                  <div class>
                     <div class="position-relative mb-7">
                        <img src="assets/images/service/service-img-wide-1.jpg" alt="wide" class="rounded-3 img-fluid" />
                        <div class="position-absolute top-md-100 start-md-0 top-100 start-50 translate-middle">
                           <div class="p-3 icon-xl icon-shape rounded bg-primary border border-2 border-white ms-md-10">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-vector-pen text-white-stable" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z" />
                                 <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z" />
                              </svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="px-lg-4">
                     <h2 class="mb-3 h3">Website Design</h2>
                     <p class="mb-5">
                        We design visually stunning and user- friendly websites that elevate your online presence. We provide client-centric ui/ux services that are user-friendly and aesthetic at
                        the same time. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     </p>
                     <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill p-2 px-3">Design Systems</span>
                        <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill p-2 px-3">Wireframes and Testing</span>
                        <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill p-2 px-3">User Flow</span>
                     </div>

                     <a href="#!" class="icon-link icon-link-hover">
                        View Case Study
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                           <path
                              fill-rule="evenodd"
                              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                     </a>
                  </div>
               </div>

               <div class="col-sm-6 col-md-6">
                  <div class>
                     <div class="position-relative mb-7">
                        <img src="assets/images/service/service-img-wide-2.jpg" alt="wide" class="rounded-3 img-fluid" />
                        <div class="position-absolute top-md-100 start-md-0 top-100 start-50 translate-middle">
                           <div class="p-3 icon-xl icon-shape rounded bg-success border border-2 border-white ms-md-10">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-braces-asterisk text-white-stable" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                              </svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="px-lg-4">
                     <h2 class="mb-3 h3">Web Development</h2>

                     <p class="mb-5">
                        We build reliable, scalable solutions that deliver your vision and exceed your expectations. Web development is the work involved in developing a website lorem ipsum simple
                        dummy content.
                     </p>

                     <div class="mb-5">
                        <ul class="list-unstyled mb-5">
                           <li class="d-flex mb-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                 <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                              </svg>
                              <span class="ms-2">Website Development</span>
                           </li>
                           <li class="d-flex mb-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                 <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                              </svg>
                              <span class="ms-2">Front/Back-end Development</span>
                           </li>
                           <li class="d-flex mb-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                 <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                              </svg>
                              <span class="ms-2">Full-stack App Development</span>
                           </li>
                           <li class="d-flex mb-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mt-1" viewBox="0 0 16 16">
                                 <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                              </svg>
                              <span class="ms-2">Quality Assurance</span>
                           </li>
                        </ul>
                     </div>

                     <a href="#!" class="icon-link icon-link-hover">
                        View Case Study
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                           <path
                              fill-rule="evenodd"
                              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                     </a>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6">
                  <div class>
                     <div class="position-relative mb-7">
                        <img src="assets/images/service/service-img-wide-3.jpg" alt="wide" class="rounded-3 img-fluid" />
                        <div class="position-absolute top-md-100 start-md-0 top-100 start-50 translate-middle">
                           <div class="p-3 icon-xl icon-shape rounded bg-info border border-2 border-white ms-md-10">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart-fill text-white-stable" viewBox="0 0 16 16">
                                 <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                              </svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="px-lg-4">
                     <h2 class="mb-3 h3">eCommerce Development</h2>
                     <p class="mb-5">
                        We are at the forefront of modern e-commerce development. Which mainly means adding your logo to the Shopify store template we’ve used for the past six years. The Shopify
                        stack for headless commerce.
                     </p>

                     <a href="#!" class="icon-link icon-link-hover mb-5">
                        View Case Study
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                           <path
                              fill-rule="evenodd"
                              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                     </a>

                     <div class="row border rounded mx-1">
                        <div class="col-md-4 col-4 border-end">
                           <figure class="text-center py-2">
                              <img src="assets/images/brand-logo/brand-logo-11.svg" alt="logo" class="mw-100" />
                           </figure>
                        </div>
                        <div class="col-md-4 col-4 border-end">
                           <figure class="text-center py-2">
                              <img src="assets/images/brand-logo/brand-logo-10.svg" alt="logo" class="mw-100" />
                           </figure>
                        </div>
                        <div class="col-md-4 col-4">
                           <figure class="text-center py-2">
                              <img src="assets/images/brand-logo/brand-logo-4.svg" alt="logo" class="mw-100" />
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6">
                  <div class="position-relative mb-7">
                     <img src="assets/images/service/service-img-wide-4.jpg" alt="wide" class="rounded-3 img-fluid" />
                     <div class="position-absolute top-md-100 start-md-0 top-100 start-50 translate-middle">
                        <div class="p-3 icon-xl icon-shape rounded bg-warning border border-2 border-white ms-md-10">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-phone text-white-stable" viewBox="0 0 16 16">
                              <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                              <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                           </svg>
                        </div>
                     </div>
                  </div>

                  <div class="mb-5">
                     <h2 class="mb-3 h3">Mobile Development</h2>
                     <p class="mb-5">
                        Mobile app development is the act or process by which a mobile app is developed for one or more mobile devices, which can include personal digital assistants, enterprise
                        digital assistants, or mobile phones.
                     </p>

                     <div class="border-bottom d-flex pb-3 mb-3">
                        <p class="mb-0">
                           <span class="h5">Flutter :</span>
                           Flutter is an open source framework by Google for building beautiful, natively compiled, multi-platform applications.
                        </p>
                     </div>
                     <div class="border-bottom d-flex pb-3 mb-5">
                        <p class="mb-0">
                           <span class="h5">React Native :</span>
                           React Native lets you create truly native apps and doesn't compromise your users' experiences.
                        </p>
                     </div>

                     <a href="#!" class="icon-link icon-link-hover">
                        View Case Study
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                           <path
                              fill-rule="evenodd"
                              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Service end-->

      <!--Project idea start-->
      <section class="py-lg-8 py-5 bg-gray-900">
         <div class="container">
            <div class="row">
               <div class="col-lg-10 offset-lg-1 col-md-12">
                  <div class="row align-items-center">
                     <div class="col-lg-8 col-md-7">
                        <div class="text-center text-md-start mb-6 mb-md-0">
                           <h2 class="text-white-stable">Have a Cool Project idea?</h2>
                           <p class="mb-0 text-dark-50">Plan to building a new website or web app for startup.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-5">
                        <div class="text-center">
                           <a href="#" class="btn btn-primary">Start by saying Hi..</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Project idea end-->
   </main>
@endsection

