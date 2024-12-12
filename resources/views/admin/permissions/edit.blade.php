@extends('layout.mainlayout_admin')

@section('content')
  
   <div class="col-lg-9 col-md-8">
      <div class="mb-4">
         <h1 class="mb-0 h3"> Edit Permission </h1>
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
               <h4 class="mb-1">Permission Information</h4>
               <p class="mb-0 fs-6">Edit permission details.</p>
            </div>

            {!! Form::model($permission, ['method' => 'PATCH','route' => ['permissions.update', $permission->id]]) !!}
            {{-- <form class="row g-3 needs-validation" novalidate action="{{ route('permissions.update', $permission->id) }}" method="POST"> --}}
               @csrf

               <div class="col-lg-6 col-md-12">
                  <label for="profileFirstNameInput" class="form-label"> Name</label>
                  <input type="text" class="form-control" id="profileFirstNameInput" name="name" value="{{ $permission->name }}" required />
                  <div class="invalid-feedback">Please enter permission name.</div>
               </div>

               <div class="col-12 mt-4">
                  <button class="btn btn-primary me-2" type="submit">Save Changes</button>
                  <button class="btn btn-light" type="submit">Cancel</button>
               </div>
            {{-- </form> --}}

            {!! Form::close() !!}

         </div>
      </div>
   </div>

       
@endsection
