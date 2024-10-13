@extends('layout.mainlayout_admin')

   @section('content')
      <main>
         <!--Account security start-->
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
                        <h1 class="mb-0 h3">Security</h1>
                     </div>
                     <div class="card border-0 mb-4 shadow-sm">
                        <div class="card-body p-lg-5">
                           <div class="mb-5">
                              <h4 class="mb-1">Email Address</h4>
                              <p class="mb-0 fs-6">
                                 Change the email address for your account. Currently You account is
                                 <a href="#" class="text-primary">blocktheme@example.com</a>
                              </p>
                           </div>
                           <form class="row needs-validation" novalidate>
                              <div class="col-lg-7">
                                 <div class="mb-3">
                                    <label for="securityEmailInput" class="form-label">New Email Address</label>
                                    <input type="email" class="form-control" id="securityEmailInput" placeholder="blocktheme@example.cpm" required />
                                    <div class="invalid-feedback">Please enter email address.</div>
                                 </div>
                                 <div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="card border-0 mb-4 shadow-sm">
                        <div class="card-body p-lg-5">
                           <div class="mb-5">
                              <h4 class="mb-1">Change Password</h4>
                              <p class="mb-0 fs-6">We will email you a confirmation when changing your password, so please expect that email after submitting.</p>
                           </div>
                           <form class="row gy-3 needs-validation" novalidate>
                              <div class="col-lg-7">
                                 <label for="securityOldPasswordInput" class="form-label">Old Password</label>
                                 <input type="password" class="form-control" id="securityOldPasswordInput" required />
                                 <div class="invalid-feedback">Please enter old password.</div>
                              </div>

                              <div class="col-lg-7">
                                 <label for="securityNewPasswordInput" class="form-label">New Password</label>
                                 <input type="password" class="form-control" id="securityNewPasswordInput" required />
                                 <div class="invalid-feedback">Please enter new password.</div>
                                 <div class="form-text">Make sure it's at least 15 characters OR at least 8 characters including a number and a lowercase letter. Learn more.</div>
                              </div>

                              <div class="col-lg-7">
                                 <label for="securityConfirmPasswordInput" class="form-label">Confirm New Password</label>
                                 <input type="password" class="form-control" id="securityConfirmPasswordInput" required />
                                 <div class="invalid-feedback">Please enter confirm password.</div>
                                 <div class="form-text">Make sure match with above new password</div>
                              </div>
                              <div class="col-12">
                                 <button class="btn btn-primary me-2" type="submit">Save Changes</button>
                                 <button class="btn btn-light" type="submit">Cancel</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="card border-danger bg-danger bg-opacity-10 mb-4 shadow-sm">
                        <div class="card-body p-lg-5">
                           <div class="mb-4">
                              <h5 class="mb-0">Danger Zone</h5>
                              <small>Deleting your account will</small>
                           </div>
                           <ul class="list-unstyled mb-3">
                              <li class="mb-2">1. Permanently delete your profile, along with your authentication associations.</li>
                              <li class="mb-2">2. Permanently delete all your content, including your articles, bookmarks, comments, upvotes, etc.</li>
                              <li class="mb-2">3. Allow your username to become available to anyone.</li>
                           </ul>
                           <p class="mb-0">
                              Important: deleting your account is unrecoverable and cannot be undone. Feel free to contact
                              <a href="#" class="text-danger">support@blockthemeexample.com</a>
                              with any questions.
                           </p>
                           <div class="mt-3">
                              <a href="#" class="btn btn-danger">Delete Account</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Account security end-->
      </main>
      <!-- Footer -->
   @endsection

