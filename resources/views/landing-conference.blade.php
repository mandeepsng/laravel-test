@extends('layout.mainlayout_admin')

@section('content')
   <main>
      <!--Hero start-->
      <div
         data-cue="fadeIn"
         class="bg-dark"
         style="background-image: url(assets/images/landings/conference/event-hero-img.jpg); background-position: center; background-size: cover; background-repeat: no-repeat">
         <section class="py-9">
            <div class="container py-9">
               <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                     <div class="text-center py-lg-8" data-cue="zoomIn">
                        <span class="border border-warning text-warning px-3 rounded-pill py-1 fs-6">March 24 - 26, 2024 | San Diego, CA</span>
                        <div class="mt-5 mx-xl-7">
                           <h1 class="text-white-stable display-5 mb-3">Join the #1 conference for developers.</h1>
                           <p class="mb-0 lead px-xl-7 mx-xl-7 text-white-stable">
                              Join us virtually for Block is the #1 conference for professional software developers. Improving efficiency, security, and developer productivity.
                           </p>
                        </div>
                        <div class="mt-6 d-grid d-md-inline-flex mx-4">
                           <!-- placement -->
                           <a href="offcanvasRight.html" class="btn btn-primary me-md-2 mb-3 mb-md-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                              Register Now
                           </a>

                           <a href="#" class="btn btn-outline-primary">
                              Add to Calender
                              <span class="ms-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window-dock" viewBox="0 0 16 16">
                                    <path
                                       d="M3.5 11a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm4.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
                                    <path
                                       d="M14 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h12ZM2 14h12a1 1 0 0 0 1-1V5H1v8a1 1 0 0 0 1 1ZM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2Z" />
                                 </svg>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <!--Hero end-->

      <!--Location start-->
      <section class="mb-xl-9" data-cue="fadeIn">
         <div class="container">
            <div class="row row border-top border-bottom">
               <div class="col-md-4 border-end-md border-bottom border-bottom-md-0">
                  <div class="text-center p-5 px-xl-8 px-md-0" data-cue="zoomIn">
                     <div class="icon-lg icon-shape rounded-circle bg-body-tertiary border mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                           <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                     </div>

                     <h5>Location</h5>
                     <p class="mb-0">Ahmedabad hall 74 Grand Avenue South, Cambridge, ON</p>
                  </div>
               </div>
               <div class="col-md-4 border-end-md border-bottom border-bottom-md-0">
                  <div class="text-center p-5 px-xl-8 px-md-0" data-cue="zoomIn">
                     <div class="icon-lg icon-shape rounded-circle bg-body-tertiary border mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window-dock" viewBox="0 0 16 16">
                           <path
                              d="M3.5 11a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm4.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
                           <path d="M14 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h12ZM2 14h12a1 1 0 0 0 1-1V5H1v8a1 1 0 0 0 1 1ZM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2Z" />
                        </svg>
                     </div>

                     <h5>Date and time</h5>
                     <p class="mb-0">Tuesday, June 20, 2024 6:00 PM - 10:00 PM EDT</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="text-center p-5 px-xl-8 px-md-0" data-cue="zoomIn">
                     <div class="icon-lg icon-shape rounded-circle bg-body-tertiary border mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket-detailed-fill" viewBox="0 0 16 16">
                           <path
                              d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5Zm4 1a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5Zm0 5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5ZM4 8a1 1 0 0 0 1 1h6a1 1 0 1 0 0-2H5a1 1 0 0 0-1 1Z" />
                        </svg>
                     </div>

                     <h5>Admission</h5>
                     <p class="mb-0">$79 per person Registration opens May 17, 2024</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Location end-->

      <!--Developer events start-->
      <section class="my-xl-9 my-5" data-cue="fadeIn">
         <div class="container">
            <div class="row align-items-center g-5">
               <div class="col-lg-6" data-cue="slideInLeft">
                  <div class="mb-5">
                     <h2 class="mb-3">
                        Be a part of the first official
                        <span class="text-primary">#1 developer</span>
                        event.
                     </h2>
                     <p class="lead mb-0">
                        Developer productivity significantly impacts software quality. Reduced productivity can leave room for bugs and technical errors that affect a product’s quality.
                     </p>
                  </div>
                  <ul class="mb-5 list-unstyled">
                     <li class="mb-3 d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-primary mt-1" viewBox="0 0 16 16">
                           <path
                              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                        <span class="ms-2">Attendance is free. Join the event from anywhere.</span>
                     </li>
                     <li class="mb-3 d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-primary mt-1" viewBox="0 0 16 16">
                           <path
                              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                        <span class="ms-2">Enjoy technical, code-driven sessions for developers.</span>
                     </li>
                     <li class="mb-3 d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-primary mt-1" viewBox="0 0 16 16">
                           <path
                              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                        <span class="ms-2">Join live Q&A in the events with industry experts.</span>
                     </li>
                  </ul>
                  <a href="#speaker">
                     See Speakers
                     <span class="ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                     </span>
                  </a>
               </div>
               <div class="col-lg-6" data-cue="slideInRight">
                  <figure>
                     <img src="assets/images/landings/conference/event-img.jpg" alt="events" class="img-fluid rounded-3" />
                  </figure>
               </div>
            </div>
            <div class="row mt-lg-5 mt-1 g-5" data-cue="fadeIn">
               <div class="col-lg-10 offset-lg-1">
                  <div class="row g-5">
                     <div class="col-md-3 col-6" data-cue="slideInUp">
                        <div class="text-center">
                           <div class="d-flex justify-content-center">
                              <h2 class="counter mb-0" data-count="20">0</h2>
                              <span class="ms-1 fs-2 text-dark">+</span>
                           </div>
                           <small>Influential speakers</small>
                        </div>
                     </div>
                     <div class="col-md-3 col-6" data-cue="slideInUp">
                        <div class="text-center">
                           <div class="d-flex justify-content-center">
                              <h2 class="counter mb-0" data-count="19">0</h2>
                              <span class="ms-1 fs-2 text-dark">+</span>
                           </div>
                           <small>Sessions (Live)</small>
                        </div>
                     </div>
                     <div class="col-md-3 col-6" data-cue="slideInUp">
                        <div class="text-center">
                           <div class="d-flex justify-content-center">
                              <h2 class="counter mb-0" data-count="5">0</h2>
                              <span class="ms-1 fs-2 text-dark">+</span>
                           </div>
                           <small>Free Workshops</small>
                        </div>
                     </div>
                     <div class="col-md-3 col-6" data-cue="slideInUp">
                        <div class="text-center">
                           <div class="d-flex justify-content-center">
                              <h2 class="counter mb-0" data-count="3">0</h2>
                           </div>
                           <small>Days (29 to 31 March)</small>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Developer events end-->

      <!--Speakers start-->
      <section class="py-xl-9 py-5 bg-gray-200" id="speaker">
         <div class="container">
            <div class="row">
               <div class="col-md-6" data-cue="fadeIn">
                  <div class="mb-7 pb-2">
                     <h2 class="mb-3">Speakers</h2>
                     <p class="mb-0 lead">Learn from the experts on the cutting-edge of deception at the most sinister companies.</p>
                  </div>
               </div>
            </div>
            <div class="table-responsive-xl">
               <div class="row row-cols-xl-5 row-cols-md-3 row-cols-1 g-4 flex-nowrap pb-4 pb-xl-0 me-5 me-lg-0" data-cues="fadeIn">
                  <div class="col" data-cue="fadeIn">
                     <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card text-center shadow-sm border-0 card-lift">
                           <div class="card-body">
                              <div class="mb-4">
                                 <img src="assets/images/avatar/avatar-9.jpg" alt="testimonial" class="rounded-circle avatar avatar-xxl" />
                              </div>
                              <div class="mb-2">
                                 <h4 class="mb-0 h5">Jitu Chauhan</h4>
                                 <span class="small">Engineer</span>
                              </div>

                              <img src="assets/images/brand-logo/brand-logo-6.svg" alt="img" />
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col" data-cue="fadeIn">
                     <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card text-center shadow-sm border-0 card-lift">
                           <div class="card-body">
                              <div class="mb-4">
                                 <img src="assets/images/avatar/avatar-8.jpg" alt="testimonial" class="rounded-circle avatar avatar-xxl" />
                              </div>
                              <div class="mb-2">
                                 <h4 class="mb-0 h5">Anita Parmar</h4>
                                 <span class="small">Senior Engineer</span>
                              </div>

                              <img src="assets/images/brand-logo/brand-logo-2.svg" alt="img" />
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col" data-cue="fadeIn">
                     <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card text-center shadow-sm border-0 card-lift">
                           <div class="card-body">
                              <div class="mb-4">
                                 <img src="assets/images/avatar/avatar-7.jpg" alt="testimonial" class="rounded-circle avatar avatar-xxl" />
                              </div>
                              <div class="mb-2">
                                 <h4 class="mb-0 h5">Manasvi Suthar</h4>
                                 <span class="small">Co-founder and COO</span>
                              </div>

                              <img src="assets/images/brand-logo/brand-logo-3.svg" alt="img" />
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col" data-cue="fadeIn">
                     <a href="#" class="text-reset" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card text-center shadow-sm border-0 card-lift">
                           <div class="card-body">
                              <div class="mb-4">
                                 <img src="assets/images/avatar/avatar-1.jpg" alt="testimonial" class="rounded-circle avatar avatar-xxl" />
                              </div>
                              <div class="mb-2">
                                 <h4 class="mb-0 h5">Sandip Chauhan</h4>
                                 <span class="small">Software Engineer</span>
                              </div>

                              <img src="assets/images/brand-logo/brand-logo-4.svg" alt="img" />
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col" data-cue="fadeIn">
                     <a href="#" class="text-reset" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card text-center shadow-sm border-0 card-lift">
                           <div class="card-body">
                              <div class="mb-4">
                                 <img src="assets/images/avatar/avatar-2.jpg" alt="testimonial" class="rounded-circle avatar avatar-xxl" />
                              </div>
                              <div class="mb-2">
                                 <h4 class="mb-0 h5">Rahul Sharma</h4>
                                 <span class="small">Front-End Engineer</span>
                              </div>

                              <img src="assets/images/brand-logo/brand-logo-5.svg" alt="img" />
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row" data-cue="fadeIn">
               <div class="col-lg-12">
                  <div class="mt-5">
                     <a href="#!" class="btn btn-outline-primary">Become a Speaker</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Speakers end-->

      <!--Event schedule start-->
      <section class="my-xl-9 my-5" data-cue="fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="mb-5 pb-2">
                     <h2 class="mb-2">Event schedule</h2>
                     <p class="mb-0">Choose from 45 Sessions, 30 Speakers, 6 Networking Events & More</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12" data-cue="fadeIn">
                  <ul class="nav nav-pills mb-7 nav-primary" id="pills-tab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <a
                           href="#"
                           class="nav-link active me-2"
                           id="pillsDayone-tab"
                           data-bs-toggle="pill"
                           data-bs-target="#pillsDayone"
                           role="tab"
                           aria-controls="pillsDayone"
                           aria-selected="true">
                           Day - 1 (29 March)
                        </a>
                     </li>
                     <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link me-2" id="pillsDaytwo-tab" data-bs-toggle="pill" data-bs-target="#pillsDaytwo" role="tab" aria-controls="pillsDaytwo" aria-selected="false">
                           Day - 2 (30 March)
                        </a>
                     </li>
                     <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link" id="pillsDaythree-tab" data-bs-toggle="pill" data-bs-target="#pillsDaythree" role="tab" aria-controls="pillsDaythree" aria-selected="false">
                           Day - 3 (31 March)
                        </a>
                     </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane show active" id="pillsDayone" role="tabpanel" aria-labelledby="pillsDayone-tab" tabindex="0" data-cues="slideInRight">
                        <div class="row g-0">
                           <div class="col-lg-12">
                              <div>
                                 <h4 class="mb-5 pt-2">Day 1 - Mar 29 — Flexible and productive</h4>
                              </div>
                           </div>
                        </div>
                        <div class="row g-0 border-top py-6">
                           <div class="col-md-5">
                              <div>
                                 <h6 class="mb-5">6:00 AM - 6:45 AM</h6>
                              </div>
                              <div>
                                 <h4>Opening reception</h4>
                                 <p class="mb-0">Settle in, grab some swag, and enjoy a drink with other members of the community before the keynote.</p>
                              </div>
                           </div>
                           <div class="offset-md-1 col-md-6">
                              <div>
                                 <h6 class="mb-3 text-body">Host</h6>
                              </div>
                              <div class="d-flex align-items-center mb-4">
                                 <div>
                                    <img src="assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                 </div>
                                 <div class="ms-3">
                                    <h6 class="mb-0">Sandip Chauhan</h6>
                                    <small>
                                       Software Engineer
                                       <span class="ms-2">@GitHub</span>
                                    </small>
                                 </div>
                              </div>
                              <div>
                                 <h6 class="mb-3 text-body">Speakers</h6>
                              </div>
                              <div>
                                 <img src="assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avatar-md rounded-circle me-2" />
                                 <img src="assets/images/avatar/avatar-4.jpg" alt="avatar" class="avatar avatar-md rounded-circle me-2" />
                                 <img src="assets/images/avatar/avatar-6.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                              </div>
                           </div>
                        </div>

                        <div class="row g-0 border-top py-6">
                           <div class="col-md-5">
                              <div>
                                 <h6 class="mb-5">7:00 AM - 8:00 AM</h6>
                              </div>
                              <div>
                                 <h4>Keynote presentation + demos</h4>
                                 <p class="mb-0">Featuring a keynote presentation from Jitu Chauhan and live demos from community members.</p>
                              </div>
                           </div>
                           <div class="offset-md-1 col-md-6">
                              <div>
                                 <h6 class="mb-3 text-body">Host</h6>
                              </div>
                              <div class="d-flex align-items-center mb-4">
                                 <div>
                                    <img src="assets/images/avatar/avatar-5.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                 </div>
                                 <div class="ms-3">
                                    <h6 class="mb-0">Jitu Chauhan</h6>
                                    <small>
                                       Software Engineer
                                       <span class="ms-2">@Codescandy</span>
                                    </small>
                                 </div>
                              </div>
                              <div>
                                 <h6 class="mb-3 text-body">Speakers</h6>
                              </div>
                              <div class="d-flex align-items-center mb-3">
                                 <div>
                                    <img src="assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                 </div>
                                 <div class="ms-3">
                                    <h6 class="mb-0">Anita parmar</h6>
                                    <small>
                                       Software Engineer
                                       <span class="ms-2">@Astro</span>
                                    </small>
                                 </div>
                              </div>
                              <div class="d-flex align-items-center">
                                 <div>
                                    <img src="assets/images/avatar/avatar-4.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                 </div>
                                 <div class="ms-3">
                                    <h6 class="mb-0">Sandeep Chauhan</h6>
                                    <small>
                                       Lead Software Engineer
                                       <span class="ms-md-2">@CodePersistent</span>
                                    </small>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row g-0 border-top pt-6">
                           <div class="col-md-5">
                              <div>
                                 <h6 class="mb-5">8:15 AM - 10:00 AM</h6>
                              </div>
                              <div class="mb-4 mb-md-0">
                                 <h4>Evening social</h4>
                                 <p class="mb-0">Spend the rest of the evening making connections with other community members over canapés, snacks, and refreshments.</p>
                              </div>
                           </div>
                           <div class="offset-md-1 col-md-6">
                              <div class="d-lg-flex align-items-center justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <div>
                                       <img src="assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                       <h6 class="mb-0">Anita Parmar</h6>
                                       <small>
                                          Software Engineer
                                          <span class="ms-2">@Codescandy</span>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="mt-4 mt-lg-0">
                                    <a href="#!" class="btn btn-primary rounded-pill">View Details</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="pillsDaytwo" role="tabpanel" aria-labelledby="pillsDaytwo-tab" tabindex="0" data-cues="slideInRight">
                        <div class="row g-0">
                           <div class="col-lg-12">
                              <div>
                                 <h4 class="mb-5 pt-2">Day 2 - Mar 30 — Flexible and productive</h4>
                              </div>
                           </div>
                        </div>

                        <div class="row g-0 border-top py-6">
                           <div class="col-md-5">
                              <div>
                                 <h6 class="mb-5">6:45 AM - 8:00 AM</h6>
                              </div>
                              <div>
                                 <h4>Keynote presentation + demos</h4>
                                 <p class="mb-0">Featuring a keynote presentation from Jitu Chauhan and live demos from community members.</p>
                              </div>
                           </div>
                           <div class="offset-md-1 col-md-6">
                              <div>
                                 <h6 class="mb-3 text-body">Host</h6>
                              </div>
                              <div class="d-flex align-items-center mb-4">
                                 <div>
                                    <img src="assets/images/avatar/avatar-5.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                 </div>
                                 <div class="ms-3">
                                    <h6 class="mb-0">Jitu Chauhan</h6>
                                    <small>
                                       Software Engineer
                                       <span class="ms-2">@Codescandy</span>
                                    </small>
                                 </div>
                              </div>
                              <div>
                                 <h6 class="mb-3 text-body">Speakers</h6>
                              </div>
                              <div class="d-flex align-items-center mb-3">
                                 <div>
                                    <img src="assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                 </div>
                                 <div class="ms-3">
                                    <h6 class="mb-0">Anita parmar</h6>
                                    <small>
                                       Software Engineer
                                       <span class="ms-2">@Astro</span>
                                    </small>
                                 </div>
                              </div>
                              <div class="d-flex align-items-center">
                                 <div>
                                    <img src="assets/images/avatar/avatar-4.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                 </div>
                                 <div class="ms-3">
                                    <h6 class="mb-0">Sandeep Chauhan</h6>
                                    <small>
                                       Lead Software Engineer
                                       <span class="ms-md-2">@CodePersistent</span>
                                    </small>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row g-0 border-top py-6">
                           <div class="col-md-5">
                              <div>
                                 <h6 class="mb-5">8:15 AM - 10:00 AM</h6>
                              </div>
                              <div class="mb-4 mb-md-0">
                                 <h4>Evening social</h4>
                                 <p class="mb-0">Spend the rest of the evening making connections with other community members over canapés, snacks, and refreshments.</p>
                              </div>
                           </div>
                           <div class="offset-md-1 col-md-6">
                              <div class="d-lg-flex align-items-center justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <div>
                                       <img src="assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                       <h6 class="mb-0">Anita Parmar</h6>
                                       <small>
                                          Software Engineer
                                          <span class="ms-2">@Codescandy</span>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="mt-4 mt-lg-0">
                                    <a href="#!" class="btn btn-primary rounded-pill">View Details</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row g-0 border-top pt-6">
                           <div class="col-md-5">
                              <div>
                                 <h6 class="mb-5">10:15 AM - 11:00 AM</h6>
                              </div>
                              <div>
                                 <h4>Opening reception</h4>
                                 <p class="mb-0">Settle in, grab some swag, and enjoy a drink with other members of the community before the keynote.</p>
                              </div>
                           </div>
                           <div class="offset-md-1 col-md-6">
                              <div>
                                 <h6 class="mb-3 text-body">Host</h6>
                              </div>
                              <div class="d-flex align-items-center mb-4">
                                 <div>
                                    <img src="assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                 </div>
                                 <div class="ms-3">
                                    <h6 class="mb-0">Sandip Chauhan</h6>
                                    <small>
                                       Software Engineer
                                       <span class="ms-2">@GitHub</span>
                                    </small>
                                 </div>
                              </div>
                              <div>
                                 <h6 class="mb-3 text-body">Speakers</h6>
                              </div>
                              <div>
                                 <img src="assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avatar-md rounded-circle me-2" />
                                 <img src="assets/images/avatar/avatar-4.jpg" alt="avatar" class="avatar avatar-md rounded-circle me-2" />
                                 <img src="assets/images/avatar/avatar-6.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="pillsDaythree" role="tabpanel" aria-labelledby="pillsDaythree-tab" tabindex="0" data-cues="slideInRight">
                        <div class="row g-0">
                           <div class="col-lg-12">
                              <div>
                                 <h4 class="mb-5 pt-2">Day 3 - Mar 31 — Flexible and productive</h4>
                              </div>
                           </div>
                        </div>
                        <div class="row g-0 border-top py-6">
                           <div class="col-md-5">
                              <div>
                                 <h6 class="mb-5">8:00 AM - 10:00 AM</h6>
                              </div>
                              <div class="mb-4 mb-md-0">
                                 <h4>Evening social</h4>
                                 <p class="mb-0">Spend the rest of the evening making connections with other community members over canapés, snacks, and refreshments.</p>
                              </div>
                           </div>
                           <div class="offset-md-1 col-md-6">
                              <div class="d-lg-flex align-items-center justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <div>
                                       <img src="assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                       <h6 class="mb-0">Anita Parmar</h6>
                                       <small>
                                          Software Engineer
                                          <span class="ms-2">@Codescandy</span>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="mt-4 mt-lg-0">
                                    <a href="#!" class="btn btn-primary rounded-pill">View Details</a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="row g-0 border-top py-6">
                           <div class="col-md-5">
                              <div>
                                 <h6 class="mb-5">10:15 AM - 11:45 AM</h6>
                              </div>
                              <div>
                                 <h4>Opening reception</h4>
                                 <p class="mb-0">Settle in, grab some swag, and enjoy a drink with other members of the community before the keynote.</p>
                              </div>
                           </div>
                           <div class="offset-md-1 col-md-6">
                              <div>
                                 <h6 class="mb-3 text-body">Host</h6>
                              </div>
                              <div class="d-flex align-items-center mb-4">
                                 <div>
                                    <img src="assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                 </div>
                                 <div class="ms-3">
                                    <h6 class="mb-0">Sandip Chauhan</h6>
                                    <small>
                                       Software Engineer
                                       <span class="ms-2">@GitHub</span>
                                    </small>
                                 </div>
                              </div>
                              <div>
                                 <h6 class="mb-3 text-body">Speakers</h6>
                              </div>
                              <div>
                                 <img src="assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avatar-md rounded-circle me-2" />
                                 <img src="assets/images/avatar/avatar-4.jpg" alt="avatar" class="avatar avatar-md rounded-circle me-2" />
                                 <img src="assets/images/avatar/avatar-6.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                              </div>
                           </div>
                        </div>

                        <div class="row g-0 border-top pt-6">
                           <div class="col-md-5">
                              <div>
                                 <h6 class="mb-5">12:00 AM - 12:30 AM</h6>
                              </div>
                              <div>
                                 <h4>Keynote presentation + demos</h4>
                                 <p class="mb-0">Featuring a keynote presentation from Jitu Chauhan and live demos from community members.</p>
                              </div>
                           </div>
                           <div class="offset-md-1 col-md-6">
                              <div>
                                 <h6 class="mb-3 text-body">Host</h6>
                              </div>
                              <div class="d-flex align-items-center mb-4">
                                 <div>
                                    <img src="assets/images/avatar/avatar-5.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                 </div>
                                 <div class="ms-3">
                                    <h6 class="mb-0">Jitu Chauhan</h6>
                                    <small>
                                       Software Engineer
                                       <span class="ms-2">@Codescandy</span>
                                    </small>
                                 </div>
                              </div>
                              <div>
                                 <h6 class="mb-3 text-body">Speakers</h6>
                              </div>
                              <div class="d-flex align-items-center mb-3">
                                 <div>
                                    <img src="assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                 </div>
                                 <div class="ms-3">
                                    <h6 class="mb-0">Anita parmar</h6>
                                    <small>
                                       Software Engineer
                                       <span class="ms-2">@Astro</span>
                                    </small>
                                 </div>
                              </div>
                              <div class="d-flex align-items-center">
                                 <div>
                                    <img src="assets/images/avatar/avatar-4.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
                                 </div>
                                 <div class="ms-3">
                                    <h6 class="mb-0">Sandeep Chauhan</h6>
                                    <small>
                                       Lead Software Engineer
                                       <span class="ms-md-2">@CodePersistent</span>
                                    </small>
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
      <!--Event schedule end-->

      <!--Event tickets start-->
      <section class="py-xl-9 py-5 bg-gray-100">
         <div class="container">
            <div class="row" data-cue="fadeIn">
               <div class="col-md-8 offset-md-2">
                  <div class="text-center mb-xl-9 mb-5">
                     <h2 class="mb-3">Event tickets</h2>
                     <p class="mb-0 lead px-xl-7">The price will increase as the conference approaches. Grab your ticket today. Number of tickets is limited.</p>
                  </div>
               </div>
            </div>
            <!-- Pricing Style 3 -->
            <div class="table-responsive-lg">
               <div class="row flex-nowrap me-5 me-lg-0">
                  <div class="col-lg-4 col-md-6 col-12" data-cue="zoomIn">
                     <!--card-->
                     <div class="card bg-gray-200 border-0 p-2 mb-5 mb-xl-0">
                        <div class="card-body bg-white shadow rounded-2">
                           <div class="mb-5">
                              <h3 class="h6 mb-3">All Access</h3>
                              <h2 class="d-flex align-items-center">
                                 <span class="text-dark">$9.00*</span>
                                 <del class="text-body-tertiary ms-1">$29</del>
                              </h2>
                           </div>
                           <div class="mb-5">
                              <span class="small">200 Seats Remaining</span>
                              <div class="progress mt-2" role="progressbar" aria-label="Event Ticket" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                                 <div class="progress-bar bg-primary bg-opacity-50" style="width: 70%"></div>
                              </div>
                           </div>

                           <ul class="list-unstyled">
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">1 Day Access</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Breakfast, Lunch & party</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Live video online Access</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-x-circle-fill text-danger" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                 </svg>
                                 <span class="ms-3">Speaker Meet and Greets</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-x-circle-fill text-danger" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                 </svg>
                                 <span class="ms-3">Get a Certificate</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-x-circle-fill text-danger" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                 </svg>
                                 <span class="ms-3">Assigned Inbound Expert</span>
                              </li>
                           </ul>
                           <div class="d-grid mt-5">
                              <a href="#" class="btn btn-outline-primary">Register Now</a>
                           </div>
                        </div>
                     </div>
                     <!--card-->
                  </div>
                  <div class="col-lg-4 col-md-6 col-12" data-cue="zoomIn">
                     <!--card-->
                     <div class="card bg-primary-subtle border-0 p-2 mb-5 mb-xl-0">
                        <div class="card-body bg-white shadow rounded-2">
                           <div class="mb-5">
                              <h3 class="h6 mb-3">VIP</h3>
                              <h2 class="d-flex align-items-center">
                                 <span class="text-dark">$49.00*</span>
                                 <del class="text-body-tertiary ms-1">$129</del>
                              </h2>
                           </div>
                           <div class="mb-5">
                              <span class="small">67 Seats Remaining</span>
                              <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                                 <div class="progress-bar bg-primary bg-opacity-50" style="width: 90%"></div>
                              </div>
                           </div>

                           <ul class="list-unstyled">
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">3 Day Access</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Breakfast, Lunch & party</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Live video online Access</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Speaker Meet and Greets</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Get a Certificate</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-x-circle-fill text-danger" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                 </svg>
                                 <span class="ms-3">Assigned Inbound Expert</span>
                              </li>
                           </ul>
                           <div class="d-grid mt-5">
                              <a href="#" class="btn btn-primary">Register</a>
                           </div>
                        </div>
                     </div>
                     <!--card-->
                  </div>
                  <div class="col-lg-4 col-md-6 col-12" data-cue="zoomIn">
                     <!--card-->
                     <div class="card bg-gray-200 border-0 p-2 mb-xl-0">
                        <div class="card-body bg-white shadow rounded-2">
                           <div class="mb-5">
                              <h3 class="h6 mb-3">VIP + VIP Plus</h3>
                              <h2 class="d-flex align-items-center">
                                 <span class="text-dark">$89.00*</span>
                                 <del class="text-body-tertiary ms-1">$199</del>
                              </h2>
                           </div>
                           <div class="mb-5">
                              <span class="small">234 Seats Remaining</span>
                              <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                                 <div class="progress-bar bg-primary bg-opacity-50" style="width: 70%"></div>
                              </div>
                           </div>

                           <ul class="list-unstyled">
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">3 Day Access</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Breakfast, Lunch & party</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Live video online Access</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Speaker Meet and Greets</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Get a Certificate</span>
                              </li>
                              <li class="mb-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                       d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                 </svg>
                                 <span class="ms-3">Assigned Inbound Expert</span>
                              </li>
                           </ul>
                           <div class="d-grid mt-5">
                              <a href="#" class="btn btn-outline-primary">Get the VIP plus tickets</a>
                           </div>
                        </div>
                     </div>
                     <!--card-->
                  </div>
               </div>
            </div>
            <div class="row" data-cue="fadeIn">
               <div class="col-md-12">
                  <div class="text-center mt-5">
                     <small>* Additional 5% VAT charge applies to individuals, companies VAT non-payers, and companies in the country.</small>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Event tickets end-->

      <!--Meet sponsors start-->
      <section class="my-xl-9 py-5">
         <div class="container">
            <div class="row" data-cue="fadeIn">
               <div class="col-lg-8 offset-lg-2">
                  <div class="text-center mb-7 pb-2">
                     <h2 class="mb-3">Meet our sponsors</h2>
                     <p class="mb-4">
                        We ‘re proud to work with the best in the business. By learning about your projects up front, we match you for 1-on-1 meetings with those best-suited to tackle the
                        challenge.
                     </p>

                     <a href="#!" class="icon-link icon-link-hover">
                        Become a Sponsor
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                           <path
                              fill-rule="evenodd"
                              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="row row row-cols-2 row-cols-lg-4 row-cols-md-3 justify-content-center g-5">
                     <div class="col" data-cue="slideInDown">
                        <figure class="text-center">
                           <img src="assets/images/brand-logo/brand-logo-1.svg" alt="logo" />
                        </figure>
                     </div>
                     <div class="col" data-cue="slideInDown">
                        <figure class="text-center">
                           <img src="assets/images/brand-logo/brand-logo-2.svg" alt="logo" />
                        </figure>
                     </div>
                     <div class="col" data-cue="slideInDown">
                        <figure class="text-center">
                           <img src="assets/images/brand-logo/brand-logo-3.svg" alt="logo" />
                        </figure>
                     </div>
                     <div class="col" data-cue="slideInDown">
                        <figure class="text-center">
                           <img src="assets/images/brand-logo/brand-logo-4.svg" alt="logo" />
                        </figure>
                     </div>
                     <div class="col" data-cue="slideInDown">
                        <div class="text-center">
                           <img src="assets/images/brand-logo/brand-logo-5.svg" alt="logo" />
                        </div>
                     </div>
                     <div class="col" data-cue="slideInDown">
                        <figure class="text-center">
                           <img src="assets/images/brand-logo/brand-logo-6.svg" alt="logo" />
                        </figure>
                     </div>
                     <div class="col" data-cue="slideInDown">
                        <figure class="text-center">
                           <img src="assets/images/brand-logo/brand-logo-7.svg" alt="logo" />
                        </figure>
                     </div>
                     <div class="col" data-cue="slideInDown">
                        <figure class="text-center">
                           <img src="assets/images/brand-logo/brand-logo-8.svg" alt="logo" />
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Meet sponsors end-->

      <!--Have question start-->
      <section class="py-xl-9 py-5 bg-gray-100">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-6">
                  <div class="mb-7 mb-md-0 me-lg-7" data-cue="fadeIn">
                     <div class="mb-4">
                        <h2 class="mb-3">Still have questions?</h2>
                        <p class="mb-0">We've answered a few FAQs to get you started. But please don't hesitate to reach out with more.</p>
                     </div>

                     <a href="#!" class="btn btn-outline-primary">Support Team</a>
                     <span class="ms-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone text-primary" viewBox="0 0 16 16">
                           <path
                              d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                     </span>
                     <span class="ms-2 text-primary">(000) 123-4567</span>
                  </div>
               </div>
               <div class="col-lg-7 col-md-6" data-cue="fadeIn">
                  <div class="pb-4 border-bottom">
                     <h4 class="mb-3">What is Block Event for developer?</h4>
                     <p class="mb-0">Pellentesque accumsan velit nec mi viverra, bibendum pharetra risus dictum. In finibus turpis at dui accumsan, a vehicula lectus pulvinar.</p>
                  </div>
                  <div class="py-4 border-bottom">
                     <h4 class="mb-3">Will the sessions be recorded for watching later?</h4>
                     <p class="mb-0">Duis iaculis molestie ex, non vehicula nulla tristique id. Etiam sed pellentesque est. Phasellus magna mauris, bibendum a nisi et, vulputate volutpat felis.</p>
                  </div>
                  <div class="py-4 border-bottom">
                     <h4 class="mb-3">Will I receive a certificate of attendance?</h4>
                     <p class="mb-0">Aenean id laoreet nunc, eget efficitur ipsum. Curabitur eu luctus leo. Nullam eu neque sollicitudin, maximus nulla et, mattis tortor.</p>
                  </div>
                  <div class="py-4 border-bottom">
                     <h4 class="mb-3">How do I pay for the conference?</h4>
                     <p class="mb-0">Pellentesque et nunc porta, vehicula libero ut, accumsan elit. Sed vel ante dapibus, fermentum purus eget, viverra leo.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Have question end-->

      <!--Call to action start-->
      <section class="my-lg-7 py-5">
         <div class="container" data-cue="fadeIn">
            <div class="row bg-pattern bg-primary-gradient rounded-3 py-lg-7 py-5 g-0">
               <div class="col-md-8 offset-md-2">
                  <div class="text-center position-relative z-1 px-5" data-cue="zoomIn">
                     <div class="mb-5">
                        <h3 class="h2 text-white-stable mb-3">Ready to attend?</h3>
                        <p class="mb-0 text-white-stable">
                           Ready to join our block community of business leaders for four days of virtual sessions on driving developer happiness and boosting productivity?
                        </p>
                     </div>

                     <a href="#" class="btn btn-dark">Register Now</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Call to action end-->
   </main>
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <!--header-->
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">About Speakers</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--header-->
            <!--body-->
            <div class="modal-body">
               <div class="mb-4">
                  <img src="assets/images/avatar/avatar-1.jpg" alt="testimonial" class="rounded-circle avatar avatar-xl" />
               </div>
               <div class="d-flex align-items-center justify-content-between mb-4">
                  <div>
                     <h4 class="fw-semibold mb-0">Jitu Chauhan</h4>
                     <span class="small fw-medium">Engineer</span>
                  </div>
                  <div>
                     <img src="assets/images/brand-logo/brand-logo-1.svg" alt="img" />
                  </div>
               </div>

               <div class="mb-4">
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu consequat diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                     Mauris non vehicula nulla.
                  </p>
               </div>

               <h5 class="fw-semibold mb-3">Article</h5>

               <ul class="list-group list-group-flush mb-4">
                  <li class="list-group-item px-0">
                     <a href="#" class="text-reset fw-semibold d-flex justify-content-between align-items-center">
                        <span class="fs-6">Modern Software Engineering</span>
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right text-end" viewBox="0 0 16 16">
                              <path
                                 fill-rule="evenodd"
                                 d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                           </svg>
                        </span>
                     </a>
                  </li>
                  <li class="list-group-item px-0 border-bottom">
                     <a href="#" class="text-reset fw-semibold d-flex justify-content-between align-items-center">
                        <span class="fs-6">The Economics of Software Design</span>
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right text-end" viewBox="0 0 16 16">
                              <path
                                 fill-rule="evenodd"
                                 d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                           </svg>
                        </span>
                     </a>
                  </li>
               </ul>

               <a href="#" class="btn btn-instagram btn-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                     <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                  </svg>
               </a>
               <a href="#" class="btn btn-facebook btn-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                     <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg>
               </a>
               <a href="#" class="btn btn-twitter btn-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                     <path
                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                  </svg>
               </a>
               <a href="#" class="btn btn-linkedin btn-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                     <path
                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                  </svg>
               </a>
            </div>
            <!--body-->
         </div>
      </div>
   </div>
   <!--modal-->
   <!--Offcanvas-->
   <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width: 480px">
      <div class="offcanvas-header px-5">
         <h5 class="offcanvas-title" id="offcanvasRightLabel">Event Registration</h5>

         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body pb-5 px-5">
         <p class="mb-4">Sign up for our free online event and get access to all the sessions, on-demand videos, and more.</p>
         <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-12">
               <label for="eventNameInput" class="form-label">
                  Name
                  <span class="text-danger">*</span>
               </label>
               <input type="text" class="form-control" id="eventNameInput" required />
               <div class="invalid-feedback">Please enter name.</div>
            </div>
            <div class="col-md-12">
               <label for="eventJobTitleInput" class="form-label">
                  Job title
                  <span class="text-danger">*</span>
               </label>
               <input type="text" class="form-control" id="eventJobTitleInput" required />
               <div class="invalid-feedback">Please enter Job title.</div>
            </div>
            <div class="col-md-12">
               <label for="eventCompanyInput" class="form-label">
                  Company
                  <span class="text-danger">*</span>
               </label>
               <input type="text" class="form-control" id="eventCompanyInput" required />
               <div class="invalid-feedback">Please enter company.</div>
            </div>
            <div class="col-md-12">
               <label for="eventEmailInput" class="form-label">
                  Work email
                  <span class="text-danger">*</span>
               </label>
               <input type="email" class="form-control" id="eventEmailInput" required />
               <div class="invalid-feedback">Please enter email.</div>
            </div>
            <div class="col-md-12">
               <label for="eventPhoneInput" class="form-label">Phone</label>
               <input type="tel" class="form-control" id="eventPhoneInput" required />
               <div class="invalid-feedback">Please enter phone.</div>
            </div>
            <div class="col-md-12">
               <label for="eventCountryInput" class="form-label">
                  Country
                  <span class="text-danger">*</span>
               </label>
               <input type="text" class="form-control" id="eventCountryInput" required />
               <div class="invalid-feedback">Please enter country.</div>
            </div>
            <div class="col-md-12">
               <label for="eventRegionInput" class="form-label">
                  Which region are you based in?
                  <span class="text-danger">*</span>
               </label>
               <input type="text" class="form-control" id="eventRegionInput" required />
               <div class="invalid-feedback">Please enter region.</div>
            </div>
            <div class="col-md-12">
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="blockCheck" />
                  <label class="form-check-label ms-2 fs-6" for="blockCheck">
                     *Yes please, I'd like Block and affiliates to use my information for personalized communications, targeted advertising and campaign effectiveness. See the
                     <a href="#">Privacy Policy</a>
                     for more details.
                  </label>
               </div>
            </div>
            <div class="d-grid">
               <button class="btn btn-primary" type="submit">Register</button>
            </div>
            <small>All fields marked with an asterisk (*) are required</small>
         </form>
      </div>
   </div>
   <!--offcanvas-->
@endsection