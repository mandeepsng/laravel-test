@extends('layout.mainlayout_admin')

@section('content')
   <main>
      <!--Hero start-->
      <section class="position-relative py-10">
         <video class="w-100" autoplay muted loop style="object-fit: cover" playsinline>
            <source src="assets/images/landings/it-company/video.mp4" type="video/mp4" />
         </video>
         <div class="container position-relative py-lg-10" data-cue="fadeIn">
            <div class="row py-lg-10 justify-content-center text-center">
               <div class="col-lg-9 col-12">
                  <div class="d-flex flex-column gap-6">
                     <div class="d-flex flex-column gap-4">
                        <h1 class="text-white-stable display-4 mb-0">Empowering Your Business Through Cutting-Edge IT Solutions</h1>
                        <p class="mb-0 text-white-50 lead px-lg-10">
                           Innovative IT solutions, meticulously tailored for your success – where technology meets excellence for seamless business transformation.
                        </p>
                     </div>
                     <div class="d-md-flex d-grid align-items-center justify-content-md-center gap-4">
                        <a href="#!" class="btn btn-primary rounded-pill">Get Free Estimation</a>
                        <a href="#!" class="link-white icon-link icon-link-hover card-grid-link d-flex justify-content-center">
                           Recent Projects

                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                              <path
                                 fill-rule="evenodd"
                                 d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Hero end-->

      <!--Service we offer start-->
      <section class="py-xl-9 py-5" data-cue="fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-12">
                  <div class="text-center mb-xl-9 mb-5">
                     <small class="text-uppercase ls-md fw-semibold text-primary">Service We Offer</small>
                     <h2 class="mb-0 mt-3 px-xxl-8">Comprehensive Suite of Cutting-Edge IT Services.</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="card-grid" data-cue="zoomIn">
                     <div class="card-grid-inner">
                        <h3 class="card-grid-heading">Digital product engineering</h3>
                        <div class="card-grid-text">
                           <p class="mb-0">Driving Digital Innovation: Unleashing the Power of Product Engineering for Exceptional User Experiences and Technological Excellence.</p>
                           <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                              Learn More
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg>
                           </a>
                        </div>
                        <div class="d-block d-lg-none">
                           <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                              Learn More
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg>
                           </a>
                        </div>
                     </div>
                     <div class="card-grid-image">
                        <img src="assets/images/landings/it-company/service-1.jpg" alt="service" class="rounded-3 img-fluid" />
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card-grid" data-cue="zoomIn">
                     <div class="card-grid-inner">
                        <h3 class="card-grid-heading">Crafting SaaS development</h3>
                        <div class="card-grid-text">
                           <p class="mb-0">Empowering Businesses with Custom SaaS Solutions: Scalable, Secure, and Seamlessly Aligned with Your Unique Needs.</p>
                           <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                              Learn More
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg>
                           </a>
                        </div>
                        <div class="d-block d-lg-none">
                           <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                              Learn More
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg>
                           </a>
                        </div>
                     </div>
                     <div class="card-grid-image">
                        <img src="assets/images/landings/it-company/service-2.jpg" alt="service" class="rounded-3 img-fluid" />
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card-grid" data-cue="zoomIn">
                     <div class="card-grid-inner">
                        <h3 class="card-grid-heading">AI app development</h3>
                        <div class="card-grid-text">
                           <p class="mb-0">Pioneering the Future: AI App Development that Transforms Ideas into Intelligent Solutions for a Smarter Tomorrow.</p>
                           <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                              Learn More
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg>
                           </a>
                        </div>
                        <div class="d-block d-lg-none">
                           <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                              Learn More
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg>
                           </a>
                        </div>
                     </div>
                     <div class="card-grid-image">
                        <img src="assets/images/landings/it-company/service-3.jpg" alt="service" class="rounded-3 img-fluid" />
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card-grid" data-cue="zoomIn">
                     <div class="card-grid-inner">
                        <h3 class="card-grid-heading">E-commerce development</h3>
                        <div class="card-grid-text">
                           <p class="mb-0">Crafting Seamless E-Commerce Experiences: From Concept to Click, We Transform Ideas into Profitable Online Ventures.</p>
                           <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                              Learn More
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg>
                           </a>
                        </div>
                        <div class="d-block d-lg-none">
                           <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                              Learn More
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg>
                           </a>
                        </div>
                     </div>
                     <div class="card-grid-image">
                        <img src="assets/images/landings/it-company/service-4.jpg" alt="service" class="rounded-3 img-fluid" />
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card-grid" data-cue="zoomIn">
                     <div class="card-grid-inner">
                        <h3 class="card-grid-heading">Mobile app development</h3>
                        <div class="card-grid-text">
                           <p class="mb-0">Turning Ideas into Mobile Excellence: Innovative App Development Solutions Tailored for Your Unique Vision and User Experience.</p>
                           <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                              Learn More
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg>
                           </a>
                        </div>
                        <div class="d-block d-lg-none">
                           <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                              Learn More
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg>
                           </a>
                        </div>
                     </div>
                     <div class="card-grid-image">
                        <img src="assets/images/landings/it-company/service-5.jpg" alt="service" class="rounded-3 img-fluid" />
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card-grid" data-cue="zoomIn">
                     <div class="card-grid-inner">
                        <h3 class="card-grid-heading">Streamline DevOps as a service</h3>
                        <div class="card-grid-text">
                           <p class="mb-0">
                              Our DevOps-as-a-Service is designed to streamline your processes, from code commit to deployment, enabling you to achieve agility, reliability, and efficiency in your
                              software development life cycle.
                           </p>
                           <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                              Learn More
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg>
                           </a>
                        </div>
                        <div class="d-block d-lg-none">
                           <a href="#!" class="icon-link icon-link-hover card-grid-link mt-4">
                              Read Case Study
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg>
                           </a>
                        </div>
                     </div>
                     <div class="card-grid-image">
                        <img src="assets/images/landings/it-company/service-6.jpg" alt="service" class="rounded-3 img-fluid" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Service we offer end-->

      <!--Company overview start-->
      <section class="py-xl-9 py-5" data-cue="fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="text-center mb-xl-7 mb-5">
                     <small class="text-uppercase ls-md fw-semibold text-primary">Company Overview</small>
                     <h2 class="mb-0 mt-3">Discover Our Story: Unveiling the Journey</h2>
                  </div>
               </div>
            </div>
            <div class="row" data-cue="fadeIn">
               <div class="col-12">
                  <div class="tabs-to-dropdown">
                     <div class="nav-wrapper mx-md-10 mb-lg-8 mb-5">
                        <ul class="nav nav-fill d-none d-lg-flex nav-line-bottom nav-pills" id="pills-tab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="pills-company-tab" data-bs-toggle="pill" href="#pills-company" role="tab" aria-controls="pills-company" aria-selected="true">
                                 Who we are
                              </a>
                           </li>
                           <li class="nav-item" role="presentation">
                              <a
                                 class="nav-link"
                                 id="pills-commitments-tab"
                                 data-bs-toggle="pill"
                                 href="#pills-commitments"
                                 type="button"
                                 role="tab"
                                 aria-controls="pills-commitments"
                                 aria-selected="false">
                                 Our Commitments
                              </a>
                           </li>
                           <li class="nav-item" role="presentation">
                              <a class="nav-link" id="pills-team-tab" data-bs-toggle="pill" href="#pills-team" type="button" role="tab" aria-controls="pills-team" aria-selected="false">Our Team</a>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content" id="pills-tabContentOne">
                        <div class="tab-pane fade show active" id="pills-company" role="tabpanel" aria-labelledby="pills-company-tab" tabindex="0">
                           <div class="row align-items-center gy-5">
                              <div class="col-lg-5" data-cue="zoomIn">
                                 <div class="d-flex flex-column gap-4">
                                    <div class="d-flex flex-column gap-2">
                                       <h2>Forward-thinking IT company through innovation.</h2>
                                       <p class="mb-0">
                                          At [Your Company Name], we are more than just a technology solutions provider – we are architects of innovation, builders of digital experiences, and
                                          partners in your journey towards success.
                                       </p>
                                    </div>
                                    <div>
                                       <a href="#!" class="btn btn-primary rounded-pill">Our Journey</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-7" data-cue="zoomIn">
                                 <div class="position-relative">
                                    <img src="assets/images/landings/it-company/it-company-about-img.jpg" alt="about" class="rounded-3 img-fluid" />

                                    <a
                                       href="https://www.youtube.com/watch?v=CivuutI6lXY"
                                       class="play-btn glightbox position-absolute top-50 start-50 translate-middle icon-shape icon-xl rounded-circle text-primary">
                                       <i class="bi bi-play-fill"></i>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-commitments" role="tabpanel" aria-labelledby="pills-commitments-tab" tabindex="0">
                           <div class="row g-4" data-cue="zoomIn">
                              <div class="col-lg-4 col-md-6 col-12">
                                 <div class="d-flex flex-column gap-4 text-center text-lg-start mx-4 mx-lg-auto">
                                    <div>
                                       <span class="bg-primary bg-opacity-10 rounded icon-shape icon-xl">
                                          <img src="assets/images/landings/it-company/innovation.svg" alt="innovation" />
                                       </span>
                                    </div>
                                    <div>
                                       <h3>Innovation</h3>
                                       <p class="mb-0">We thrive on creativity and ingenuity, constantly pushing the boundaries of what's possible in the digital realm.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-12">
                                 <div class="d-flex flex-column gap-4 text-center text-lg-start mx-4 mx-lg-auto">
                                    <div>
                                       <span class="bg-primary bg-opacity-10 rounded icon-shape icon-xl">
                                          <img src="assets/images/landings/it-company/integrity.svg" alt="integrity" />
                                       </span>
                                    </div>
                                    <div>
                                       <h3>Integrity</h3>
                                       <p class="mb-0">Trust is the foundation of our relationships. We operate with transparency, honesty, and a commitment to ethical business practices.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-12">
                                 <div class="d-flex flex-column gap-4 text-center text-lg-start mx-4 mx-lg-auto">
                                    <div>
                                       <span class="bg-primary bg-opacity-10 rounded icon-shape icon-xl">
                                          <img src="assets/images/landings/it-company/hands-clapping.svg" alt="clapping" />
                                       </span>
                                    </div>
                                    <div>
                                       <h3>Client-Centric</h3>
                                       <p class="mb-0">Your success is our success. We prioritize understanding your unique needs and delivering solutions that exceed your expectations.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-team" role="tabpanel" aria-labelledby="pills-team-tab" tabindex="0">
                           <div class="row align-items-center gy-5">
                              <div class="col-lg-7" data-cue="zoomIn">
                                 <div class="d-flex gap-lg-4 gap-2 justify-content-center">
                                    <div class="mt-5">
                                       <img src="assets/images/landings/it-company/team-long-img-1.jpg" alt="team" class="img-fluid rounded-3" />
                                    </div>
                                    <div>
                                       <img src="assets/images/landings/it-company/team-long-img-2.jpg" alt="team" class="img-fluid rounded-3" />
                                    </div>
                                    <div class="mt-5">
                                       <img src="assets/images/landings/it-company/team-long-img-3.jpg" alt="team" class="img-fluid rounded-3" />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-5 pe-lg-6" data-cue="zoomIn">
                                 <div class="d-flex flex-column gap-4">
                                    <div class="d-flex flex-column gap-2">
                                       <h3 class="mb-0">Meet the Team: Driving Innovation with Passion and Expertise</h3>
                                       <p class="mb-0">
                                          At [Your Company Name], our success is driven by the talented individuals who make up our dedicated team. Get to know the faces behind the innovation, the
                                          passion behind the projects, and the expertise that propels us forward.
                                       </p>
                                    </div>
                                    <div>
                                       <a href="#" class="btn btn-primary rounded-pill">Explore Careers</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Company overview end-->

      <!--Industry we serve start-->
      <section class="py-xl-9 py-5 bg-light" data-cue="fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 offset-lg-2 col-12">
                  <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
                     <small class="text-uppercase ls-md fw-semibold text-primary">Industry We Serve</small>
                     <h2 class="my-3">Our industry expertise and solutions</h2>
                     <p class="mb-0 text-body">
                        At [Your Company Name], we specialize in delivering innovative IT solutions tailored for a diverse range of industries. Our expertise extends across:
                     </p>
                  </div>
               </div>
            </div>
            <div class="row g-4">
               <div class="col-lg-2 col-md-4 col-6">
                  <a href="#!" class="card-hover bg-white card card-lift text-center p-4" data-cue="zoomIn">
                     <span class="border rounded-circle icon-shape icon-xxl mb-4">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              opacity="0.2"
                              d="M27 14.1338V20.7863C27.0006 21.0307 26.9116 21.2668 26.75 21.45C25.3375 23.0238 21.8875 26 16 26C10.1125 26 6.665 23.0238 5.25 21.45C5.08837 21.2668 4.99944 21.0307 5 20.7863V14.1338L16 20L27 14.1338Z" />
                           <path
                              d="M31.4697 11.1176L16.4697 3.11758C16.325 3.04054 16.1636 3.00024 15.9997 3.00024C15.8358 3.00024 15.6744 3.04054 15.5297 3.11758L0.529688 11.1176C0.369693 11.2028 0.235888 11.33 0.142587 11.4854C0.0492867 11.6409 0 11.8188 0 12.0001C0 12.1814 0.0492867 12.3593 0.142587 12.5147C0.235888 12.6702 0.369693 12.7973 0.529688 12.8826L3.99969 14.7338V20.7863C3.99865 21.2775 4.17942 21.7517 4.50719 22.1176C6.14469 23.9413 9.81344 27.0001 15.9997 27.0001C18.0509 27.017 20.0867 26.6455 21.9997 25.9051V30.0001C21.9997 30.2653 22.105 30.5196 22.2926 30.7072C22.4801 30.8947 22.7345 31.0001 22.9997 31.0001C23.2649 31.0001 23.5193 30.8947 23.7068 30.7072C23.8943 30.5196 23.9997 30.2653 23.9997 30.0001V24.9388C25.3037 24.1861 26.4821 23.2342 27.4922 22.1176C27.82 21.7517 28.0007 21.2775 27.9997 20.7863V14.7338L31.4697 12.8826C31.6297 12.7973 31.7635 12.6702 31.8568 12.5147C31.9501 12.3593 31.9994 12.1814 31.9994 12.0001C31.9994 11.8188 31.9501 11.6409 31.8568 11.4854C31.7635 11.33 31.6297 11.2028 31.4697 11.1176ZM15.9997 25.0001C10.5909 25.0001 7.40969 22.3576 5.99969 20.7863V15.8001L15.5297 20.8826C15.6744 20.9596 15.8358 20.9999 15.9997 20.9999C16.1636 20.9999 16.325 20.9596 16.4697 20.8826L21.9997 17.9338V23.7263C20.4247 24.4613 18.4397 25.0001 15.9997 25.0001ZM25.9997 20.7813C25.4002 21.4465 24.7296 22.0438 23.9997 22.5626V16.8663L25.9997 15.8001V20.7813ZM23.4997 14.8676L23.4722 14.8513L16.4722 11.1176C16.2386 10.9983 15.9676 10.9755 15.7174 11.0542C15.4672 11.1328 15.258 11.3066 15.1347 11.5381C15.0114 11.7695 14.984 12.0402 15.0583 12.2917C15.1327 12.5431 15.3029 12.7554 15.5322 12.8826L21.3747 16.0001L15.9997 18.8663L3.12469 12.0001L15.9997 5.13383L28.8747 12.0001L23.4997 14.8676Z" />
                        </svg>
                     </span>
                     <h4 class="mb-0 card-text fs-5">Education</h4>
                  </a>
               </div>
               <div class="col-lg-2 col-md-4 col-6">
                  <a href="#!" class="card-hover bg-white card card-lift text-center p-4" data-cue="zoomIn">
                     <span class="border rounded-circle icon-shape icon-xxl mb-4">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              opacity="0.2"
                              d="M28.0009 9L24.4359 20.5888C24.3099 20.9976 24.0562 21.3553 23.712 21.6093C23.3678 21.8633 22.9512 22.0002 22.5234 22H10.5096C10.0749 22.0002 9.65204 21.8588 9.30493 21.5971C8.95782 21.3355 8.70539 20.9679 8.58586 20.55L5.28711 9H28.0009Z"
                              fill="" />
                           <path
                              d="M12 27C12 27.3956 11.8827 27.7822 11.6629 28.1111C11.4432 28.44 11.1308 28.6964 10.7654 28.8478C10.3999 28.9991 9.99778 29.0387 9.60982 28.9616C9.22186 28.8844 8.86549 28.6939 8.58579 28.4142C8.30608 28.1345 8.1156 27.7781 8.03843 27.3902C7.96126 27.0022 8.00087 26.6001 8.15224 26.2346C8.30362 25.8692 8.55996 25.5568 8.88886 25.3371C9.21776 25.1173 9.60444 25 10 25C10.5304 25 11.0391 25.2107 11.4142 25.5858C11.7893 25.9609 12 26.4696 12 27ZM23 25C22.6044 25 22.2178 25.1173 21.8889 25.3371C21.56 25.5568 21.3036 25.8692 21.1522 26.2346C21.0009 26.6001 20.9613 27.0022 21.0384 27.3902C21.1156 27.7781 21.3061 28.1345 21.5858 28.4142C21.8655 28.6939 22.2219 28.8844 22.6098 28.9616C22.9978 29.0387 23.3999 28.9991 23.7654 28.8478C24.1308 28.6964 24.4432 28.44 24.6629 28.1111C24.8827 27.7822 25 27.3956 25 27C25 26.4696 24.7893 25.9609 24.4142 25.5858C24.0391 25.2107 23.5304 25 23 25ZM28.9562 9.29375L25.39 20.8825C25.2032 21.4968 24.8234 22.0346 24.3068 22.416C23.7903 22.7975 23.1646 23.0022 22.5225 23H10.5087C9.85747 22.9976 9.2245 22.7842 8.70463 22.3919C8.18477 21.9996 7.80598 21.4494 7.625 20.8237L3.1025 5H1C0.734784 5 0.48043 4.89464 0.292893 4.70711C0.105357 4.51957 0 4.26522 0 4C0 3.73478 0.105357 3.48043 0.292893 3.29289C0.48043 3.10536 0.734784 3 1 3H3.1025C3.53676 3.00144 3.95888 3.14349 4.30567 3.40487C4.65246 3.66626 4.90526 4.03293 5.02625 4.45L6.04 8H28C28.1565 7.99994 28.3108 8.03661 28.4505 8.10706C28.5903 8.17751 28.7115 8.27976 28.8045 8.40561C28.8976 8.53145 28.9597 8.67737 28.9861 8.83163C29.0124 8.98588 29.0022 9.14417 28.9562 9.29375ZM26.6462 10H6.61125L9.5475 20.275C9.60724 20.4839 9.73336 20.6676 9.90679 20.7984C10.0802 20.9292 10.2915 21 10.5087 21H22.5225C22.7365 21.0001 22.9448 20.9315 23.117 20.8044C23.2891 20.6773 23.4159 20.4983 23.4788 20.2938L26.6462 10Z"
                              fill="" />
                        </svg>
                     </span>
                     <h4 class="mb-0 card-text fs-5">E-Commerce</h4>
                  </a>
               </div>
               <div class="col-lg-2 col-md-4 col-6">
                  <a href="#!" class="card-hover bg-white card card-lift text-center p-4" data-cue="zoomIn">
                     <span class="border rounded-circle icon-shape icon-xxl mb-4">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              opacity="0.2"
                              d="M29 11.75C29 20 16 27 16 27C16 27 3 20 3 11.75C3 9.95979 3.71116 8.2429 4.97703 6.97703C6.2429 5.71116 7.95979 5 9.75 5C12.5738 5 14.9925 6.53875 16 9C17.0075 6.53875 19.4262 5 22.25 5C24.0402 5 25.7571 5.71116 27.023 6.97703C28.2888 8.2429 29 9.95979 29 11.75Z"
                              fill="" />
                           <path
                              d="M9 17H4C3.73478 17 3.48043 16.8946 3.29289 16.7071C3.10536 16.5196 3 16.2652 3 16C3 15.7348 3.10536 15.4804 3.29289 15.2929C3.48043 15.1054 3.73478 15 4 15H8.465L10.1675 12.445C10.2588 12.3078 10.3825 12.1953 10.5278 12.1175C10.673 12.0397 10.8352 11.999 11 11.999C11.1648 11.999 11.327 12.0397 11.4722 12.1175C11.6175 12.1953 11.7412 12.3078 11.8325 12.445L15 17.195L16.1675 15.445C16.2589 15.308 16.3827 15.1957 16.5279 15.1181C16.6732 15.0405 16.8353 14.9999 17 15H20C20.2652 15 20.5196 15.1054 20.7071 15.2929C20.8946 15.4804 21 15.7348 21 16C21 16.2652 20.8946 16.5196 20.7071 16.7071C20.5196 16.8946 20.2652 17 20 17H17.535L15.8325 19.555C15.7412 19.6922 15.6175 19.8047 15.4722 19.8825C15.327 19.9603 15.1648 20.001 15 20.001C14.8352 20.001 14.673 19.9603 14.5278 19.8825C14.3825 19.8047 14.2588 19.6922 14.1675 19.555L11 14.8025L9.8325 16.5525C9.74139 16.6899 9.6177 16.8027 9.47246 16.8808C9.32721 16.9589 9.1649 16.9998 9 17ZM22.25 4C19.6688 4 17.4088 5.11 16 6.98625C14.5912 5.11 12.3312 4 9.75 4C7.69528 4.00232 5.72539 4.81958 4.27248 6.27248C2.81958 7.72539 2.00232 9.69528 2 11.75C2 11.8438 2 11.9375 2 12.0312C2.00829 12.2965 2.12159 12.5475 2.31499 12.7292C2.50839 12.9109 2.76603 13.0083 3.03125 13C3.29647 12.9917 3.54753 12.8784 3.7292 12.685C3.91088 12.4916 4.00829 12.234 4 11.9688C4 11.8963 4 11.8225 4 11.75C4.00198 10.2256 4.60842 8.76423 5.68633 7.68633C6.76423 6.60842 8.22561 6.00198 9.75 6C12.1813 6 14.2225 7.295 15.075 9.375C15.1503 9.55841 15.2785 9.71528 15.4432 9.82569C15.6079 9.93609 15.8017 9.99503 16 9.99503C16.1983 9.99503 16.3921 9.93609 16.5568 9.82569C16.7215 9.71528 16.8497 9.55841 16.925 9.375C17.7775 7.29125 19.8187 6 22.25 6C23.7744 6.00198 25.2358 6.60842 26.3137 7.68633C27.3916 8.76423 27.998 10.2256 28 11.75C28 18.4513 18.28 24.5188 16 25.85C14.6463 25.0613 10.6712 22.6 7.665 19.3237C7.48565 19.1282 7.23594 19.0118 6.97081 19.0003C6.70568 18.9888 6.44685 19.0831 6.25125 19.2625C6.05565 19.4419 5.93931 19.6916 5.92783 19.9567C5.91634 20.2218 6.01065 20.4807 6.19 20.6763C10.0863 24.9263 15.3062 27.7612 15.5262 27.88C15.6719 27.9583 15.8346 27.9993 16 27.9993C16.1654 27.9993 16.3281 27.9583 16.4737 27.88C17.0262 27.5825 30 20.5 30 11.75C29.9977 9.69528 29.1804 7.72539 27.7275 6.27248C26.2746 4.81958 24.3047 4.00232 22.25 4Z"
                              fill="" />
                        </svg>
                     </span>
                     <h4 class="mb-0 card-text fs-5">Healthcare</h4>
                  </a>
               </div>
               <div class="col-lg-2 col-md-4 col-6">
                  <a href="#!" class="card-hover bg-white card card-lift text-center p-4" data-cue="zoomIn">
                     <span class="border rounded-circle icon-shape icon-xxl mb-4">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path opacity="0.2" d="M29 12H3L16 4L29 12Z" fill="" />
                           <path
                              d="M3 13.0001H6V21.0001H4C3.73478 21.0001 3.48043 21.1055 3.29289 21.293C3.10536 21.4805 3 21.7349 3 22.0001C3 22.2653 3.10536 22.5197 3.29289 22.7072C3.48043 22.8948 3.73478 23.0001 4 23.0001H28C28.2652 23.0001 28.5196 22.8948 28.7071 22.7072C28.8946 22.5197 29 22.2653 29 22.0001C29 21.7349 28.8946 21.4805 28.7071 21.293C28.5196 21.1055 28.2652 21.0001 28 21.0001H26V13.0001H29C29.2176 12.9999 29.4292 12.9287 29.6026 12.7974C29.7761 12.666 29.902 12.4817 29.9612 12.2723C30.0205 12.063 30.0098 11.84 29.9308 11.6373C29.8519 11.4345 29.709 11.263 29.5238 11.1489L16.5238 3.14886C16.3662 3.05201 16.1849 3.00073 16 3.00073C15.8151 3.00073 15.6338 3.05201 15.4762 3.14886L2.47625 11.1489C2.29103 11.263 2.14811 11.4345 2.06916 11.6373C1.99021 11.84 1.97955 12.063 2.03878 12.2723C2.09801 12.4817 2.22391 12.666 2.39738 12.7974C2.57085 12.9287 2.78242 12.9999 3 13.0001ZM8 13.0001H12V21.0001H8V13.0001ZM18 13.0001V21.0001H14V13.0001H18ZM24 21.0001H20V13.0001H24V21.0001ZM16 5.17386L25.4675 11.0001H6.5325L16 5.17386ZM31 26.0001C31 26.2653 30.8946 26.5197 30.7071 26.7072C30.5196 26.8948 30.2652 27.0001 30 27.0001H2C1.73478 27.0001 1.48043 26.8948 1.29289 26.7072C1.10536 26.5197 1 26.2653 1 26.0001C1 25.7349 1.10536 25.4805 1.29289 25.293C1.48043 25.1055 1.73478 25.0001 2 25.0001H30C30.2652 25.0001 30.5196 25.1055 30.7071 25.293C30.8946 25.4805 31 25.7349 31 26.0001Z"
                              fill="" />
                        </svg>
                     </span>
                     <h4 class="mb-0 card-text fs-5">Finance</h4>
                  </a>
               </div>
               <div class="col-lg-2 col-md-4 col-6">
                  <a href="#!" class="card-hover bg-white card card-lift text-center p-4" data-cue="zoomIn">
                     <span class="border rounded-circle icon-shape icon-xxl mb-4">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              opacity="0.2"
                              d="M23 23H28V26C28 26.2652 27.8946 26.5196 27.7071 26.7071C27.5196 26.8946 27.2652 27 27 27H24C23.7348 27 23.4804 26.8946 23.2929 26.7071C23.1054 26.5196 23 26.2652 23 26V23ZM4 26C4 26.2652 4.10536 26.5196 4.29289 26.7071C4.48043 26.8946 4.73478 27 5 27H8C8.26522 27 8.51957 26.8946 8.70711 26.7071C8.89464 26.5196 9 26.2652 9 26V23H4V26ZM24.2638 6.59375C24.1852 6.41702 24.057 6.26686 23.8949 6.16148C23.7327 6.05609 23.5434 6 23.35 6H8.65C8.45659 6 8.26733 6.05609 8.10514 6.16148C7.94296 6.26686 7.81482 6.41702 7.73625 6.59375L4 15H28L24.2638 6.59375Z"
                              fill="" />
                           <path
                              d="M30 14H28.65L25.1775 6.1875C25.0204 5.83403 24.7641 5.53372 24.4397 5.32296C24.1153 5.11219 23.7368 5 23.35 5H8.65C8.26317 5 7.88465 5.11219 7.56029 5.32296C7.23593 5.53372 6.97965 5.83403 6.8225 6.1875L3.35 14H2C1.73478 14 1.48043 14.1054 1.29289 14.2929C1.10536 14.4804 1 14.7348 1 15C1 15.2652 1.10536 15.5196 1.29289 15.7071C1.48043 15.8946 1.73478 16 2 16H3V26C3 26.5304 3.21071 27.0391 3.58579 27.4142C3.96086 27.7893 4.46957 28 5 28H8C8.53043 28 9.03914 27.7893 9.41421 27.4142C9.78929 27.0391 10 26.5304 10 26V24H22V26C22 26.5304 22.2107 27.0391 22.5858 27.4142C22.9609 27.7893 23.4696 28 24 28H27C27.5304 28 28.0391 27.7893 28.4142 27.4142C28.7893 27.0391 29 26.5304 29 26V16H30C30.2652 16 30.5196 15.8946 30.7071 15.7071C30.8946 15.5196 31 15.2652 31 15C31 14.7348 30.8946 14.4804 30.7071 14.2929C30.5196 14.1054 30.2652 14 30 14ZM8.65 7H23.35L26.4613 14H5.53875L8.65 7ZM8 26H5V24H8V26ZM24 26V24H27V26H24ZM27 22H5V16H27V22ZM7 19C7 18.7348 7.10536 18.4804 7.29289 18.2929C7.48043 18.1054 7.73478 18 8 18H10C10.2652 18 10.5196 18.1054 10.7071 18.2929C10.8946 18.4804 11 18.7348 11 19C11 19.2652 10.8946 19.5196 10.7071 19.7071C10.5196 19.8946 10.2652 20 10 20H8C7.73478 20 7.48043 19.8946 7.29289 19.7071C7.10536 19.5196 7 19.2652 7 19ZM21 19C21 18.7348 21.1054 18.4804 21.2929 18.2929C21.4804 18.1054 21.7348 18 22 18H24C24.2652 18 24.5196 18.1054 24.7071 18.2929C24.8946 18.4804 25 18.7348 25 19C25 19.2652 24.8946 19.5196 24.7071 19.7071C24.5196 19.8946 24.2652 20 24 20H22C21.7348 20 21.4804 19.8946 21.2929 19.7071C21.1054 19.5196 21 19.2652 21 19Z"
                              fill="" />
                        </svg>
                     </span>
                     <h4 class="mb-0 card-text fs-5">Automotive</h4>
                  </a>
               </div>
               <div class="col-lg-2 col-md-4 col-6">
                  <a href="#!" class="card-hover bg-white card card-lift text-center p-4" data-cue="zoomIn">
                     <span class="border rounded-circle icon-shape icon-xxl mb-4">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              opacity="0.2"
                              d="M27 9V22H5V9C5 8.46957 5.21071 7.96086 5.58579 7.58579C5.96086 7.21071 6.46957 7 7 7H25C25.5304 7 26.0391 7.21071 26.4142 7.58579C26.7893 7.96086 27 8.46957 27 9Z"
                              fill="" />
                           <path
                              d="M29 21H28V9C28 8.20435 27.6839 7.44129 27.1213 6.87868C26.5587 6.31607 25.7956 6 25 6H7C6.20435 6 5.44129 6.31607 4.87868 6.87868C4.31607 7.44129 4 8.20435 4 9V21H3C2.73478 21 2.48043 21.1054 2.29289 21.2929C2.10536 21.4804 2 21.7348 2 22V24C2 24.7956 2.31607 25.5587 2.87868 26.1213C3.44129 26.6839 4.20435 27 5 27H27C27.7956 27 28.5587 26.6839 29.1213 26.1213C29.6839 25.5587 30 24.7956 30 24V22C30 21.7348 29.8946 21.4804 29.7071 21.2929C29.5196 21.1054 29.2652 21 29 21ZM6 9C6 8.73478 6.10536 8.48043 6.29289 8.29289C6.48043 8.10536 6.73478 8 7 8H25C25.2652 8 25.5196 8.10536 25.7071 8.29289C25.8946 8.48043 26 8.73478 26 9V21H6V9ZM28 24C28 24.2652 27.8946 24.5196 27.7071 24.7071C27.5196 24.8946 27.2652 25 27 25H5C4.73478 25 4.48043 24.8946 4.29289 24.7071C4.10536 24.5196 4 24.2652 4 24V23H28V24ZM19 11C19 11.2652 18.8946 11.5196 18.7071 11.7071C18.5196 11.8946 18.2652 12 18 12H14C13.7348 12 13.4804 11.8946 13.2929 11.7071C13.1054 11.5196 13 11.2652 13 11C13 10.7348 13.1054 10.4804 13.2929 10.2929C13.4804 10.1054 13.7348 10 14 10H18C18.2652 10 18.5196 10.1054 18.7071 10.2929C18.8946 10.4804 19 10.7348 19 11Z"
                              fill="" />
                        </svg>
                     </span>
                     <h4 class="mb-0 card-text fs-5">Software</h4>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!--Industry we serve end-->

      <!--Case study start-->
      <section class="py-xl-9 py-5 bg-gray-900" data-cue="fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 offset-lg-2 col-12">
                  <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
                     <small class="text-uppercase ls-md fw-semibold text-primary">Case study</small>
                     <h2 class="my-3 text-white-stable">Explore Success Stories</h2>
                     <p class="mb-0 text-body">Explore Success Stories: Real-World Impact through Our Customer Case Studies</p>
                  </div>
               </div>
            </div>
            <div class="swiper sliderSwiperThumbanil">
               <div class="swiper-wrapper pb-lg-8 pb-4 pt-1">
                  <div class="swiper-slide" data-cue="zoomIn">
                     <div class="card border-0 h-100 card-lift">
                        <a href="#!"><img src="assets/images/landings/it-company/it-company-case-study-1.jpg" alt="about" class="img-fluid rounded-top-3" /></a>
                        <div class="card-body">
                           <div class="d-flex flex-column gap-2">
                              <div>
                                 <img src="assets/images/landings/it-company/casestudy-logo-1.svg" alt="case-study" />
                              </div>
                              <div class="d-flex flex-column gap-4">
                                 <h4><a href="#!" class="text-reset">Revolutionizing Healthcare Delivery</a></h4>
                                 <a href="#!" class="icon-link icon-link-hover">
                                    Read Case Study
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
                  </div>

                  <div class="swiper-slide" data-cue="zoomIn">
                     <div class="card border-0 h-100 card-lift">
                        <a href="#!"><img src="assets/images/landings/it-company/it-company-case-study-2.jpg" alt="about" class="img-fluid rounded-top-3" /></a>
                        <div class="card-body">
                           <div class="d-flex flex-column gap-2">
                              <div>
                                 <img src="assets/images/landings/it-company/casestudy-logo-2.svg" alt="case-study" />
                              </div>
                              <div class="d-flex flex-column gap-4">
                                 <h4><a href="#!" class="text-reset">Financial Institution Fin-tech Success Story</a></h4>

                                 <a href="#!" class="icon-link icon-link-hover">
                                    Read Case Study
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
                  </div>
                  <div class="swiper-slide" data-cue="zoomIn">
                     <div class="card border-0 h-100 card-lift">
                        <a href="#!"><img src="assets/images/landings/it-company/it-company-case-study-3.jpg" alt="about" class="img-fluid rounded-top-3" /></a>
                        <div class="card-body">
                           <div class="d-flex flex-column gap-2">
                              <div>
                                 <img src="assets/images/landings/it-company/casestudy-logo-3.svg" alt="case-study" />
                              </div>
                              <div class="d-flex flex-column gap-4">
                                 <h4><a href="#!" class="text-reset">Digital Educational Learning Innovation</a></h4>

                                 <a href="#!" class="icon-link icon-link-hover">
                                    Read Case Study
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
                  </div>
                  <div class="swiper-slide" data-cue="zoomIn">
                     <div class="card border-0 h-100 card-lift">
                        <a href="#!"><img src="assets/images/landings/it-company/it-company-case-study-4.jpg" alt="about" class="img-fluid rounded-top-3" /></a>
                        <div class="card-body">
                           <div class="d-flex flex-column gap-2">
                              <div>
                                 <img src="assets/images/landings/it-company/casestudy-logo-4.svg" alt="case-study" />
                              </div>
                              <div class="d-flex flex-column gap-4">
                                 <h4><a href="#!" class="text-reset">Revolutionizing Efficiency: How Codescandy Enhanced Operations for Client</a></h4>

                                 <a href="#!" class="icon-link icon-link-hover">
                                    Read Case Study
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
                  </div>

                  <div class="swiper-slide" data-cue="zoomIn">
                     <div class="card border-0 h-100 card-lift">
                        <a href="#!"><img src="assets/images/landings/it-company/it-company-case-study-5.jpg" alt="about" class="img-fluid rounded-top-3" /></a>
                        <div class="card-body">
                           <div class="d-flex flex-column gap-2">
                              <div>
                                 <img src="assets/images/landings/it-company/casestudy-logo-5.svg" alt="case-study" />
                              </div>
                              <div class="d-flex flex-column gap-4">
                                 <h4><a href="#!" class="text-reset">From Challenge to Triumph: The [Client Name] Success Story</a></h4>

                                 <a href="#!" class="icon-link icon-link-hover">
                                    Read Case Study
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
                  </div>
                  <div class="swiper-slide" data-cue="zoomIn">
                     <div class="card border-0 h-100 card-lift">
                        <a href="#!"><img src="assets/images/landings/it-company/it-company-case-study-6.jpg" alt="about" class="img-fluid rounded-top-3" /></a>
                        <div class="card-body">
                           <div class="d-flex flex-column gap-2">
                              <div>
                                 <img src="assets/images/landings/it-company/casestudy-logo-6.svg" alt="case-study" />
                              </div>
                              <div class="d-flex flex-column gap-4">
                                 <h4><a href="#!" class="text-reset">A Deep Dive into [Client Name]'s Digital Transformation Journey</a></h4>

                                 <a href="#!" class="icon-link icon-link-hover">
                                    Read Case Study
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
                  </div>
               </div>
               <div class="d-flex gap-3 justify-content-center" data-cue="fadeIn">
                  <div class="btn-prev btn btn-icon btn-white rounded-pill">
                     <i class="bi bi-arrow-left-short fs-3 lh-1"></i>
                  </div>
                  <div class="btn-next btn btn-icon btn-white rounded-pill">
                     <i class="bi bi-arrow-right-short fs-3 lh-1"></i>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Case study end-->

      <!--Testimonial start-->
      <section class="py-xl-9 py-5">
         <div class="container">
            <div class="row gy-7 gx-lg-7">
               <div class="col-lg-6 col-12" data-cue="fadeIn">
                  <div class="d-flex flex-column gap-3 mb-6">
                     <div>
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M12.5 7.97559H5C4.46957 7.97559 3.96086 8.1863 3.58579 8.56137C3.21071 8.93644 3 9.44515 3 9.97559V17.9756C3 18.506 3.21071 19.0147 3.58579 19.3898C3.96086 19.7649 4.46957 19.9756 5 19.9756H12.5V20.9756C12.5 22.0365 12.0786 23.0539 11.3284 23.804C10.5783 24.5542 9.56087 24.9756 8.5 24.9756C8.23478 24.9756 7.98043 25.0809 7.79289 25.2685C7.60536 25.456 7.5 25.7104 7.5 25.9756C7.5 26.2408 7.60536 26.4952 7.79289 26.6827C7.98043 26.8702 8.23478 26.9756 8.5 26.9756C10.0908 26.9739 11.616 26.3413 12.7408 25.2164C13.8657 24.0915 14.4983 22.5664 14.5 20.9756V9.97559C14.5 9.44515 14.2893 8.93644 13.9142 8.56137C13.5391 8.1863 13.0304 7.97559 12.5 7.97559ZM12.5 17.9756H5V9.97559H12.5V17.9756ZM27 7.97559H19.5C18.9696 7.97559 18.4609 8.1863 18.0858 8.56137C17.7107 8.93644 17.5 9.44515 17.5 9.97559V17.9756C17.5 18.506 17.7107 19.0147 18.0858 19.3898C18.4609 19.7649 18.9696 19.9756 19.5 19.9756H27V20.9756C27 22.0365 26.5786 23.0539 25.8284 23.804C25.0783 24.5542 24.0609 24.9756 23 24.9756C22.7348 24.9756 22.4804 25.0809 22.2929 25.2685C22.1054 25.456 22 25.7104 22 25.9756C22 26.2408 22.1054 26.4952 22.2929 26.6827C22.4804 26.8702 22.7348 26.9756 23 26.9756C24.5908 26.9739 26.116 26.3413 27.2408 25.2164C28.3657 24.0915 28.9983 22.5664 29 20.9756V9.97559C29 9.44515 28.7893 8.93644 28.4142 8.56137C28.0391 8.1863 27.5304 7.97559 27 7.97559ZM27 17.9756H19.5V9.97559H27V17.9756Z"
                              fill="#8B3DFF" />
                        </svg>
                     </div>
                     <div>
                        <h2>Client Testimonials</h2>
                        <p class="mb-0">Beyond industry awards, our greatest recognition comes from the satisfaction of our clients.</p>
                     </div>
                  </div>
                  <div class="swiper sliderSwiper" data-cue="zoomIn">
                     <div class="swiper-wrapper pb-8 mx-auto">
                        <div class="swiper-slide">
                           <div class="card shadow-sm">
                              <div class="card-body">
                                 <div class="d-flex flex-column gap-4">
                                    <div>
                                       <p class="mb-0 fst-italic lead text-dark">
                                          "Our journey with [Your Company Name] has been nothing short of exceptional. Their team's expertise and commitment to delivering results have significantly
                                          contributed to our business growth. "
                                       </p>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                       <div>
                                          <img src="assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avtar-xs rounded-circle" />
                                       </div>
                                       <div>
                                          <h5 class="mb-0">Jitu Chauhan</h5>
                                          <small>CTO, Codescandy</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="card shadow-sm">
                              <div class="card-body">
                                 <div class="d-flex flex-column gap-4">
                                    <div>
                                       <p class="mb-0 fst-italic lead text-dark">
                                          "As a startup, we were looking for a technology partner who could understand our unique needs and propel us forward. [Your Company Name] not only met but
                                          surpassed our expectations. "
                                       </p>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                       <div>
                                          <img src="assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avtar-xs rounded-circle" />
                                       </div>
                                       <div>
                                          <h5 class="mb-0">Sandip Chauhan</h5>
                                          <small>Web Designer, Codescandy</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="card shadow-sm">
                              <div class="card-body">
                                 <div class="d-flex flex-column gap-4">
                                    <div>
                                       <p class="mb-0 fst-italic lead text-dark">
                                          "[Your Company Name] is not just a service provider; they are true partners. Their team's ability to translate our ideas into innovative solutions has been
                                          crucial to our digital transformation. "
                                       </p>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                       <div>
                                          <img src="assets/images/avatar/avatar-4.jpg" alt="avatar" class="avatar avtar-xs rounded-circle" />
                                       </div>
                                       <div>
                                          <h5 class="mb-0">Anita parmar</h5>
                                          <small>Lead Developer , Codescandy</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-pagination"></div>
                  </div>
               </div>
               <div class="col-lg-6 col-12" data-cue="fadeIn">
                  <div class="d-flex flex-column gap-3 mb-6">
                     <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trophy text-primary" viewBox="0 0 16 16">
                           <path
                              d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1q.01.775.056 1.469c.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.5.5 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667q.045-.694.056-1.469z" />
                        </svg>
                     </div>
                     <div>
                        <h2>Awards and recognition</h2>
                        <p class="mb-0">Accolades and Recognition: Celebrating [Your Company Name]'s Commitment to Excellence.</p>
                     </div>
                  </div>
                  <div class="row g-4">
                     <div class="col-xl-4 col-6 col-md-4" data-cue="zoomIn">
                        <div class="card card-lift text-center">
                           <div class="d-flex justify-content-center align-items-center">
                              <img src="assets/images/landings/it-company/it-company-award-logo-1.png" alt="company" class="" />
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-6 col-md-4" data-cue="zoomIn">
                        <div class="card card-lift text-center">
                           <div class="d-flex justify-content-center align-items-center">
                              <img src="assets/images/landings/it-company/it-company-award-logo-2.png" alt="company" class="" />
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-6 col-md-4" data-cue="zoomIn">
                        <div class="card card-lift text-center">
                           <div class="d-flex justify-content-center align-items-center">
                              <img src="assets/images/landings/it-company/it-company-award-logo-4.png" alt="company" class="" />
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-6 col-md-4" data-cue="zoomIn">
                        <div class="card card-lift text-center">
                           <div class="d-flex justify-content-center align-items-center">
                              <img src="assets/images/landings/it-company/it-company-award-logo-3.png" alt="company" class="" />
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-6 col-md-4" data-cue="zoomIn">
                        <div class="card card-lift text-center">
                           <div class="d-flex justify-content-center align-items-center">
                              <img src="assets/images/landings/it-company/it-company-award-logo-5.png" alt="company" class="" />
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-6 col-md-4" data-cue="zoomIn">
                        <div class="card card-lift text-center">
                           <div class="d-flex justify-content-center align-items-center">
                              <img src="assets/images/landings/it-company/it-company-award-logo-6.png" alt="company" class="" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Testimonial end-->

      <!--Form section start-->
      <section class="bg-light py-lg-9 py-5">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-10">
                  <div class="card shadow-lg" data-cue="zoomIn">
                     <div class="row g-0">
                        <div
                           class="col-md-6 d-none d-md-block rounded-start-3"
                           style="
                              background-image: url(assets/images/landings/it-company/it-company-form-img.jpg);
                              background-size: cover;
                              background-repeat: no-repeat;
                              background-position: center;
                           ">
                           <!-- for mobile img-->
                        </div>
                        <div class="col-xl-6 col-md-6">
                           <div class="card-body p-md-5">
                              <form class="row needs-validation g-3" novalidate>
                                 <div class="col-lg-12">
                                    <div>
                                       <h3>Ready to Transform Your Business?</h3>
                                       <p class="mb-0">
                                          Drop us a line about your project at
                                          <span><a href="#!" class="">contact@example.com</a></span>
                                          or via the contact form below, and we will contact you soon.
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-12">
                                    <label for="companyFirstnameInput" class="form-label">
                                       First Name
                                       <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="companyFirstnameInput" required />
                                    <div class="invalid-feedback">Please enter firstname.</div>
                                 </div>
                                 <div class="col-lg-6 col-12">
                                    <label for="companyNameInput" class="form-label">
                                       Company
                                       <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="companyNameInput" required />
                                    <div class="invalid-feedback">Please enter lastname.</div>
                                 </div>
                                 <div class="col-md-12">
                                    <label for="companyEmailInput" class="form-label">
                                       Work Email
                                       <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control" id="companyEmailInput" required />
                                    <div class="invalid-feedback">Please enter email.</div>
                                 </div>
                                 <div class="col-md-12">
                                    <label for="companyPhoneInput" class="form-label">
                                       Phone
                                       <span class="text-danger">*</span>
                                    </label>
                                    <input type="tel" class="form-control" id="companyPhoneInput" required />
                                    <div class="invalid-feedback">Please enter phone.</div>
                                 </div>
                                 <div class="col-md-12">
                                    <label for="companyTextarea" class="form-label">Describe your idea</label>
                                    <textarea class="form-control" id="companyTextarea" placeholder="Write to us" rows="3" required></textarea>
                                    <div class="invalid-feedback">Please write message.</div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="companyCheckagree" required />
                                       <label class="form-check-label" for="companyCheckagree">
                                          I agree to the
                                          <a href="#!">privacy policy</a>
                                       </label>
                                       <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                 </div>
                                 <div class="d-grid">
                                    <button class="btn btn-primary rounded-pill" type="submit">Let’s work together!</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Form section end-->

      <!--Logo section start-->
      <section class="py-xl-9 py-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-10 offset-lg-1" data-cue="fadeIn">
                  <div class="text-center mb-4 mb-lg-7">
                     <h3 class="mb-0">See how over 700+ customers help the world work</h3>
                  </div>
                  <div class="swiper logoSwiper">
                     <div class="swiper-wrapper pb-6">
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
      </section>
      <!--Logo section end-->
   </main>
@endsection
