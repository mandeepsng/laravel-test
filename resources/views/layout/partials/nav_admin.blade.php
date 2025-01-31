<!-- Navbar -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light w-100">
       <div class="container px-3">
          <a class="navbar-brand" href="{{ route('welcome')}}"><img src="assets/images/logo/saas-png-logo.png" alt /></a>
          <button class="navbar-toggler offcanvas-nav-btn" type="button">
             <i class="bi bi-list"></i>
          </button>
          <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
             <div class="offcanvas-header">
                <a href="{{ route('index')}}" class="text-inverse"><img src="assets/images/logo/logo.svg" alt /></a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
             </div>
             <div class="offcanvas-body pt-0 align-items-center">

                <ul class="navbar-nav mx-auto align-items-lg-center">
                   <li><a class="dropdown-item" href="{{ route('pricing')}}">Pricing</a></li>
                   <li><a class="dropdown-item" href="{{ route('landing-sass-v1')}}">Reviews</a></li>
                   <li><a class="dropdown-item" href="{{ route('faq')}}">FAQ</a></li>
                   
                   @guest 
                   {{-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Landings</a>
                      <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="{{ route('index')}}">Landing Overview</a></li>
                         <li><a class="dropdown-item" href="{{ route('landing-sass-v1')}}">Saas v.1</a></li>
                         <li><a class="dropdown-item" href="{{ route('landing-sass-v2')}}">Sass v.2</a></li>
                         <li>
                            <a class="dropdown-item" href="{{ route('landing-it-company')}}">
                               IT Company
                               <span class="badge text-bg-success ms-2">New</span>
                            </a>
                         </li>
                         <li><a class="dropdown-item" href="{{ route('landing-accounting')}}">Accounting</a></li>
                         <li><a class="dropdown-item" href="{{ route('landing-finance')}}">Finance</a></li>
                         <li><a class="dropdown-item" href="{{ route('landing-jamstack-agancy')}}">Jamstack Agency</a></li>
                         <li><a class="dropdown-item" href="{{ route('landing-conference')}}">Conference</a></li>
                         <li><a class="dropdown-item" href="{{ route('landing-personal')}}">Personal</a></li>
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
                                     <a class="dropdown-item" href="{{ route('blog-list-view')}}">List View</a>
                                     <a class="dropdown-item" href="{{ route('blog')}}">Grid View</a>
                                     <a class="dropdown-item" href="{{ route('blog-grid-thumbnail')}}">Grid View v.2</a>
                                     <a class="dropdown-item" href="{{ route('blog-sidebar')}}">Sidebar</a>
                                     <a class="dropdown-item" href="{{ route('blog-category')}}">Category</a>
                                     <a class="dropdown-item" href="{{ route('blog-single')}}">Single Post</a>
                                  </div>
                                  <div class="mt-3">
                                     <div class="dropdown-header">About</div>
                                     <a class="dropdown-item" href="{{ route('about')}}">About v.1</a>
                                     <a class="dropdown-item" href="{{ route('about-v2')}}">About v.2</a>
                                  </div>
                               </div>
                            </div>
                            <div class="col">
                               <div class="mt-3 mt-lg-0">
                                  <div>
                                     <div class="dropdown-header">Service</div>
                                     <a class="dropdown-item" href="{{ route('service-v1')}}">Service v.1</a>
                                     <a class="dropdown-item" href="{{ route('service-v2')}}">Service v.2</a>
                                     <a class="dropdown-item" href="{{ route('service-v3')}}">Service v.3</a>
                                  </div>
                                  <div class="mt-3">
                                     <div class="dropdown-header">Events</div>

                                     <a class="dropdown-item" href="{{ route('events')}}">List</a>
                                     <a class="dropdown-item" href="{{ route('event-single')}}">Single</a>
                                  </div>
                                  <div class="mt-3">
                                     <div class="dropdown-header">Contact</div>

                                     <a class="dropdown-item" href="{{ route('contact-1')}}">Contact Us</a>
                                     <a class="dropdown-item" href="{{ route('contact-2')}}">Contact Sales</a>
                                  </div>
                               </div>
                            </div>
                            <div class="col">
                               <div class="mt-3 mt-lg-0">
                                  <div>
                                     <div class="dropdown-header">Portfolio</div>

                                     <a class="dropdown-item" href="{{ route('portfolio')}}">Grid View</a>

                                     <a class="dropdown-item" href="{{ route('portfolio-single')}}">Single View</a>
                                  </div>
                                  <div class="mt-3">
                                     <div class="dropdown-header">Pricing</div>
                                     <a class="dropdown-item" href="{{ route('pricing-v1')}}">Pricing v.1</a>
                                     <a class="dropdown-item" href="{{ route('pricing-v2')}}">Pricing v.2</a>
                                  </div>
                                  <div class="mt-3">
                                     <div class="dropdown-header">Career</div>
                                     <a class="dropdown-item" href="{{ route('career')}}">Career</a>
                                  </div>
                               </div>
                            </div>
                            <div class="col">
                               <div class="mt-3 mt-lg-0">
                                  <div>
                                     <div class="dropdown-header">Integration</div>
                                     <a class="dropdown-item" href="{{ route('integration')}}">Grid View</a>
                                     <a class="dropdown-item" href="{{ route('integration-single')}}">Single</a>
                                  </div>
                                  <div class="mt-3">
                                     <div>
                                        <div class="dropdown-header">Case Study</div>
                                        <a class="dropdown-item" href="{{ route('case-study')}}">Grid View</a>
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
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/hero">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/hero-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Hero</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/navbar">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/header-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Navbar</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/about">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/about-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>About</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/blog">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/blog-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Blog</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/carousel">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/carousel-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Carousel</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/case-study">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/case-study-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Case Study</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/cta">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/call-to-action-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Call to Action</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/clients">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/clients-logo-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Client</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/contact">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/contact-section-example.svg" alt="" />
                                  </div>
                                  <span>Contact</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/form">
                                  <div class="rounded d-none d-lg-block mb-lg-2"><img class="w-100 rounded-2" src="assets/images/block/form-snippets-bootstrap.svg" alt="" /></div>
                                  <span>Form</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/faq">
                                  <div class="rounded d-none d-lg-block mb-lg-2"><img class="w-100 rounded-2" src="assets/images/block/faq-section-example.svg" alt="" /></div>
                                  <span>FAQ</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/team">
                                  <div class="rounded d-none d-lg-block mb-lg-2"><img class="w-100 rounded-2" src="assets/images/block/team-snippets-bootstrap.svg" alt="" /></div>
                                  <span>Team</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/footer">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/footer-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Footer</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/features">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/feature-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Features</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/integration">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/integration-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Integration</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/industry">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/industry-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Industry</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/location">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/location-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Location</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/portfolio">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/portfolio-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Portfolio</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/process">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/process-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Process</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/pricing">
                                  <div class="rounded d-none d-lg-block mb-lg-2 bg-gray-200">
                                     <img class="w-100 rounded-2" src="assets/images/block/pricing-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Pricing</span>
                               </a>
                            </div>

                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/facts">
                                  <div class="rounded d-none d-lg-block mb-lg-2">
                                     <img class="w-100 rounded-2" src="assets/images/block/stats-snippets-bootstrap.svg" alt="" />
                                  </div>
                                  <span>Stats</span>
                               </a>
                            </div>
                            <div class="col">
                               <a class="dropdown-item d-block px-0 mb-lg-3" href="blocks/testimonails">
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
                         <li><a class="dropdown-item" href="{{ route('account-profile')}}">Profile</a></li>
                         <li><a class="dropdown-item" href="{{ route('account-security')}}">Security</a></li>
                         <li><a class="dropdown-item" href="{{ route('account-billing')}}">Billing</a></li>
                         <li><a class="dropdown-item" href="{{ route('account-team')}}">Team</a></li>
                         <li><a class="dropdown-item" href="{{ route('account-notification')}}">Notifications</a></li>
                         <li><a class="dropdown-item" href="{{ route('account-app-integration')}}">Integration</a></li>
                         <li><a class="dropdown-item" href="{{ route('account-device-session')}}">Session</a></li>
                         <li><a class="dropdown-item" href="{{ route('account-social-links')}}">Social</a></li>
                         <li><a class="dropdown-item" href="{{ route('account-appearance')}}">Appearance</a></li>
                         <li class="dropdown-submenu dropend">
                            <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                            <ul class="dropdown-menu">
                               <li class="dropdown-header">Simple</li>

                               <li>
                                  <a class="dropdown-item" href="{{ route('signin')}}">Sign In</a>
                               </li>
                               <li>
                                  <a class="dropdown-item" href="{{ route('signup')}}">Sign Up</a>
                               </li>
                               <li>
                                  <a class="dropdown-item" href="{{ route('forget-password')}}">Forget Password</a>
                               </li>
                               <li>
                                  <a class="dropdown-item" href="{{ route('reset-password')}}">Reset Password</a>
                               </li>
                               <li>
                                  <a class="dropdown-item" href="{{ route('otp-varification')}}">OTP Varification</a>
                               </li>
                               <li><hr class="dropdown-divider" /></li>
                               <li class="dropdown-header">Side Cover</li>

                               <li>
                                  <a class="dropdown-item" href="{{ route('signin-v2')}}">Sign In</a>
                               </li>

                               <li>
                                  <a class="dropdown-item" href="{{ route('signup-v2')}}">Sign Up</a>
                               </li>

                               <li>
                                  <a class="dropdown-item" href="{{ route('forget-password-v2')}}">Forget Password</a>
                               </li>
                               <li>
                                  <a class="dropdown-item" href="{{ route('reset-password-v2')}}">Reset Password</a>
                               </li>
                               <li>
                                  <a class="dropdown-item" href="{{ route('otp-varification-v2')}}">OTP Varification</a>
                               </li>
                            </ul>
                         </li>
                         <li class="dropdown-submenu dropend">
                            <a class="dropdown-item dropdown-toggle" href="#">Utility</a>
                            <ul class="dropdown-menu">
                               <li>
                                  <a class="dropdown-item" href="{{ route('404-error')}}">404 Error</a>
                               </li>
                               <li>
                                  <a class="dropdown-item" href="{{ route('changelog')}}">Changelog</a>
                               </li>
                            </ul>
                         </li>
                      </ul>
                   </li>
                   <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                      <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item mb-3 text-body" href="docs/index">
                            <div class="d-flex align-items-center">
                               <i class="bi bi-file-text fs-4 text-primary"></i>
                               <div class="ms-3 lh-1">
                                  <h5 class="mb-1">Documentations</h5>
                                  <p class="mb-0 fs-6">Browse the all documentation</p>
                               </div>
                            </div>
                         </a>

                         <a class="dropdown-item text-body" href="docs/changelog">
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
                   </li> --}}
                   @endguest
                </ul>
                  

                <div class="mt-3 mt-lg-0 d-flex align-items-center">

                  @guest
                        @if (Route::has('login'))
                              <a href="{{ route('signin')}}" class="btn btn-light mx-2">{{ __('Login') }}</a>
                        @endif

                        @if (Route::has('register'))
                              <a href="{{ route('signup')}}" class="btn btn-primary">{{ __('Register') }}</a>
                        @endif
                  @else
                        <a class="btn btn-primary me-2" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                        </form>

                        <a class="btn btn-primary" href="{{ route('admin.home') }}">
                              {{ __('Dashboard') }}
                        </a>
                  
                  @endguest

                   {{-- <a href="{{ route('signin')}}" class="btn btn-light mx-2">Login</a> --}}
                   {{-- <a href="{{ route('signup')}}" class="btn btn-primary">Create account</a> --}}
                </div>
             </div>
          </div>
       </div>
    </nav>
 </header>