@extends('layout.mainlayout_admin')

@section('content')
   <main>
      <!--Hero start-->
      <section class="bg-primary-dark pt-9 right-slant-shape" data-cue="fadeIn">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-5 col-12">
                  <div class="text-center text-lg-start mb-7 mb-lg-0" data-cues="slideInDown">
                     <div class="mb-4">
                        <h1 class="mb-5 display-5 text-white-stable">
                           Meet the next gen
                           <span class="text-pattern-line text-warning">banking service</span>
                        </h1>
                        <p class="mb-0 text-white-stable lead">Enim sed parturient sem enim nunc sit erat velit eget hac nulla nullam et id praesent nisi ornare risus risus consequat.</p>
                     </div>
                     <div data-cues="slideInDown">
                        <a href="#" class="btn btn-primary me-2">Get Started</a>
                        <a href="#" class="btn btn-outline-warning">Contact Sales</a>
                     </div>
                  </div>
               </div>
               <div class="offset-lg-1 col-lg-6 col-12">
                  <div class="position-relative z-1 pt-lg-9" data-cue="slideInRight">
                     <div class="position-relative">
                        <img src="assets/images/landings/finance/finance-hero-side-img.jpg" alt="video" class="img-fluid rounded-3" width="837" />
                        <a
                           href="https://www.youtube.com/watch?v=CivuutI6lXY"
                           class="play-btn glightbox position-absolute top-50 start-50 translate-middle icon-shape icon-xl rounded-circle text-primary">
                           <i class="bi bi-play-fill"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Hero start-->

      <!--Featured in start-->
      <div class="my-xl-9 my-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-10 offset-lg-1 col-12" data-cue="fadeIn">
                  <div class="text-center mb-4 mb-lg-7">
                     <small class="text-uppercase fw-semibold ls-md">As featured in</small>
                  </div>

                  <div class="swiper logoSwiper" data-cue="slideInDown">
                     <div class="swiper-wrapper pb-7">
                        <div class="swiper-slide">
                           <div data-cue="slideInDown">
                              <figure class="text-center">
                                 <img src="assets/images/client-logo/clients-logo-1.svg" alt="logo" />
                              </figure>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div data-cue="slideInDown">
                              <figure class="text-center">
                                 <img src="assets/images/client-logo/clients-logo-2.svg" alt="logo" />
                              </figure>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div data-cue="slideInDown">
                              <figure class="text-center">
                                 <img src="assets/images/client-logo/clients-logo-3.svg" alt="logo" />
                              </figure>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div data-cue="slideInDown">
                              <figure class="text-center">
                                 <img src="assets/images/client-logo/clients-logo-4.svg" alt="logo" />
                              </figure>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div data-cue="slideInDown">
                              <figure class="text-center">
                                 <img src="assets/images/client-logo/clients-logo-5.svg" alt="logo" />
                              </figure>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-pagination"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Featured in end-->

      <!--Your finance start-->
      <section class="my-xl-9 my-5">
         <div class="container" data-cue="fadeIn">
            <div class="row">
               <div class="col-xl-8 offset-xl-2">
                  <div class="text-center mb-xl-7 mb-5">
                     <h2 class="mb-3">
                        A one-stop shop for
                        <span class="text-primary">your finances.</span>
                     </h2>
                     <p class="mb-0">Designed to work better together erat velit eget hac nulla nullam et id praesent nisi ornare risus risus consequat nunc nisl pellentesque diam neque.</p>
                  </div>
               </div>
            </div>
            <div class="table-responsive-lg">
               <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                  <div class="col-lg-4 col-md-6" data-cue="zoomIn">
                     <div class="card border-0 card-primary">
                        <div class="card-body p-5">
                           <div class="position-relative d-inline-block mb-5">
                              <img src="assets/images/landings/finance/feature-img-1.jpg" alt="feature" class="avatar avatar-xl rounded-circle border-2 border border-white shadow-sm" />

                              <div class="position-absolute bottom-0 end-0">
                                 <div class="icon-md icon-shape rounded-circle bg-white me-n2 mb-n2 shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bank2 text-primary" viewBox="0 0 16 16">
                                       <path
                                          d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                                    </svg>
                                 </div>
                              </div>
                           </div>
                           <div class="mb-5">
                              <h4 class="card-title">Checking accounts</h4>
                              <p class="mb-0 card-text">Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed lacinia gsmod dui euismod id.</p>
                           </div>

                           <a href="#!" class="icon-link icon-link-hover card-link">
                              View All Accounts
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6" data-cue="zoomIn">
                     <div class="card border-0 card-primary">
                        <div class="card-body p-5">
                           <div class="position-relative d-inline-block mb-5">
                              <img src="assets/images/landings/finance/feature-img-2.jpg" alt="feature" class="avatar avatar-xl rounded-circle border-2 border border-white shadow-sm" />

                              <div class="position-absolute bottom-0 end-0">
                                 <div class="icon-md icon-shape rounded-circle bg-white me-n2 mb-n2 shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-credit-card-2-front-fill text-primary" viewBox="0 0 16 16">
                                       <path
                                          d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                    </svg>
                                 </div>
                              </div>
                           </div>
                           <div class="mb-5">
                              <h4 class="card-title">Credit cards</h4>
                              <p class="mb-0 card-text">Nullam sodales, libero ac dictum convallis, ipsum diam cursus stibulum lacinia ultricies eleifend.</p>
                           </div>

                           <a href="#!" class="icon-link icon-link-hover card-link">
                              Apply Credit Cards
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6" data-cue="zoomIn">
                     <div class="card border-0 card-primary">
                        <div class="card-body p-5">
                           <div class="position-relative d-inline-block mb-5">
                              <img src="assets/images/landings/finance/feature-img-3.jpg" alt="feature" class="avatar avatar-xl rounded-circle border-2 border border-white shadow-sm" />

                              <div class="position-absolute bottom-0 end-0">
                                 <div class="icon-md icon-shape rounded-circle bg-white me-n2 mb-n2 shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cash-stack text-primary" viewBox="0 0 16 16">
                                       <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                       <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
                                    </svg>
                                 </div>
                              </div>
                           </div>
                           <div class="mb-5">
                              <h4 class="card-title">Investment</h4>
                              <p class="mb-0 card-text">In a odio sit amet nisi tincidunt congue. Mauris cursus magna a vestibulum rutrum.</p>
                           </div>

                           <a href="#!" class="icon-link icon-link-hover card-link">
                              Start Investments
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-6" data-cue="fadeIn">
               <div class="col-xl-10 offset-xl-1">
                  <ul class="list-inline">
                     <li class="list-inline-item d-inline-flex align-items-center me-3 mb-2 mb-lg-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                           <path
                              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                        <span class="ms-2">24/7 account monitoring</span>
                     </li>
                     <li class="list-inline-item d-inline-flex align-items-center me-3 mb-2 mb-lg-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                           <path
                              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                        <span class="ms-2 me-3">Protection & peace of mind</span>
                     </li>
                     <li class="list-inline-item d-inline-flex align-items-center me-3 mb-2 mb-lg-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                           <path
                              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                        <span class="ms-2">Anytime, anywhere support</span>
                     </li>
                     <li class="list-inline-item d-inline-flex align-items-center me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                           <path
                              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                        <span class="ms-2">Serious security</span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!--Your finance end-->

      <!--5m member start-->
      <section class="py-xl-9 py-5 bg-primary-dark">
         <div class="container" data-cue="fadeIn">
            <div class="row">
               <div class="col-xl-8 offset-xl-2 col-12">
                  <div class="text-center mb-xl-7 mb-5">
                     <h2 class="text-white-stable mb-3">Why do over 5M members love?</h2>
                     <p class="mb-0 text-white-50">
                        Enim sed parturient sem enim nunc sit erat velit eget hac nulla nullam et id praesent nisi ornare risus risus consequat nunc nisl pellentesque diam neque.
                     </p>
                  </div>
               </div>
            </div>
            <div class="row mb-7 pb-4 g-5 text-center text-lg-start">
               <div class="col-md-4" data-cue="fadeIn">
                  <h4 class="text-white-stable">Flexible payments</h4>
                  <p class="text-white-50 mb-0">you are able to run your business smoothly; handle your daily expenses and secure your cash flow.</p>
               </div>
               <div class="col-md-4" data-cue="fadeIn">
                  <h4 class="text-white-stable">Smart payments</h4>
                  <p class="text-white-50 mb-0">Nullam sodales, libero ac dictum convallis, ipsum diam cursus stibulum lacinia ultricies eleifend..</p>
               </div>
               <div class="col-md-4" data-cue="fadeIn">
                  <h4 class="text-white-stable">Easy administration</h4>
                  <p class="text-white-50 mb-0">In a odio sit amet nisi tincidunt congue. Mauris cursus magna a vestibulum rutrum. Vivamus sit amet luctus leo.</p>
               </div>
            </div>
            <div class="row border-primary border-top g-5 g-lg-0 text-center text-lg-start" data-cue="fadeIn">
               <div class="col-lg-3 col-6 border-end-lg border-md-0 border-lg-primary" data-cue="fadeIn">
                  <div class="p-lg-5">
                     <h5 class="h1 text-white-stable mb-0">5M+</h5>
                     <span class="text-white-50">Members</span>
                  </div>
               </div>
               <div class="col-lg-3 col-6 border-end-lg border-md-0 border-lg-primary" data-cue="fadeIn">
                  <div class="p-lg-5">
                     <h5 class="h1 text-white-stable mb-0">95%</h5>
                     <span class="text-white-50">Customer satisfaction</span>
                  </div>
               </div>
               <div class="col-lg-3 col-6 border-end-lg border-md-0 border-lg-primary" data-cue="fadeIn">
                  <div class="p-lg-5">
                     <h5 class="h1 text-white-stable mb-0">73%</h5>
                     <span class="text-white-50">Over year growth</span>
                  </div>
               </div>
               <div class="col-lg-3 col-6" data-cue="fadeIn">
                  <div class="p-lg-5">
                     <h5 class="h1 text-white-stable mb-0">250B</h5>
                     <span class="text-white-50">Money managed</span>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--5m member end-->

      <!--Product designer start-->
      <section class="my-xl-9 my-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
                     <h2 class="mb-3">
                        Products designed for
                        <span class="text-primary">all sizes businesses.</span>
                     </h2>
                     <p class="mb-0">Enim sed parturient sem enim nunc sit erat velit eget hac nulla nullam et id praesent nisi ornare risus risus consequat nunc nisl pellentesque diam neque.</p>
                  </div>
               </div>
            </div>
            <div class="row align-items-center">
               <div class="col-xl-5 col-md-6 col-12">
                  <div class="nav flex-column nav-pills mb-5 mb-lg-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                     <a
                        href="#"
                        class="nav-link active d-flex text-start align-items-center align-items-lg-start p-xl-4 p-3"
                        id="v-pills-small-business-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#v-pills-small-business"
                        role="tab"
                        aria-controls="v-pills-small-business"
                        aria-selected="true">
                        <div class="d-flex">
                           <div class="icon-md icon-shape rounded-circle bg-white shadow-sm">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bank2 text-primary" viewBox="0 0 16 16">
                                 <path
                                    d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                              </svg>
                           </div>
                        </div>
                        <div class="ms-4">
                           <h4 class="mb-0">For small business</h4>
                           <p class="mb-0 mt-lg-3 d-none d-lg-block">Interdum et malesuad a fames ac ante ipsum primis in faucibus. Simple dummy content. Sed lacinia gsmod dui euismod id.</p>
                        </div>
                     </a>
                     <a
                        href="#"
                        class="nav-link d-flex text-start align-items-center align-items-lg-start p-xl-4 p-3"
                        id="v-pills-profile-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile"
                        role="tab"
                        aria-controls="v-pills-profile"
                        aria-selected="false">
                        <div class="d-flex">
                           <div class="icon-md icon-shape rounded-circle bg-white shadow-sm">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-credit-card-2-front-fill text-primary" viewBox="0 0 16 16">
                                 <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                              </svg>
                           </div>
                        </div>
                        <div class="ms-4">
                           <h4 class="mb-0">For startups</h4>
                           <p class="mb-0 mt-lg-3 d-none d-lg-block">Nullam sodales, libero ac dictum convallis, ipsum diam cursus stibulum lacinia ultricies eleifend. Simple dummy content.</p>
                        </div>
                     </a>
                     <a
                        href="#"
                        class="nav-link d-flex text-start p-xl-4 p-3 align-items-center align-items-lg-start"
                        id="v-pills-enterprises-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#v-pills-enterprises"
                        role="tab"
                        aria-controls="v-pills-enterprises"
                        aria-selected="false">
                        <div class="d-flex">
                           <div class="icon-md icon-shape rounded-circle bg-white shadow-sm">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cash-stack text-primary" viewBox="0 0 16 16">
                                 <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                 <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
                              </svg>
                           </div>
                        </div>
                        <div class="ms-4">
                           <h4 class="mb-0">For enterprises</h4>
                           <p class="mb-0 mt-lg-3 d-none d-lg-block">
                              In a odio sit amet nisi tincidunt congue. Mauris cursus magna a vestibulum rutrum. Vivamus sit amet luctus leo. Simple dummy content.
                           </p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-xl-6 offset-xl-1 col-md-6 col-12">
                  <div class="tab-content" id="v-pills-tabContent">
                     <div class="tab-pane fade show active" id="v-pills-small-business" role="tabpanel" aria-labelledby="v-pills-small-business-tab" tabindex="0">
                        <div class="position-relative scene" data-relative-input="true">
                           <figure><img src="assets/images/landings/finance/finance-tab-3.jpg" alt="finance" class="img-fluid rounded-3" data-cue="fadeIn" /></figure>

                           <div class="position-relative" data-depth="0.05">
                              <img src="assets/images/landings/finance/card.svg" alt="" class="position-absolute bottom-0 end-0 px-4" />
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <div class="position-relative scene" data-relative-input="true">
                           <figure><img src="assets/images/landings/finance/finance-tab-2.jpg" alt="finance" class="img-fluid rounded-3" data-cue="fadeIn" /></figure>

                           <div class="position-relative" data-depth="0.05">
                              <img src="assets/images/landings/finance/card.svg" alt="" class="position-absolute bottom-0 start-0 px-4" />
                           </div>
                        </div>
                     </div>

                     <div class="tab-pane fade" id="v-pills-enterprises" role="tabpanel" aria-labelledby="v-pills-enterprises-tab" tabindex="0">
                        <div class="position-relative scene" data-relative-input="true">
                           <figure><img src="assets/images/landings/finance/finance-tab-1.jpg" alt="finance" class="img-fluid rounded-3" /></figure>

                           <div class="position-relative" data-depth="0.05">
                              <img src="assets/images/landings/finance/card.svg" alt="" class="position-absolute bottom-0 start-50 translate-middle-x" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Product designer end-->

      <!--Get block card start-->
      <section class="my-xl-7 py-5">
         <div class="container" data-cue="fadeIn">
            <div class="row">
               <div class="col-lg-5 col-md-12" data-cue="fadeIn">
                  <div class="mb-xl-7 mb-5">
                     <h2 class="mb-3">
                        How to get a Block Card in a
                        <span class="text-primary">simple 3 steps</span>
                     </h2>
                     <p class="mb-0">Designed to work better together erat velit eget hac nulla nullam et id praesent nisi ornare risus risus consequat nunc nisl pellentesque diam neque.</p>
                  </div>
               </div>
            </div>
            <div class="table-responsive-xl">
               <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                  <div class="col-lg-4 col-md-6 col-12" data-cue="slideInLeft">
                     <div class="p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-5">
                           <div class="icon-xl icon-shape rounded-circle bg-primary border border-primary-subtle border-4 text-white-stable fw-semibold fs-3">1</div>
                           <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right text-body-tertiary" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                              </svg>
                           </span>
                        </div>

                        <h3 class="h4">Sign up for a free account</h3>
                        <p class="mb-0">Apply online on block website and fill the form by telling us your name, address, date of birth.</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12" data-cue="slideInLeft">
                     <div class="p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-5">
                           <div class="icon-xl icon-shape rounded-circle bg-primary border border-primary-subtle border-4 text-white-stable fw-semibold fs-3">2</div>
                           <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right text-body-tertiary" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                              </svg>
                           </span>
                        </div>

                        <h3 class="h4">Fill in your details</h3>
                        <p class="mb-0">Get started on block or log into the mobile app. Bank account to transfer money to your debit card.</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12" data-cue="slideInLeft">
                     <div class="p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-5">
                           <div class="icon-xl icon-shape rounded-circle bg-primary border border-primary-subtle border-4 text-white-stable fw-semibold fs-3">3</div>
                           <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                 <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                              </svg>
                           </span>
                        </div>

                        <h3 class="h4">Start converting!</h3>
                        <p class="mb-0">Set up direct deposit or connect your current bank account to transfer money to your debit card.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12" data-cue="zoomIn">
                  <div class="text-center my-5">
                     <a href="#!" class="btn btn-outline-primary">Open an Account</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Get block card end-->

      <!--Customer stories start-->
      <section class="py-xl-9 py-5 bg-gray-100">
         <div class="container" data-cue="fadeIn">
            <div class="row">
               <div class="col-lg-6 offset-lg-3">
                  <div class="text-center mb-xl-7 mb-5">
                     <h2 class="mb-3">Customer success stories</h2>
                     <p class="mb-0">Create convincing customer success stories to boost sales, build trust with prospects and increase customer loyalty.</p>
                  </div>
               </div>
            </div>
            <div class="row g-4">
               <div class="col-lg-6 col-md-12">
                  <!-- Testimonials with logo -->
                  <div class="card shadow-sm" data-cue="slideInLeft">
                     <div class="card-body">
                        <p class="mb-5 lead">
                           “Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tincidunt, lectus non finibus porta, ipsum lacus tempus quam, a iaculis metus ipsum sed elit.”
                        </p>
                        <div class="d-md-flex align-items-center justify-content-between">
                           <div class="d-flex align-items-center mb-3 mb-lg-0">
                              <div>
                                 <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar" class="avatar avatar-lg rounded-circle" />
                              </div>
                              <div class="ms-3">
                                 <h6 class="mb-0 h5">Jitu Chauhan</h6>
                                 <span class="small text-body-tertiary">Front End Developers @codescandy</span>
                              </div>
                           </div>
                           <div class="d-none d-md-block text-inverse">
                              <img src="assets/images/client-logo/logoipsum-1.svg" alt="logo" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <!-- Testimonials with logo -->
                  <div class="card shadow-sm" data-cue="slideInRight">
                     <div class="card-body">
                        <p class="mb-5 lead">
                           "Cum molestias sed quam eos repudiandae repellat! Sunt ex atque tempore eligendi magni vel obcaecati facere. Cupiditate repellat deleniti eos eum atque possimus ducimus
                           quis."
                        </p>
                        <div class="d-md-flex align-items-center justify-content-between">
                           <div class="d-flex align-items-center mb-3 mb-lg-0">
                              <div>
                                 <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar" class="avatar avatar-lg rounded-circle" />
                              </div>
                              <div class="ms-3">
                                 <h6 class="mb-0 h5">Sandeep Chauhan</h6>
                                 <span class="small text-body-tertiary">Front End Developers @codescandy</span>
                              </div>
                           </div>
                           <div class="d-none d-md-block text-inverse">
                              <img src="assets/images/client-logo/logoipsum-2.svg" alt="logo" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Customer stories end-->

      <!--Call to action start-->
      <section>
         <div style="background-image: url(assets/images/pattern/cta-pattern.png); background-position: center; background-repeat: no-repeat; background-size: cover" class="py-7 bg-primary-dark">
            <div class="container my-lg-7" data-cue="zoomIn">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2">
                     <div class="text-center mb-5">
                        <h2 class="text-white-stable mb-3">Experience the next-gen banking</h2>
                        <p class="mb-0 text-white-50">
                           Enim sed parturient sem enim nunc sit erat velit eget hac nulla nullam et id praesent nisi ornare risus risus consequat nunc nisl pellentesque diam neque.
                        </p>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="text-center">
                        <a href="#!" class="btn btn-primary">Open an account today</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Call to action end-->
   </main>
@endsection  
