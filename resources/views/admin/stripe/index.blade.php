@extends('layout.mainlayout_admin')

@section('content')

   <div class="col-lg-9 col-md-8">
      <div class="mb-4">
         <h1 class="mb-0 h3">Manage Subscription and Token Packs</h1>
      </div>
      <div class="col-12">
         <a href="{{ route('stripe.create') }}" class="btn btn-primary" type="submit">Create</a>

      </div>
      
      <div class="card border-0 mb-4 shadow-sm">
         <div class="card-body p-lg-5">
            <div class="mb-5">
               <h4 class="mb-1">Plans</h4>
               <p class="mb-0 fs-6">List of members in your team with their roles.</p>
            </div>
            <div class="table-responsive">
               <table class="datatable_server table table-centered td table-centered th table-lg text-nowrap">
                  <thead class="thead-light">
                     <tr>
                     <th>No</th>
                        <th>Name</th>
                        <th>amount</th>
                        <th>interval</th>
                        <th width="280px">Action</th>
                     </tr>
               </thead>
                  <tbody>
                     @forelse ($plans as $key => $p)
                     <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->amount }}</td>
                        <td>{{ $p->interval }}</td>
                        <td>
                           <a class="btn btn-info" href="{{ route('roles.show',$p->id) }}">Show</a>
                           {{-- @can('role-edit') --}}
                              <a class="btn btn-primary" href="{{ route('stripe.editSubscriptionPlan',$p->id) }}">Edit</a>
                           {{-- @endcan --}}
                           {{-- @can('role-delete') --}}
                              {!! Form::open(['method' => 'DELETE','route' => ['stripe.destroy', $p->id],'style'=>'display:inline']) !!}
                                 {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                              {!! Form::close() !!}
                           {{-- @endcan --}}
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

            <!-- Laravel Dynamic Pagination -->
            @if ($plans->lastPage() > 1)
               <nav aria-label="Page navigation example">
                  <ul class="pagination">
                  <li class="page-item {{ ($plans->currentPage() == 1) ? ' disabled' : '' }}">
                     <a class="page-link" href="{{ $plans->url(1) }}">Previous</a>
                  </li>
                  @for ($i = 1; $i <= $plans->lastPage(); $i++)
                     <li class="page-item {{ ($plans->currentPage() == $i) ? ' active' : '' }}">
                           <a class="page-link" href="{{ $plans->url($i) }}">{{ $i }}</a>
                     </li>
                  @endfor
                  <li class="page-item {{ ($plans->currentPage() == $plans->lastPage()) ? ' disabled' : '' }}">
                     <a class="page-link" href="{{ $plans->url($plans->currentPage()+1) }}">Next</a>
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
