@extends('layout.mainlayout_admin')

@section('content')
   <main>
      <!--Pageheader start-->
      <div class="position-relative h-100">
         <div class="container d-flex flex-wrap justify-content-center vh-100 align-items-center w-lg-50 position-lg-absolute">
            <div class="row justify-content-center">
               <div class="w-100 align-self-end col-12">
                  <div class="text-center mb-7">
                     <a href="index.html"><img src="assets/images/logo/brand-icon.svg" alt="brand" class="mb-3" /></a>
                     <h1 class="mb-1">Welcome Back</h1>
                     <p class="mb-0">
                        Don’t have an account yet?
                        <a href="signup-v2.html" class="text-primary">Register here</a>
                     </p>
                  </div>
                  <form class="needs-validation mb-6" novalidate>
                     <div class="mb-3">
                        <label for="signinEmailInput" class="form-label">
                           Email
                           <span class="text-danger">*</span>
                        </label>
                        <input type="email" class="form-control" id="signinEmailInput" required />
                        <div class="invalid-feedback">Please enter email.</div>
                     </div>
                     <div class="mb-3">
                        <label for="formSignUpPassword" class="form-label">Password</label>
                        <div class="password-field position-relative">
                           <input type="password" class="form-control fakePassword" id="formSignUpPassword" required />
                           <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                           <div class="invalid-feedback">Please enter password.</div>
                        </div>
                     </div>

                     <div class="mb-3">
                        <div class="d-flex align-items-center justify-content-between">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="rememberMeCheckbox" />
                              <label class="form-check-label" for="rememberMeCheckbox">Remember me</label>
                           </div>

                           <div><a href="forget-password-v2.html" class="text-primary">Forgot Password</a></div>
                        </div>
                     </div>

                     <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Sign In</button>
                     </div>
                  </form>

                  <span>Sign in with your social network.</span>
                  <div class="d-grid mt-3">
                     <a href="#" class="btn btn-google">
                        <span class="me-3">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                              <path
                                 d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                           </svg>
                        </span>
                        Continue with Google
                     </a>
                  </div>
                  <div class="d-grid mt-2">
                     <a href="#" class="btn btn-facebook">
                        <span class="me-3">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                              <path
                                 d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                           </svg>
                        </span>
                        Continue with Facebook
                     </a>
                  </div>

                  <div class="text-center mt-7">
                     <div class="small mb-3 mb-lg-0 text-body-tertiary">
                        Copyright ©
                        <span class="text-primary"><a href="#">Block Bootstrap 5 Theme</a></span>
                        | Designed by
                        <span class="text-primary"><a href="#">CodesCandy</a></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div
            class="position-fixed top-0 end-0 w-50 h-100 d-none d-xl-block vh-100"
            style="background-image: url(assets/images/sign-in/authentication-img.jpg); background-position: center; background-repeat: no-repeat; background-size: cover"></div>
      </div>
      <!--Pageheader end-->
      <!--Sign up v2 start-->
      <div class="position-absolute start-0 bottom-0 m-4">
         <div class="dropdown">
            <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
               <i class="bi theme-icon-active"></i>
               <span class="visually-hidden bs-theme-text">Toggle theme</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
               <li>
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                     <i class="bi theme-icon bi-sun-fill"></i>
                     <span class="ms-2">Light</span>
                  </button>
               </li>
               <li>
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                     <i class="bi theme-icon bi-moon-stars-fill"></i>
                     <span class="ms-2">Dark</span>
                  </button>
               </li>
               <li>
                  <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                     <i class="bi theme-icon bi-circle-half"></i>
                     <span class="ms-2">Auto</span>
                  </button>
               </li>
            </ul>
         </div>
      </div>
      <!--Sign up v2 end-->
   </main>
@endsection

