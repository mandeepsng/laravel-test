@extends('layout.mainlayout_admin')

@section('content')

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

@endsection

