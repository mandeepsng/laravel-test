@extends('layout.mainlayout_admin')

@section('content')
   <main class="position-relative">
      <div class="pattern-square"></div>
      <!--Pageheader start-->
      <section class="py-5 py-lg-8">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 offset-xl-4 col-md-12 col-12">
                  <div class="text-center">
                     {{-- <a href="index.html"><img src="assets/images/logo/brand-icon.svg" alt="brand" class="mb-3" /></a> --}}
                     <h1 class="mb-1">Create Account</h1>
                     <p class="mb-0">Sign up now and get free account instant.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Pageheader end-->
      <!--Sign up start-->
      <section>
         <div class="container">
            <div class="row justify-content-center mb-6">
               <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                  <div class="card shadow-sm mb-3">
                     <div class="card-body">
                        <form class="needs-validation mb-6" novalidate method="POST" action="{{ route('register') }}">
                           @csrf

                           <div class="mb-3">
                              <label for="signupFullnameInput" class="form-label">Full Name</label>
                              <input type="text" class="form-control" id="signupFullnameInput" required name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                              <div class="invalid-feedback">Please enter full name</div>
                              @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>

                           <div class="mb-3">
                              <label for="signupEmailInput" class="form-label">
                                 Email
                                 <span class="text-danger">*</span>
                              </label>
                              <input type="email" class="form-control" id="signupEmailInput" name="email" value="{{ old('email') }}" required autocomplete="email" />
                              <div class="invalid-feedback">Please enter email.</div>

                              @error('email')
                                 <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                           </div>
                           <div class="mb-3">
                              <label for="formSignUpPassword" class="form-label">Password</label>
                              <div class="password-field position-relative">
                                 <input type="password" class="form-control fakePassword" id="formSignUpPassword" name="password" required autocomplete="new-password" />
                                 <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                 <div class="invalid-feedback">Please enter password.</div>

                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                           </div>
                           <div class="mb-3">
                              <label for="formSignUpConfirmPassword" class="form-label">Confirm Password</label>
                              <div class="password-field position-relative">
                                 <input type="password" class="form-control fakePassword" id="formSignUpConfirmPassword" name="password_confirmation" required autocomplete="new-password" />
                                 <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                 <div class="invalid-feedback">Please enter password.</div>
                              </div>
                           </div>
                           <div class="mb-3">
                              <div class="mb-4 d-flex align-items-center justify-content-between">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="signupCheckTextCheckbox" />
                                    <label class="form-check-label ms-2" for="signupCheckTextCheckbox">
                                       <a href="#">Terms of Use</a>
                                       &
                                       <a href="#">Privacy Policy</a>
                                    </label>
                                 </div>
                              </div>
                           </div>

                           <div class="d-grid">
                              <button class="btn btn-primary" type="submit">Sign Up</button>
                           </div>
                        </form>

                        <span>Sign up with your social network.</span>
                        <div class="d-grid mt-3">
                           <a href="#" class="btn btn-google">
                              <span class="me-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                    <path
                                       d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                 </svg>
                              </span>
                              Continue with Google
                           </a>
                        </div>
                     </div>
                  </div>

                  <span>
                     Already have an account?
                     <a href="{{ route('login') }}" class="text-primary">Sign in here.</a>
                  </span>
               </div>
            </div>
            {{-- <div class="row">
               <div class="col-lg-12">
                  <div class="text-center">
                     <div class="small mb-3 mb-lg-0 text-body-tertiary">
                        Copyright ©
                        <span class="text-primary"><a href="#">Block Bootstrap 5 Theme</a></span>
                        | Designed by
                        <span class="text-primary"><a href="#">CodesCandy</a></span>
                     </div>
                  </div>
               </div>
            </div> --}}
         </div>
      </section>
      <!--Sign up end-->
      
   </main>
@endsection