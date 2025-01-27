@extends('layout.mainlayout_admin')

@section('content')

   <div class="col-lg-9 col-md-8">
      <div class="mb-4">
         <h1 class="mb-0 h3">Hey, {{ Auth::user()->name }}! Welcome to Block.</h1>
      </div>
      <div class="mb-5">
         <h4 class="mb-1">Earning</h4>
         <p class="mb-0 fs-6">Upload a picture to make your profile stand out and let people recognize your comments and contributions easily!</p>
      </div>
      <div class="row mb-5 g-4">
         <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow-sm">
               <div class="card-body">
                  <span>Balance</span>
                  <h3 class="mb-0 mt-4">$0.61</h3>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow-sm">
               <div class="card-body">
                  <span>Past 7 days</span>
                  <h3 class="mb-0 mt-4">$0</h3>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow-sm">
               <div class="card-body">
                  <span>Total Earnings</span>
                  <h3 class="mb-0 mt-4">$0.61</h3>
               </div>
            </div>
         </div>
      </div>

      {{-- <div class="mb-5">
         <h4 class="mb-1">Subscription Status</h4>
         @if (Auth::user()->subscribed('default'))
            <p class="mb-0 fs-6">You are subscribed to the {{ Auth::user()->subscription('default') }} plan.</p>
         @else
            <p class="mb-0 fs-6">You are not subscribed to any plan.</p>
         @endif
      </div> --}}


      <div class="mb-5">
         <h4 class="mb-1">Subscription Status</h4>
         @if ($subscription)
            <p class="mb-0 fs-6">
               Your plan: <strong>{{ $planName }}</strong>
               <br>
               @if ($trialEndsAt)
                  Trial ends at: {{ $trialEndsAt->format('d M, Y') }}
               @endif
               @if ($endsAt)
                  <br>
                  Subscription ends at: {{ $endsAt->format('d M, Y') }}
               @endif
            </p>
         @else
            <p class="mb-0 fs-6">You are not subscribed to any plan.</p>
         @endif
      </div>
      

      <div class="mb-5">
         <a href="{{ url('billing-portal') }}">Manage Subscription and Token Packs</a>
      </div>

      <div class="mb-5">
            <a href="{{ route('billing') }}">
               Billing
         </a>
      </div>

      
      
   </div>

@endsection
