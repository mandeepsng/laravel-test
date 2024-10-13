@extends('layout.mainlayout_admin')

   @section('content')
      <main>
         <!--Account notification start-->
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
                        <div class="mb-4 d-flex align-items-center justify-content-between">
                           <h1 class="mb-0 h3">Notifications</h1>
                           <a href="#" class="btn btn-outline-primary">
                              <span class="me-2">
                                 Pause
                                 <span class="d-none d-md-inline-flex">all notifications</span>
                              </span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                 <path
                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                              </svg>
                           </a>
                        </div>
                     </div>
                     <div class="card border-0 mb-4 shadow-sm">
                        <div class="card-body p-lg-5">
                           <div class="mb-4">
                              <h4 class="mb-1">Default notifications email</h4>
                              <p class="mb-0 fs-5">Choose where you'd like emails to be sent. You can add more email addresses.</p>
                           </div>
                           <form class="row align-items-center g-lg-3 g-2">
                              <div class="col-lg-6">
                                 <label for="chooseEmail" class="form-label visually-hidden">Choose Email</label>
                                 <select class="form-select" id="chooseEmail">
                                    <option selected disabled value="">Choose...</option>
                                    <option selected value="blocktheme@example.com">blocktheme@example.com</option>
                                    <option value="block_theme@example.com">block_theme@example.com</option>
                                 </select>
                              </div>
                              <div class="col-lg-6">
                                 <a href="#" class="text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                       <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                    <span class="ms-2">Add New Email</span>
                                 </a>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="card border-0 mb-4 shadow-sm">
                        <div class="card-body p-lg-5">
                           <div class="mb-5">
                              <h4 class="mb-1">Email notifications</h4>
                              <p class="fs-6 mb-0">Receive notifications via email so you never miss a mention, reply, upvote or comment on block theme.</p>
                           </div>

                           <h6 class="mb-3">Send me emails for:</h6>
                           <form>
                              <div class="form-check form-switch mb-3">
                                 <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchNewActivity" />
                                 <label class="form-check-label ms-2" for="flexSwitchNewActivity">New activity notifications (mentions, replies, etc.)</label>
                              </div>
                              <div class="form-check form-switch mb-3">
                                 <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckUpdates" checked />
                                 <label class="form-check-label ms-2" for="flexSwitchCheckUpdates">News and Updatest</label>
                              </div>
                              <div class="form-check form-switch mb-3">
                                 <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckMarket" />
                                 <label class="form-check-label ms-2" for="flexSwitchCheckMarket">Marketing updates</label>
                              </div>
                              <div class="form-check form-switch mb-3">
                                 <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckEmail" />
                                 <label class="form-check-label ms-2" for="flexSwitchCheckEmail">Email me System notifications (security related, always on)</label>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="card border-0 mb-4 shadow-sm">
                        <div class="card-body p-lg-5">
                           <div class="mb-5">
                              <h4 class="mb-1">Push notifications</h4>
                              <p class="fs-6 mb-0">The block theme notification system notifies you of important events such as replies, mentions, updates, etc.</p>
                           </div>

                           <h6 class="mb-3">Send me emails for:</h6>
                           <form>
                              <div class="form-check form-switch mb-3">
                                 <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckActivity" />
                                 <label class="form-check-label ms-2" for="flexSwitchCheckActivity">
                                    <span class="fs-6 fw-semibold text-dark">Comments</span>
                                    <small>The block theme notification system notifies you of important events such as replies, mentions, updates, etc.</small>
                                 </label>
                              </div>
                              <div class="form-check form-switch mb-3">
                                 <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckNews" checked />
                                 <label class="form-check-label ms-2" for="flexSwitchCheckNews">
                                    <span class="fs-6 fw-semibold text-dark">Reminders</span>
                                    <small>The block theme notification system notifies you of important events such as replies, mentions, updates, etc.</small>
                                 </label>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Account notification end-->
      </main>
   @endsection
