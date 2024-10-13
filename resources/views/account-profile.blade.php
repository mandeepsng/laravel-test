@extends('layout.mainlayout_admin')

   @section('content')
      <main>
         <!--Account profile Start-->
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
                        <h1 class="mb-0 h3">Profile</h1>
                     </div>
                     <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-lg-5">
                           <div class="mb-5">
                              <h4 class="mb-1">Profile Picture</h4>
                              <p class="mb-0 fs-6">Upload a picture to make your profile stand out and let people recognize your comments and contributions easily!</p>
                           </div>
                           <div class="d-flex align-items-center">
                              <img src="assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                              <div class="ms-4">
                                 <h5 class="mb-0">Your photo</h5>
                                 <small>Allowed *.jpeg, *.jpg, *.png, *.gif max size of 4 MB</small>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-lg-5">
                           <div class="mb-5">
                              <h4 class="mb-1">Account Information</h4>
                              <p class="mb-0 fs-6">Edit your personal information and address.</p>
                           </div>
                           <form class="row g-3 needs-validation" novalidate>
                              <div class="col-lg-6 col-md-12">
                                 <label for="profileFirstNameInput" class="form-label">First Name</label>
                                 <input type="text" class="form-control" id="profileFirstNameInput" value="Jitu" required />
                                 <div class="invalid-feedback">Please enter firstname.</div>
                              </div>
                              <div class="col-lg-6 col-md-12">
                                 <label for="profileLastNameInput" class="form-label">Last Name</label>
                                 <input type="text" class="form-control" id="profileLastNameInput" value="Chauhan" required />
                                 <div class="invalid-feedback">Please enter lastname.</div>
                              </div>
                              <div class="col-lg-6">
                                 <label for="profilePhoneInput" class="form-label">Phone</label>
                                 <input type="text" class="form-control input-phone" id="profilePhoneInput" placeholder="+1 4XX XXX XXXX" required />
                                 <div class="invalid-feedback">Please enter phone.</div>
                              </div>
                              <div class="col-lg-6">
                                 <label for="profileBirthdayInput" class="form-label">Birthday</label>
                                 <input type="text" class="form-control input-date" id="profileBirthdayInput" placeholder="dd/mm/yyyy" required />
                                 <div class="invalid-feedback">Please enter birthday.</div>
                              </div>
                              <div class="col-lg-12">
                                 <label for="profileAddressInput" class="form-label">Address Line</label>
                                 <input type="text" class="form-control" id="profileAddressInput" required />
                                 <div class="invalid-feedback">Please enter addredss.</div>
                              </div>
                              <div class="col-lg-3">
                                 <label for="profileCountryInput" class="form-label">Country</label>
                                 <select class="form-select" id="profileCountryInput" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option selected value="">India</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Germany">Germany</option>
                                 </select>
                                 <div class="invalid-feedback">Please select state.</div>
                              </div>
                              <div class="col-lg-3">
                                 <label for="profileStateInput" class="form-label">State / Region</label>
                                 <select class="form-select" id="profileStateInput" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option selected value="">Gujarat</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                 </select>
                                 <div class="invalid-feedback">Please select state / region.</div>
                              </div>
                              <div class="col-lg-3">
                                 <label for="profileCityInput" class="form-label">State</label>
                                 <select class="form-select" id="profileCityInput" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Ahmedabad" selected="">Ahmedabad</option>
                                    <option value="Surat">Surat</option>
                                    <option value="Vapi">Vapi</option>
                                    <option value="Rajkot">Rajkot</option>
                                 </select>
                                 <div class="invalid-feedback">Please select a valid city.</div>
                              </div>
                              <div class="col-lg-3">
                                 <label for="profilezipInput" class="form-label">Zip/Code</label>
                                 <input type="text" class="form-control" id="profilezipInput" required />
                                 <div class="invalid-feedback">Please provide a zip.</div>
                              </div>
                              <div class="col-12 mt-4">
                                 <button class="btn btn-primary me-2" type="submit">Save Changes</button>
                                 <button class="btn btn-light" type="submit">Cancel</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Account profile end-->
      </main>
      <!-- Footer -->
   @endsection
