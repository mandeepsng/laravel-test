@extends('layout.mainlayout_admin')

   @section('content')
      <main>
         <!--Device session start-->
         <section class="py-lg-7 py-5 bg-light-subtle">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-4">
                     <div class="d-flex align-items-center mb-4 justify-content-center justify-content-md-start">
                        <img src="assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                        <div class="ms-3">
                           <h5 class="mb-0">Jitu Chauhan</h5>
                           <small>Personal account</small>
                        </div>
                     </div>
                     <!-- Navbar -->
                     <div class="mb-4 text-center text-md-start">
                        <a href="#" class="text-reset">
                           <span>
                              <span>View site / profile</span>
                           </span>
                           <span class="ms-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z" />
                                 <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z" />
                              </svg>
                           </span>
                        </a>
                     </div>
                     <div class="d-md-none text-center d-grid">
                        <button
                           class="btn btn-light mb-3 d-flex align-items-center justify-content-between"
                           type="button"
                           data-bs-toggle="collapse"
                           data-bs-target="#collapseAccountMenu"
                           aria-expanded="false"
                           aria-controls="collapseAccountMenu">
                           Account Menu
                           <i class="bi bi-chevron-down ms-2"></i>
                        </button>
                     </div>
                     <div class="collapse d-md-block" id="collapseAccountMenu">
                        <ul class="nav flex-column nav-account">
                           <li class="nav-item">
                              <a class="nav-link" href="account-home.html">
                                 <i class="align-bottom bx bx-home"></i>
                                 <span class="ms-2">Home</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="account-profile.html">
                                 <i class="align-bottom bx bx-user"></i>
                                 <span class="ms-2">Profile</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" aria-current="page" href="account-security.html">
                                 <i class="align-bottom bx bx-lock-alt"></i>
                                 <span class="ms-2">Security</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="account-billing.html">
                                 <i class="align-bottom bx bx-credit-card-front"></i>
                                 <span class="ms-2">Billing</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="account-team.html">
                                 <i class="align-bottom bx bx-user-plus"></i>
                                 <span class="ms-2">Team</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="account-notification.html">
                                 <i class="align-bottom bx bx-bell"></i>
                                 <span class="ms-2">Notifications</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="account-app-integration.html">
                                 <i class="align-bottom bx bx-box"></i>
                                 <span class="ms-2">Integration</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="account-device-session.html">
                                 <i class="align-bottom bx bx-time"></i>
                                 <span class="ms-2">Session</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="account-social-links.html">
                                 <i class="align-bottom bx bx-link"></i>
                                 <span class="ms-2">Social</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="account-appearance.html">
                                 <i class="align-bottom bx bx-palette"></i>
                                 <span class="ms-2">Appearance</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="index.html">
                                 <i class="align-bottom bx bx-log-out"></i>
                                 <span class="ms-2">Sign Out</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-9 col-md-8">
                     <div class="mb-4">
                        <h1 class="mb-0 h3">Device session</h1>
                     </div>
                     <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-lg-5">
                           <div class="mb-5">
                              <h4 class="mb-1">Web sessions</h4>
                              <p class="fs-6 mb-0">This is a list of devices that have logged into your account. Revoke any sessions that you do not recognize.</p>
                           </div>

                           <div class="accordion" id="accordionExampleOne">
                              <div class="border mb-4 rounded-3 px-4 py-3">
                                 <div class="d-flex align-items-start">
                                    <div class="me-4">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                          <circle cx="8" cy="8" r="8" />
                                       </svg>
                                    </div>
                                    <div class="d-lg-flex align-items-center justify-content-between w-100">
                                       <div class="d-flex">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-display text-primary" viewBox="0 0 16 16">
                                             <path
                                                d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z" />
                                          </svg>
                                          <div class="ms-4">
                                             <h5 class="mb-0">Ahmedabad 102.250.233.120</h5>
                                             <small>Your current session</small>
                                          </div>
                                       </div>
                                       <div class="mt-4 mt-lg-0">
                                          <a
                                             href="#"
                                             class="btn btn-light btn-sm"
                                             data-bs-toggle="collapse"
                                             data-bs-target="#collapseDeviceOne"
                                             aria-expanded="false"
                                             aria-controls="collapseDeviceOne">
                                             See More
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="collapseDeviceOne" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                    <div class="pt-4">
                                       <div class="mb-4">
                                          <h6 class="mb-0">Device:</h6>
                                          <small>Chrome on macOS</small>
                                       </div>
                                       <div class="mb-4">
                                          <h6 class="mb-0">Last Location:</h6>
                                          <small>Ahmedabad, Gujarat, India</small>
                                       </div>

                                       <h6 class="mb-1">Signed in:</h6>
                                       <small>February 28, 2022</small>
                                    </div>
                                 </div>
                              </div>
                              <div class="border mb-4 rounded-3 px-4 py-3">
                                 <div class="d-flex align-items-start">
                                    <div class="me-4">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                          <circle cx="8" cy="8" r="8" />
                                       </svg>
                                    </div>
                                    <div class="d-lg-flex align-items-center justify-content-between w-100">
                                       <div class="d-flex">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-display text-primary" viewBox="0 0 16 16">
                                             <path
                                                d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z" />
                                          </svg>
                                          <div class="ms-4">
                                             <h5 class="mb-0">Ahmedabad 102.250.233.120</h5>
                                             <small>Your current session</small>
                                          </div>
                                       </div>
                                       <div class="mt-4 mt-lg-0">
                                          <a
                                             href="#"
                                             class="btn btn-light btn-sm"
                                             data-bs-toggle="collapse"
                                             data-bs-target="#collapseDeviceTwo"
                                             aria-expanded="false"
                                             aria-controls="collapseDeviceTwo">
                                             See More
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="collapseDeviceTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExampleOne">
                                    <div class="pt-4">
                                       <div class="mb-4">
                                          <h6 class="mb-0">Device:</h6>
                                          <small>Chrome on macOS</small>
                                       </div>
                                       <div class="mb-4">
                                          <h6 class="mb-0">Last Location:</h6>
                                          <small>Ahmedabad, Gujarat, India</small>
                                       </div>

                                       <h6 class="mb-1">Signed in:</h6>
                                       <small>February 28, 2022</small>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-lg-5">
                           <div class="mb-5">
                              <h4 class="mb-1">Mobile sessions</h4>
                              <p class="fs-6 mb-0">Mobile can be used to verify your identity when signing in from a new device and as a two-factor authentication method.</p>
                           </div>

                           <div class="accordion" id="accordionExampleTwo">
                              <div class="border mb-4 rounded-3 px-4 py-3">
                                 <div class="d-flex align-items-start">
                                    <div class="me-4">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                          <circle cx="8" cy="8" r="8" />
                                       </svg>
                                    </div>
                                    <div class="d-lg-flex align-items-center justify-content-between w-100">
                                       <div class="d-flex">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-display text-primary" viewBox="0 0 16 16">
                                             <path
                                                d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z" />
                                          </svg>
                                          <div class="ms-4">
                                             <h5 class="mb-0">Ahmedabad 102.250.233.120</h5>
                                             <small>Your current session</small>
                                          </div>
                                       </div>
                                       <div class="mt-4 mt-lg-0">
                                          <a
                                             href="#"
                                             class="btn btn-light btn-sm"
                                             data-bs-toggle="collapse"
                                             data-bs-target="#collapseMobileOne"
                                             aria-expanded="false"
                                             aria-controls="collapseMobileOne">
                                             See More
                                          </a>
                                       </div>
                                    </div>
                                 </div>

                                 <div id="collapseMobileOne" class="accordion-collapse collapse" data-bs-parent="#accordionExampleTwo">
                                    <div class="pt-4">
                                       <div class="mb-4">
                                          <h6 class="mb-0">Device:</h6>
                                          <small>Chrome on macOS</small>
                                       </div>
                                       <div class="mb-4">
                                          <h6 class="mb-0">Last Location:</h6>
                                          <small>Ahmedabad, Gujarat, India</small>
                                       </div>

                                       <h6 class="mb-1">Signed in:</h6>
                                       <small>February 28, 2022</small>
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
         <!--Device session end-->
      </main>
      <!-- Footer -->
   @endsection
