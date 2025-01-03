@extends('layout.mainlayout_admin')

@section('content')

   <div class="col-lg-9 col-md-8">
      <div class="mb-4">
         <h1 class="mb-0 h3">Permissions</h1>
      </div>
      <div class="col-12">
         <a href="{{ route('permissions.create') }}" class="btn btn-primary" type="submit">Create</a>
      </div>
      
      <div class="card border-0 mb-4 shadow-sm">
         <div class="card-body p-lg-5">
            <div class="mb-5">
               <h4 class="mb-1">Permission List</h4>
               <p class="mb-0 fs-6">List of permissions.</p>
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
                     @forelse ($permissions as $key => $permission)
                     <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>
                           <a class="btn btn-info" href="{{ route('permissions.show',$permission->id) }}">Show</a>
                           @can('permission-edit')
                              <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
                           @endcan
                           @can('permission-delete')
                                {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete(event)']) !!}
                                  {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                                <script type="text/javascript">
                                  function confirmDelete(event) {
                                    event.preventDefault();
                                    if (confirm("Are you sure you want to delete this permission?")) {
                                       event.target.closest('form').submit();
                                    }
                                    return false;
                                  }
                                </script>

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
            {{-- <nav aria-label="Page navigation example">
               <ul class="pagination">
                  <li class="page-item" id="prevPage"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#" id="page1">1</a></li>
                  <li class="page-item"><a class="page-link" href="#" id="page2">2</a></li>
                  <li class="page-item"><a class="page-link" href="#" id="page3">3</a></li>
                  <li class="page-item" id="nextPage"><a class="page-link" href="#">Next</a></li>
               </ul>
            </nav> --}}

            @if ($permissions->lastPage() > 1)
               <nav aria-label="Page navigation example">
                  <ul class="pagination">
                  <li class="page-item {{ ($permissions->currentPage() == 1) ? ' disabled' : '' }}">
                     <a class="page-link" href="{{ $permissions->url(1) }}">Previous</a>
                  </li>
                  @for ($i = 1; $i <= $permissions->lastPage(); $i++)
                     <li class="page-item {{ ($permissions->currentPage() == $i) ? ' active' : '' }}">
                           <a class="page-link" href="{{ $permissions->url($i) }}">{{ $i }}</a>
                     </li>
                  @endfor
                  <li class="page-item {{ ($permissions->currentPage() == $permissions->lastPage()) ? ' disabled' : '' }}">
                     <a class="page-link" href="{{ $permissions->url($permissions->currentPage()+1) }}">Next</a>
                  </li>
                  </ul>
               </nav>
            @endif

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
