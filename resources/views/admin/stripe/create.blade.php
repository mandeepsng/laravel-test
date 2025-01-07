@extends('layout.mainlayout_admin')

@section('content')
  
   <div class="col-lg-9 col-md-8">
      <div class="mb-4">
         <h1 class="mb-0 h3"> Add Role </h1>
      </div>
      
      @if (count($errors) > 0)
         <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
            </ul>
         </div>
      @endif

      <div class="card border-0 shadow-sm mb-4">
         <div class="card-body p-lg-5">
            <div class="mb-5">
               <h4 class="mb-1">Account Information</h4>
               <p class="mb-0 fs-6">Edit your personal information and address.</p>
            </div>

            <!-- Form to create a new Stripe subscription plan -->
            {!! Form::open(['route' => 'stripe.createPlan', 'method' => 'POST']) !!}
               @csrf
               <div class="col-lg-6 col-md-12">
                  <label for="planNameInput" class="form-label">Plan Name</label>
                  <input type="text" class="form-control" id="planNameInput" name="plan_name" required />
                  <div class="invalid-feedback">Please enter plan name.</div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <label for="planAmountInput" class="form-label">Amount (in cents)</label>
                  <input type="number" class="form-control" id="planAmountInput" name="amount" required />
                  <div class="invalid-feedback">Please enter amount.</div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <label for="planTrialDaysInput" class="form-label">Trial Days</label>
                  <input type="number" class="form-control" id="planTrialDaysInput" name="trial_days" required />
                  <div class="invalid-feedback">Please enter trial days.</div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <label for="planTypeInput" class="form-label">Type</label>
                  <select class="form-control" id="planTypeInput" name="interval" required>
                     <option value="monthly">Monthly</option>
                     <option value="one-time">One-time</option>
                  </select>
                  <div class="invalid-feedback">Please select type.</div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <label for="planFeaturesInput" class="form-label">Features</label>
                  <textarea class="form-control" id="planFeaturesInput" name="features" rows="3" required></textarea>
                  <div class="invalid-feedback">Please enter features.</div>
               </div>
               <div class="col-12 mt-4">
                  <button class="btn btn-primary me-2" type="submit">Create Plan</button>
               </div>
            {!! Form::close() !!}

         </div>
      </div>
   </div>

@endsection