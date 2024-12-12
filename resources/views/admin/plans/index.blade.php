@extends('layout.mainlayout_admin')

@section('content')

   <div class="col-lg-9 col-md-8">
      <div class="mb-4">
         <h1 class="mb-0 h3">Manage Subscription and Token Packs</h1>
      </div>
      <div class="col-12">
         <a href="{{ route('roles.create') }}" class="btn btn-primary" type="submit">Create</a>

      </div>
      
      <div class="card border-0 mb-4 shadow-sm">
         <div class="card-body p-lg-5">
            <div class="mb-5">
               <h4 class="mb-1">Team members</h4>
               <p class="mb-0 fs-6">List of members in your team with their roles.</p>
            </div>
            <div class="table-responsive">
               <table class="datatable_server table table-centered td table-centered th table-lg text-nowrap">
                  <thead class="thead-light">
                     <tr>
                     <th>No</th>
                        <th>Name</th>
                        <th width="280px">Action</th>
                     </tr>
               </thead>
                  <tbody>
                     @forelse ($roles as $key => $role)
                     <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                           <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                           @can('role-edit')
                              <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                           @endcan
                           @can('role-delete')
                              {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                 {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                              {!! Form::close() !!}
                           @endcan
                        </td>
                     </tr>
                     @empty
                        <tr>
                           <td></td>
                           <td>no data</td>
                           <td></td>
                        </tr>
                     @endforelse


                     </tbody>
               </table>
            </div>
            <!-- Custom Pagination Section -->
            <nav aria-label="Page navigation example">
               <ul class="pagination">
                  <li class="page-item" id="prevPage"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#" id="page1">1</a></li>
                  <li class="page-item"><a class="page-link" href="#" id="page2">2</a></li>
                  <li class="page-item"><a class="page-link" href="#" id="page3">3</a></li>
                  <li class="page-item" id="nextPage"><a class="page-link" href="#">Next</a></li>
               </ul>
            </nav>
         </div>
      </div>
   </div>

@endsection

@section('script')
<!-- Include DataTable CSS and JS CDN -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">

      $(document).ready(function() {
         
      });

</script>

@endsection
