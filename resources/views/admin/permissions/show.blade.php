@extends('layout.mainlayout_admin')

@section('content')
  
   <div class="col-lg-9 col-md-8">
      <div class="mb-4">
         <h1 class="mb-0 h3"> Show Permission </h1>
      </div>
      
    <div class="card border-0 shadow-sm mb-4">
       <div class="card-body p-lg-5">
        <div class="mb-5">
            <h4 class="mb-1">Permission Information</h4>
            <p class="mb-0 fs-6">View permission information.</p>
        </div>

        <div class="row mb-3">
           <div class="col-lg-6 col-md-12">
            <span class="fw-bold">Name:</span>
            <span>{{ $permission->name }}</span>
           </div>
        </div>
           
        <div class="row">
           <div class="col-lg-6 col-md-12">
            <label for="profileStateInput" class="form-label">Roles:</label>
            <div class="d-flex flex-wrap">
               @if(!empty($permissionRoles))
                @foreach($permissionRoles as $v)
                   <span class="badge bg-success me-1 mb-1">{{ $v->name }}</span>
                @endforeach
               @endif
            </div>
           </div>
        </div>

       </div>
    </div>
   </div>

       
@endsection
