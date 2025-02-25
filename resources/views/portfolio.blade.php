@extends('layout.mainlayout_admin')

@section('content')
   <header>
      <nav class="navbar navbar-expand-lg navbar-light w-100">
         <div class="container px-3">
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo/logo.svg" alt /></a>
            <button class="navbar-toggler offcanvas-nav-btn" type="button">
               <i class="bi bi-list"></i>
            </button>
            <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
               <div class="offcanvas-header">
                  <a href="index.html" class="text-inverse"><img src="assets/images/logo/logo.svg" alt /></a>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
               </div>
               <div class="offcanvas-body pt-0 align-items-center">
                  <ul class="navbar-nav mx-auto align-items-lg-center">
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Landings</a>
                        <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="index.html">Landing Overview</a></li>
                           <li><a class="dropdown-item" href="landing-sass-v1.html">Saas v.1</a></li>
                           <li><a class="dropdown-item" href="landing-sass-v2.html">Sass v.2</a></li>
                           <li>
                              <a class="dropdown-item" href="landing-it-company.html">
                                 IT Company
                                 <span class="badge text-bg-success ms-2">New</span>
                              </a>
                           </li>
                           <li><a class="dropdown-item" href="landing-accounting.html">Accounting</a></li>
                           <li><a class="dropdown-item" href="landing-finance.html">Finance</a></li>
                           <li><a class="dropdown-item" href="landing-jamstack-agancy.html">Jamstack Agency</a></li>
                           <li><a class="dropdown-item" href="landing-conference.html">Conference</a></li>
                           <li><a class="dropdown-item" href="landing-personal.html">Personal</a></li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu dropdown-menu-xxl">
                           <div class="row row-cols-lg-4 row-cols-1 g-0">
                              <div class="col">
                                 <div>
                                    <div>
                                       <div class="dropdown-header">Blog</div>
                                       <a class="dropdown-item" href="blog-list-view.html">List View</a>
                                       <a class="dropdown-item" href="blog.html">Grid View</a>
                                       <a class="dropdown-item" href="blog-grid-thumbnail.html">Grid View v.2</a>
                                       <a class="dropdown-item" href="blog-sidebar.html">Sidebar</a>
                                       <a class="dropdown-item" href="blog-category.html">Category</a>
                                       <a class="dropdown-item" href="blog-single.html">Single Post</a>
                                    </div>
                                    <div class="mt-3">
                                       <div class="dropdown-header">About</div>
                                       <a class="dropdown-item" href="about.html">About v.1</a>
                                       <a class="dropdown-item" href="about-v2.html">About v.2</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="mt-3 mt-lg-0">
                                    <div>
                                       <div class="dropdown-header">Service</div>
                                       <a class="dropdown-item" href="service-v1.html">Service v.1</a>
                                       <a class="dropdown-item" href="service-v2.html">Service v.2</a>
                                       <a class="dropdown-item" href="service-v3.html">Service v.3</a>
                                    </div>
                                    <div class="mt-3">
                                       <div class="dropdown-header">Events</div>

                                       <a class="dropdown-item" href="events.html">List</a>
                                       <a class="dropdown-item" href="event-single.html">Single</a>
                                    </div>
                                    <div class="mt-3">
                                       <div class="dropdown-header">Contact</div>

                                       <a class="dropdown-item" href="contact-1.html">Contact Us</a>
                                       <a class="dropdown-item" href="contact-2.html">Contact Sales</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="mt-3 mt-lg-0">
                                    <div>
                                       <div class="dropdown-header">Portfolio</div>

                                       <a class="dropdown-item" href="portfolio.html">Grid View</a>

                                       <a class="dropdown-item" href="portfolio-single.html">Single View</a>
                                    </div>
                                    <div class="mt-3">
                                       <div class="dropdown-header">Pricing</div>
                                       <a class="dropdown-item" href="pricing-v1.html">Pricing v.1</a>
                                       <a class="dropdown-item" href="pricing-v2.html">Pricing v.2</a>
                                    </div>
                                    <div class="mt-3">
                                       <div class="dropdown-header">Career</div>
                                       <a class="dropdown-item" href="career.html">Career</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="mt-3 mt-lg-0">
                                    <div>
                                       <div class="dropdown-header">Integration</div>
                                       <a class="dropdown-item" href="integration.html">Grid View</a>
                                       <a class="dropdown-item" href="integration-single.html">Single</a>
                                    </div>
                                    <div class="mt-3">
                                       <div>
                                          <div class="dropdown-header">Case Study</div>
                                          <a class="dropdown-item" href="case-study.html">Grid View</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item dropdown dropdown-fullwidth">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blocks</a>
                        <div class="dropdown-menu p-4">
                           <div class="row row-cols-xl-6 row-cols-lg-5 row-cols-1 gx-lg-4">
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/hero.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/hero-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Hero</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/navbar.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/header-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Navbar</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/about.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/about-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>About</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/blog.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/blog-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Blog</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/carousel.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/carousel-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Carousel</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/case-study.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/case-study-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Case Study</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/cta.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/call-to-action-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Call to Action</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/clients.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/clients-logo-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Client</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/contact.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/contact-section-example.svg" alt="" />
                                    </div>
                                    <span>Contact</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/form.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2"><img class="w-100 rounded-2" src="assets/images/block/form-snippets-bootstrap.svg" alt="" /></div>
                                    <span>Form</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/faq.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2"><img class="w-100 rounded-2" src="assets/images/block/faq-section-example.svg" alt="" /></div>
                                    <span>FAQ</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/team.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2"><img class="w-100 rounded-2" src="assets/images/block/team-snippets-bootstrap.svg" alt="" /></div>
                                    <span>Team</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/footer.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/footer-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Footer</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/features.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/feature-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Features</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/integration.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/integration-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Integration</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/industry.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/industry-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Industry</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/location.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/location-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Location</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/portfolio.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/portfolio-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Portfolio</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/process.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/process-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Process</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/pricing.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2 bg-gray-200">
                                       <img class="w-100 rounded-2" src="assets/images/block/pricing-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Pricing</span>
                                 </a>
                              </div>

                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/facts.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/stats-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Stats</span>
                                 </a>
                              </div>
                              <div class="col">
                                 <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/testimonails.html">
                                    <div class="rounded d-none d-lg-block mb-lg-2">
                                       <img class="w-100 rounded-2" src="assets/images/block/testimonial-snippets-bootstrap.svg" alt="" />
                                    </div>
                                    <span>Testimonials</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Accounts</a>
                        <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="account-profile.html">Profile</a></li>
                           <li><a class="dropdown-item" href="account-security.html">Security</a></li>
                           <li><a class="dropdown-item" href="account-billing.html">Billing</a></li>
                           <li><a class="dropdown-item" href="account-team.html">Team</a></li>
                           <li><a class="dropdown-item" href="account-notification.html">Notifications</a></li>
                           <li><a class="dropdown-item" href="account-app-integration.html">Integration</a></li>
                           <li><a class="dropdown-item" href="account-device-session.html">Session</a></li>
                           <li><a class="dropdown-item" href="account-social-links.html">Social</a></li>
                           <li><a class="dropdown-item" href="account-appearance.html">Appearance</a></li>
                           <li class="dropdown-submenu dropend">
                              <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                              <ul class="dropdown-menu">
                                 <li class="dropdown-header">Simple</li>

                                 <li>
                                    <a class="dropdown-item" href="signin.html">Sign In</a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="signup.html">Sign Up</a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="forget-password.html">Forget Password</a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="otp-varification.html">OTP Varification</a>
                                 </li>
                                 <li><hr class="dropdown-divider" /></li>
                                 <li class="dropdown-header">Side Cover</li>

                                 <li>
                                    <a class="dropdown-item" href="signin-v2.html">Sign In</a>
                                 </li>

                                 <li>
                                    <a class="dropdown-item" href="signup-v2.html">Sign Up</a>
                                 </li>

                                 <li>
                                    <a class="dropdown-item" href="forget-password-v2.html">Forget Password</a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="reset-password-v2.html">Reset Password</a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="otp-varification-v2.html">OTP Varification</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="dropdown-submenu dropend">
                              <a class="dropdown-item dropdown-toggle" href="#">Utility</a>
                              <ul class="dropdown-menu">
                                 <li>
                                    <a class="dropdown-item" href="404-error.html">404 Error</a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="changelog.html">Changelog</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                        <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item mb-3 text-body" href="docs/index.html">
                              <div class="d-flex align-items-center">
                                 <i class="bi bi-file-text fs-4 text-primary"></i>
                                 <div class="ms-3 lh-1">
                                    <h5 class="mb-1">Documentations</h5>
                                    <p class="mb-0 fs-6">Browse the all documentation</p>
                                 </div>
                              </div>
                           </a>

                           <a class="dropdown-item text-body" href="docs/changelog.html">
                              <div class="d-flex align-items-center">
                                 <i class="bi bi-clipboard fs-4 text-primary"></i>
                                 <div class="ms-3 lh-1">
                                    <h5 class="mb-1">
                                       Changelog
                                       <span class="text-primary ms-1" id="changelog"></span>
                                    </h5>
                                    <p class="mb-0 fs-6">See what's new</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </li>
                  </ul>
                  <div class="mt-3 mt-lg-0 d-flex align-items-center">
                     <a href="signin.html" class="btn btn-light mx-2">Login</a>
                     <a href="signup.html" class="btn btn-primary">Create account</a>
                  </div>
               </div>
            </div>
         </div>
      </nav>
   </header>
@endsection

