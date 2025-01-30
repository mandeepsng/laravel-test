@extends('layout.mainlayout_admin')

   @section('content')

   <div class="col-lg-9 col-md-8">
      <div class="mb-4">
         <h1 class="mb-0 h3">Profile</h1>
      </div>
      
      <div class="card border-0 shadow-sm mb-4">
         <div class="card-body p-lg-5">
            <div class="mb-5">
               <h4 class="mb-1">Account Information</h4>
               <p class="mb-0 fs-6">Edit your personal information and address.</p>
            </div>
            <form class="row g-3 needs-validation" novalidate action="{{ route('users.update', $user) }}" method="POST">
               @csrf
               @method('PUT')
               <div class="col-lg-6 col-md-12">
                  <label for="profileLastNameInput" class="form-label"> Name</label>
                  <input type="text" class="form-control" id="profileLastNameInput" name="name" value="{{ $user->name }}" required />
                  <div class="invalid-feedback">Please enter name.</div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <label for="profileFirstNameInput" class="form-label">Email</label>
                  <input type="text" class="form-control" id="profileFirstNameInput" name="email" value="{{ $user->email }}" required />
                  <div class="invalid-feedback">Please enter email.</div>
               </div>
               
               <div class="col-12 mt-4">
                  <button class="btn btn-primary me-2" type="submit">Save Changes</button>
                  <button class="btn btn-light" type="submit">Cancel</button>
               </div>
            </form>
         </div>
      </div>
   </div>

@endsection
