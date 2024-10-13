
@extends('layout.mainlayout_admin')

   @section('content')
      <main>
         <!--Avcount appearance start-->
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
                        <h1 class="mb-0 h3">Appearance</h1>
                     </div>
                     <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-lg-5">
                           <div class="mb-5">
                              <h4 class="mb-1">Theme preferences</h4>
                              <p class="fs-6 mb-0">Choose how block looks to you. Select a single theme, or sync with your system and automatically switch between day and night themes.</p>
                           </div>
                           <div class="mb-5">
                              <h5 class="mb-2">Theme mode</h5>
                              <form class="row align-items-center">
                                 <div class="col-lg-5">
                                    <label for="lightDarkTheme" class="form-label visually-hidden">System</label>
                                    <select class="form-select" id="lightDarkTheme">
                                       <option selected>Sync with System</option>
                                       <option value="Light">Light</option>
                                       <option value="Dark">Dark</option>
                                    </select>
                                 </div>
                                 <div class="col-lg-7">
                                    <p class="fs-6 mb-0 mt-2 mt-lg-0">Block theme will match your system active settings.</p>
                                 </div>
                              </form>
                           </div>
                           <form>
                              <div class="row">
                                 <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="card h-100">
                                       <div class="card-header bg-white">
                                          <div class="form-check">
                                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioLight" checked />
                                             <label class="form-check-label" for="flexRadioLight">
                                                <span class="fw-semibold fs-5 text-dark ms-1">Light Theme</span>
                                             </label>
                                          </div>
                                       </div>
                                       <div class="card-body">
                                          <p class="card-text fs-6 mb-4">This theme will be active when your system is set to “light mode”</p>
                                          <img src="assets/images/landings/account/light.svg" alt="light" class="w-100" />
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="card h-100">
                                       <div class="card-header bg-white">
                                          <div class="form-check">
                                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDark" />
                                             <label class="form-check-label" for="flexRadioDark">
                                                <span class="fw-semibold fs-5 text-dark ms-1">Dark Theme</span>
                                             </label>
                                          </div>
                                       </div>
                                       <div class="card-body">
                                          <p class="card-text fs-6">This theme will be active when your system is set to “dark mode”</p>
                                          <img src="assets/images/landings/account/dark.svg" alt="dark" class="w-100" />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Avcount appearance end-->
      </main>
      
   @endsection  
      
