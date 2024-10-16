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
                        <div class="mb-4">
                           <h1 class="mb-2">Work with Block. Join Us.</h1>
                           <p class="mb-0">
                              We're always on the lookout for passionate and inspired individuals looking to do impactful work and make positive change. Sound like you? You might belong at Blocks.
                           </p>
                        </div>
                        <a href="#openPosition" class="btn btn-dark me-2">Open Positions</a>
                        <a href="#!" class="btn btn-outline-primary">Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Pageheader end-->
         <!--Image start-->
         <div class="my-xl-0 my-4">
            <div class="mx-auto overflow-x-hidden">
               <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 justify-content-center g-1 mb-lg-7">
                  <div class="col">
                     <figure>
                        <img src="assets/images/career/career-img-1.jpg" alt="career" class="img-fluid" />
                     </figure>
                  </div>
                  <div class="col">
                     <figure>
                        <img src="assets/images/career/career-img-2.jpg" alt="career" class="img-fluid" />
                     </figure>
                  </div>
                  <div class="col">
                     <figure>
                        <img src="assets/images/career/career-img-3.jpg" alt="career" class="img-fluid" />
                     </figure>
                  </div>
                  <div class="col col-md-6">
                     <figure>
                        <img src="assets/images/career/career-img-4.jpg" alt="career" class="img-fluid" />
                     </figure>
                  </div>
                  <div class="col-12 col-md-6">
                     <figure>
                        <img src="assets/images/career/career-img-5.jpg" alt="career" class="img-fluid" />
                     </figure>
                  </div>
               </div>
            </div>
            <div class="container py-5">
               <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="mb-4 mb-sm-0">
                        <small class="text-uppercase ls-md fw-bold text-primary">Our culture</small>
                        <p class="mb-0 lead mt-3">We base our philosophy on the principles of learning, collaboration, transparency, experimentation and passion.</p>
                     </div>
                  </div>
                  <div class="offset-xl-1 col-xl-4 col-md-6">
                     <ul class="mb-0 list-unstyled">
                        <li class="mb-2 d-flex">
                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-dark mt-1" viewBox="0 0 16 16">
                              <path
                                 d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                           </svg>
                           <span class="ms-2">
                              We are
                              <span class="text-dark fw-semibold">goal-driven</span>
                              and
                              <span class="text-dark fw-semibold">dedicated</span>
                           </span>
                        </li>
                        <li class="mb-2 d-flex">
                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-dark mt-1" viewBox="0 0 16 16">
                              <path
                                 d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                           </svg>
                           <span class="ms-2">
                              We
                              <span class="text-dark fw-semibold">use our own tools</span>
                              every day
                           </span>
                        </li>
                        <li class="mb-2 d-flex">
                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-dark mt-1" viewBox="0 0 16 16">
                              <path
                                 d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                           </svg>
                           <span class="ms-2">
                              We thrive together with our
                              <span class="text-dark fw-semibold">community</span>
                           </span>
                        </li>
                        <li class="mb-2 d-flex">
                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-dark mt-1" viewBox="0 0 16 16">
                              <path
                                 d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                           </svg>
                           <span class="ms-2">
                              We are
                              <span class="text-dark fw-semibold">customer obsessed</span>
                           </span>
                        </li>
                        <li class="mb-2 d-flex">
                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-dark mt-1" viewBox="0 0 16 16">
                              <path
                                 d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                           </svg>
                           <span class="ms-2">
                              We believe in
                              <span class="text-dark fw-semibold">people's ability to grow</span>
                           </span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!--Image end-->
         <!--Our benefits start-->
         <section class="my-xl-9 my-4">
            <div class="container">
               <div class="row">
                  <div class="col-xl-4 offset-xl-4 col-md-12">
                     <div class="text-center mb-xl-7 mb-5">
                        <small class="text-uppercase ls-md fw-semibold text-primary">Our benefits</small>
                        <h2 class="mt-3 mb-0">Work Happier With Us</h2>
                     </div>
                  </div>
               </div>
               <div class="row g-6">
                  <div class="col-md-6">
                     <div class="d-flex">
                        <div class="icon-xl icon-shape rounded-circle bg-warning bg-opacity-10 flex-shrink-0">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-prescription2 text-warning-emphasis" viewBox="0 0 16 16">
                              <path d="M7 6h2v2h2v2H9v2H7v-2H5V8h2V6Z" />
                              <path
                                 d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v10.5a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 3 14.5V4a1 1 0 0 1-1-1V1Zm2 3v10.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V4H4ZM3 3h10V1H3v2Z" />
                           </svg>
                        </div>
                        <div class="ms-4">
                           <h4>Inclusive Health Package</h4>
                           <p class="mb-0">We care about your well-being, and offer dental and vision benefits for you and your family. No stress on health expenses.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="d-flex">
                        <div class="icon-xl icon-shape rounded-circle bg-danger bg-opacity-10 flex-shrink-0">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-globe-asia-australia text-danger" viewBox="0 0 16 16">
                              <path
                                 d="m10.495 6.92 1.278-.619a.483.483 0 0 0 .126-.782c-.252-.244-.682-.139-.932.107-.23.226-.513.373-.816.53l-.102.054c-.338.178-.264.626.1.736a.476.476 0 0 0 .346-.027ZM7.741 9.808V9.78a.413.413 0 1 1 .783.183l-.22.443a.602.602 0 0 1-.12.167l-.193.185a.36.36 0 1 1-.5-.516l.112-.108a.453.453 0 0 0 .138-.326ZM5.672 12.5l.482.233A.386.386 0 1 0 6.32 12h-.416a.702.702 0 0 1-.419-.139l-.277-.206a.302.302 0 1 0-.298.52l.761.325Z" />
                              <path
                                 d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM1.612 10.867l.756-1.288a1 1 0 0 1 1.545-.225l1.074 1.005a.986.986 0 0 0 1.36-.011l.038-.037a.882.882 0 0 0 .26-.755c-.075-.548.37-1.033.92-1.099.728-.086 1.587-.324 1.728-.957.086-.386-.114-.83-.361-1.2-.207-.312 0-.8.374-.8.123 0 .24-.055.318-.15l.393-.474c.196-.237.491-.368.797-.403.554-.064 1.407-.277 1.583-.973.098-.391-.192-.634-.484-.88-.254-.212-.51-.426-.515-.741a6.998 6.998 0 0 1 3.425 7.692 1.015 1.015 0 0 0-.087-.063l-.316-.204a1 1 0 0 0-.977-.06l-.169.082a1 1 0 0 1-.741.051l-1.021-.329A1 1 0 0 0 11.205 9h-.165a1 1 0 0 0-.945.674l-.172.499a1 1 0 0 1-.404.514l-.802.518a1 1 0 0 0-.458.84v.455a1 1 0 0 0 1 1h.257a1 1 0 0 1 .542.16l.762.49a.998.998 0 0 0 .283.126 7.001 7.001 0 0 1-9.49-3.409Z" />
                           </svg>
                        </div>
                        <div class="ms-4">
                           <h4>Flexible Working Style</h4>
                           <p class="mb-0">We are 100% remote-friendly, work with team mates from different time zones across the globe.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="d-flex">
                        <div class="icon-xl icon-shape rounded-circle bg-primary bg-opacity-10 flex-shrink-0">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill text-primary" viewBox="0 0 16 16">
                              <path
                                 d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                           </svg>
                        </div>
                        <div class="ms-4">
                           <h4>Diversity and Inclusion</h4>
                           <p class="mb-0">Our strength lies in team members from diverse backgrounds with a culture of inclusion where everyone feels respected.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="d-flex">
                        <div class="icon-xl icon-shape rounded-circle bg-success bg-opacity-10 flex-shrink-0">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-easel text-success" viewBox="0 0 16 16">
                              <path
                                 d="M8 0a.5.5 0 0 1 .473.337L9.046 2H14a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1.85l1.323 3.837a.5.5 0 1 1-.946.326L11.092 11H8.5v3a.5.5 0 0 1-1 0v-3H4.908l-1.435 4.163a.5.5 0 1 1-.946-.326L3.85 11H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4.954L7.527.337A.5.5 0 0 1 8 0zM2 3v7h12V3H2z" />
                           </svg>
                        </div>
                        <div class="ms-4">
                           <h4>Learn And Grow</h4>
                           <p class="mb-0">We help you grow in your career with ongoing mentorship, and send you to events so you can build your network.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="d-flex">
                        <div class="icon-xl icon-shape rounded-circle bg-info bg-opacity-10 flex-shrink-0">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-emoji-heart-eyes text-info" viewBox="0 0 16 16">
                              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path
                                 d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z" />
                           </svg>
                        </div>
                        <div class="ms-4">
                           <h4>Balanced Working Life</h4>
                           <p class="mb-0">We offer an open vacation policy with a recommended 4-weeks per year. Recharge whenever you need to.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="d-flex">
                        <div class="icon-xl icon-shape rounded-circle bg-primary bg-opacity-10 flex-shrink-0">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cash-stack text-primary" viewBox="0 0 16 16">
                              <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                              <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
                           </svg>
                        </div>
                        <div class="ms-4">
                           <h4>Generous Perks Program</h4>
                           <p class="mb-0">We offer several perk stipends to support healthy home office ergonomics, continuous learning, wellness and connectivity.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Our benefits end-->
         <section class="mb-xl-9 py-4" id="openPosition">
            <div class="container pb-lg-7">
               <div class="row mb-7">
                  <div class="col-lg-6 offset-lg-3 col-md-12">
                     <div class="text-center mb-xl-7 mb-5">
                        <h2>Open Positions</h2>
                        <p class="mb-0">We're currently looking for help in the following areas:</p>
                     </div>
                     <div class="row g-3">
                        <div class="col-md-6">
                           <label for="location" class="form-label visually-hidden">All Location</label>
                           <select class="form-select" id="location">
                              <option selected disabled value="">All Location</option>
                              <option value="United States">United States</option>
                              <option value="Germany">Germany</option>
                              <option value="Australia">Australia</option>
                           </select>
                        </div>
                        <div class="col-md-6">
                           <label for="department" class="form-label visually-hidden">All Location</label>
                           <select class="form-select" id="department">
                              <option selected disabled value="">All department</option>
                              <option value="UI Designer">UI UX Designer</option>
                              <option value="Front End Developer">Front End Developer</option>
                              <option value="Full Stck Developer">Full Stack Developer</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-lg-12">
                     <div class="list-group list-group-flush">
                        <a href="#!" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between border-top p-4">
                           <div>
                              <h4 class="mb-1">Technical Program Manager</h4>
                              <span class="text-primary fw-medium">United States</span>
                           </div>
                           <span class="icon-link icon-link-hover link-primary">
                              Apply
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg>
                           </span>
                        </a>

                        <a href="#!" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between p-4" aria-current="true">
                           <div>
                              <h4>Software Engineer, Analytics</h4>
                              <span class="text-primary fw-medium">Germany</span>
                           </div>
                           <div>
                              <span class="icon-link icon-link-hover link-primary">
                                 Apply
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path
                                       fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                 </svg>
                              </span>
                           </div>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between border-bottom p-4" aria-current="true">
                           <div>
                              <h4>Product Marketing Manager</h4>
                              <span class="text-primary fw-medium">Australia</span>
                           </div>
                           <div>
                              <span class="icon-link icon-link-hover link-primary">
                                 Apply
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path
                                       fill-rule="evenodd"
                                       d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                 </svg>
                              </span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
@endsection
