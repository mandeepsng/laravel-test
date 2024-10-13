@extends('layout.mainlayout_admin')

@section('content')
   <main>
      <div class="pattern-square"></div>
      <!--Pageheader start-->
      <section class="py-5 py-lg-8">
         <div class="container">
            <div class="row">
               <div class="col-xl-8 offset-xl-2 col-md-12 col-12">
                  <div class="text-center">
                     <small class="text-uppercase ls-md fw-bold text-primary">Services</small>
                     <h1 class="mt-4">We provide client-centric services</h1>
                     <p class="mb-0 px-lg-9 lead">Maximize your website's capabilities and reach its full potential with our services.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Pageheader end-->
      <!--Website design start-->
      <section class="mb-xl-9 py-5">
         <div class="container">
            <div class="row align-items-lg-center">
               <div class="col-lg-5 col-md-6 order-2">
                  <div class="p-3 icon-xl icon-shape rounded bg-primary bg-opacity-10 mb-5 border border-primary-subtle">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-vector-pen text-primary" viewBox="0 0 16 16">
                        <path
                           fill-rule="evenodd"
                           d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z" />
                        <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z" />
                     </svg>
                  </div>
                  <div class="mb-5">
                     <h2 class="mb-2">Website Design</h2>

                     <p>
                        We design visually stunning and user- friendly websites that elevate your online presence. We provide client-centric ui/ux that are user-friendly and aesthetic at the same
                        time.
                     </p>
                  </div>
                  <div class="mb-5">
                     <a href="#!" class="icon-link icon-link-hover">
                        View Case Study
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                           <path
                              fill-rule="evenodd"
                              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="d-flex flex-wrap gap-2">
                     <span class="fs-6 badge bg-secondary-subtle border bg-secondary-subtle text-dark-emphasis rounded-pill py-2 px-3">Wireframes and Testing</span>
                     <span class="fs-6 badge bg-secondary-subtle border bg-secondary-subtle text-dark-emphasis rounded-pill py-2 px-3">User Flow</span>
                     <span class="fs-6 badge bg-secondary-subtle border bg-secondary-subtle text-dark-emphasis rounded-pill py-2 px-3">Design Systems</span>
                  </div>
               </div>
               <div class="col-lg-5 offset-lg-2 col-md-6 order-lg-2">
                  <figure class="mb-5 mb-md-0">
                     <img src="assets/images/service/service-img-1.jpg" alt="service" class="rounded-3 img-fluid" />
                  </figure>
               </div>
            </div>
         </div>
      </section>
      <!--Website design end-->
      <!--Web development start-->
      <section class="mb-xl-9 py-5">
         <div class="container">
            <div class="row align-items-lg-center">
               <div class="col-lg-5 col-md-6">
                  <figure class="mb-5 mb-md-0">
                     <img src="assets/images/service/service-img-2.jpg" alt="service" class="rounded-3 img-fluid" />
                  </figure>
               </div>
               <div class="col-lg-5 offset-lg-2 col-md-6 mb-4 mb-md-0">
                  <div class="p-3 icon-xl icon-shape rounded bg-success bg-opacity-10 mb-5 border border-success-subtle">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-braces-asterisk text-success" viewBox="0 0 16 16">
                        <path
                           fill-rule="evenodd"
                           d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                     </svg>
                  </div>
                  <div class="mb-5">
                     <h2 class="mb-2">Web Development</h2>

                     <p class="mb-0">We build reliable, scalable solutions that deliver your vision and exceed your expectations.</p>
                  </div>
                  <div class="mb-5">
                     <ul class="list-unstyled mb-0">
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

                  <a href="#!" class="icon-link icon-link-hover text-success">
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
      </section>
      <!--Web development end-->
      <!--Ecommerce start-->
      <section class="mb-xl-9 py-5">
         <div class="container">
            <div class="row align-items-lg-center">
               <div class="col-md-6 col-lg-5 order-2">
                  <div class="p-3 icon-xl icon-shape rounded bg-info bg-opacity-10 mb-5 border border-info-subtle">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart-fill text-info" viewBox="0 0 16 16">
                        <path
                           d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                     </svg>
                  </div>
                  <div class="mb-5">
                     <h2 class="mb-2">Ecommerce development</h2>
                     <p class="mb-0">
                        We are at the forefront of modern e-commerce development. Which mainly means adding your logo to the Shopify store template we’ve used for the past six years.
                     </p>
                  </div>

                  <div class="mb-5">
                     <a href="#!" class="icon-link icon-link-hover text-info">
                        View Case Study
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                           <path
                              fill-rule="evenodd"
                              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="row border rounded mx-1">
                     <div class="col-md-4 col-4 border-end">
                        <figure class="text-center py-3">
                           <img src="assets/images/brand-logo/brand-logo-11.svg" alt="logo" class="mw-100" />
                        </figure>
                     </div>
                     <div class="col-md-4 col-4 border-end">
                        <figure class="text-center py-3">
                           <img src="assets/images/brand-logo/brand-logo-10.svg" alt="logo" class="mw-100" />
                        </figure>
                     </div>
                     <div class="col-md-4 col-4">
                        <figure class="text-center py-3">
                           <img src="assets/images/brand-logo/brand-logo-4.svg" alt="logo" class="mw-100" />
                        </figure>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5 offset-lg-2 col-md-6 order-lg-2">
                  <figure class="mb-5 mb-md-0">
                     <img src="assets/images/service/service-img-3.jpg" alt="service" class="rounded-3 img-fluid" />
                  </figure>
               </div>
            </div>
         </div>
      </section>
      <!--Ecommerce end-->
      <!--Mobile development start-->
      <section class="mb-xl-9 pb-5">
         <div class="container">
            <div class="row align-items-lg-center">
               <div class="col-lg-5 col-md-6">
                  <figure class="mb-5 mb-md-0">
                     <img src="assets/images/service/service-img-4.jpg" alt="servuce" class="rounded-3 img-fluid" />
                  </figure>
               </div>
               <div class="col-lg-5 offset-lg-2 col-md-6 mb-4 mb-md-0">
                  <div class="p-3 icon-xl icon-shape rounded bg-warning bg-opacity-10 mb-5 border border-warning-subtle">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-phone text-warning" viewBox="0 0 16 16">
                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                     </svg>
                  </div>
                  <div class="mb-4">
                     <h2 class="mb-2">Mobile Development</h2>
                     <p class="mb-0">Mobile app development is the act or process by which a mobile app is developed for one or more mobile devices.</p>
                  </div>
                  <div class="border-bottom d-flex pb-3 mb-3">
                     <p class="mb-0">
                        <span class="text-dark">Flutter :</span>
                        Flutter is an open source framework by Google for building beautiful, natively compiled, multi-platform applications.
                     </p>
                  </div>
                  <div class="d-flex mb-4">
                     <p class="mb-0">
                        <span class="text-dark">React Native :</span>
                        React Native lets you create truly native apps and doesn't compromise your users' experiences.
                     </p>
                  </div>

                  <a href="#!" class="icon-link icon-link-hover text-warning">
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
      </section>
      <!--Mobile development end-->
      <!--Free estimate call start-->
      <section class="py-lg-9 my-lg-10">
         <div class="container bg-light rounded-3 d-flex align-items-center pb-6 pb-md-0">
            <div class="row align-items-center">
               <div class="col-lg-6 col-12">
                  <div class="position-relative p-lg-6 p-4">
                     <div class="mb-4">
                        <h2 class="mb-4">
                           Hire experienced
                           <br />
                           Jamstack developer
                        </h2>
                        <p class="mb-0 me-xl-7">Book a free consultation call with one of our experts and get help with your next moves. It's always good to talk to an expert. It's free!</p>
                     </div>

                     <div class="row">
                        <div class="col">
                           <img src="assets/images/client-logo/clients-logo-1.svg" alt="logo" />
                        </div>
                        <div class="col">
                           <img src="assets/images/client-logo/clients-logo-2.svg" alt="logo" />
                        </div>
                        <div class="col">
                           <img src="assets/images/client-logo/clients-logo-5.svg" alt="logo" />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-4 col-lg-5 col-12 position-lg-absolute start-50 ms-lg-6">
                  <div class="card shadow-sm">
                     <div class="card-body">
                        <form class="row needs-validation g-3" novalidate>
                           <div class="col-lg-12">
                              <div class="mb-3">
                                 <h2 class="h3">Schedule a free estimate call</h2>
                                 <p class="mb-0">Schedule a short 20-min discovery call and get a look inside the way we design, develop and scale websites.</p>
                              </div>
                           </div>
                           <div class="col-lg-6 col-12">
                              <label for="ServiceFirstnameInput" class="form-label">
                                 First Name
                                 <span class="text-danger">*</span>
                              </label>
                              <input type="text" class="form-control" id="ServiceFirstnameInput" required />
                              <div class="invalid-feedback">Please enter firstname.</div>
                           </div>
                           <div class="col-lg-6 col-12">
                              <label for="serviceLastnameInput" class="form-label">
                                 Last Name
                                 <span class="text-danger">*</span>
                              </label>
                              <input type="text" class="form-control" id="serviceLastnameInput" required />
                              <div class="invalid-feedback">Please enter lastname.</div>
                           </div>
                           <div class="col-12">
                              <label for="serviceEmailInput" class="form-label">
                                 Email
                                 <span class="text-danger">*</span>
                              </label>
                              <input type="email" class="form-control" id="serviceEmailInput" required />
                              <div class="invalid-feedback">Please enter email.</div>
                           </div>
                           <div class="col-12">
                              <label for="servieTextarea" class="form-label">Message</label>
                              <textarea class="form-control" id="servieTextarea" placeholder="Write to us" rows="5" required></textarea>
                              <div class="invalid-feedback">Please write message.</div>
                           </div>
                           <div class="d-grid">
                              <button class="btn btn-primary" type="submit">Let’s work together!</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Free estimate call end-->
   </main>
@endsection
