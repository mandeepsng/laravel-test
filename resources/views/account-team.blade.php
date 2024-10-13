@extends('layout.mainlayout_admin')

@section('content')
      <main>
         <!--Account team start-->
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
                        <h1 class="mb-0 h3">Teams</h1>
                     </div>
                     <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-lg-5">
                           <div class="mb-5">
                              <h4 class="mb-1">Add team members</h4>
                              <p class="fs-6 mb-0">Invite as many team members as you need to help run this account. Learn More</p>
                           </div>
                           <form class="row g-3 needs-validation" novalidate>
                              <div class="col-lg-6 col-md-12">
                                 <label for="formGroupEmailInput" class="form-label">Email</label>
                                 <input type="email" class="form-control" id="formGroupEmailInput" placeholder="Team member’s email" required />
                                 <div class="invalid-feedback">Please enter an email.</div>
                              </div>
                              <div class="col-lg-6 col-md-12">
                                 <label for="formGroupRoleInput" class="form-label">Role</label>
                                 <select class="form-select" id="formGroupRoleInput" required>
                                    <option selected disabled value="">Role</option>
                                    <option value="Owner">Owner</option>
                                    <option value="Front End Developer">Front End Developer</option>
                                    <option value="Full Stack Developer">Full Stack Developer</option>
                                 </select>
                              </div>
                              <div class="col-12">
                                 <button class="btn btn-primary" type="submit">Send Invitation</button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="card border-0 mb-4 shadow-sm">
                        <div class="card-body p-lg-5">
                           <div class="mb-5">
                              <h4 class="mb-1">Team members</h4>
                              <p class="mb-0 fs-6">List of member are in your team with its roles.</p>
                           </div>
                           <div class="table-responsive">
                              <table class="table table-centered td table-centered th table-lg text-nowrap">
                                 <thead>
                                    <tr>
                                       <th scope="col">
                                          <div class="fs-6 text-dark fw-semibold">Member</div>
                                       </th>
                                       <th scope="col">
                                          <div class="fs-6 text-dark fw-semibold">Role</div>
                                       </th>
                                       <th scope="col"></th>
                                       <th scope="col"></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <div class="d-flex align-items-center">
                                             <img src="assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                                             <div class="ms-3">
                                                <div class="fs-5 fw-semibold text-dark">Jitu Chauhan</div>
                                                <small>anitaexample@block.com</small>
                                             </div>
                                          </div>
                                       </td>
                                       <td><span>Owner</span></td>
                                       <td></td>
                                       <td></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">
                                          <div class="d-flex align-items-center">
                                             <img src="assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                                             <div class="ms-3">
                                                <div class="fs-5 fw-semibold text-dark">Anita parmar</div>
                                                <small>anitaexample@block.com</small>
                                             </div>
                                          </div>
                                       </th>
                                       <td><span>Front End Developer</span></td>
                                       <td></td>
                                       <td>
                                          <a href="#" class="btn btn-sm btn-dark me-2">Edit</a>
                                          <a href="#" class="btn btn-sm btn-light">Remove</a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <th scope="row">
                                          <div class="d-flex align-items-center">
                                             <img src="assets/images/avatar/avatar-9.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                                             <div class="ms-3">
                                                <div class="fs-5 fw-semibold text-dark">Sandip Chauhan</div>
                                                <small>sandipexample@block.com</small>
                                             </div>
                                          </div>
                                       </th>
                                       <td><span>Full Stack Developer</span></td>
                                       <td></td>
                                       <td>
                                          <a href="#" class="btn btn-sm btn-dark me-2">Edit</a>
                                          <a href="#" class="btn btn-sm btn-light">Remove</a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Account team end-->
      </main>
@endsection
