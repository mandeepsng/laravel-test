<!-- resources/views/blog/index.blade.php -->
@extends('layout.mainlayout_admin')

@section('content')

   <div class="col-lg-9 col-md-8">
      <div class="mb-4">
         <h1 class="mb-0 h3">Order History</h1>
      </div>

      <div class="card border-0 mb-4 shadow-sm">
         <div class="card-body p-lg-5">
            <div class="mb-5">
               <h4 class="mb-1">Order History</h4>
               {{-- <p class="mb-0 fs-6">List of members in your team with their roles.</p> --}}
            </div>
            <div class="table-responsive">
               <table class="datatable_server table table-centered td table-centered th table-lg text-nowrap">
                  <thead class="thead-light">
                     <tr>
                        <th>Name</th>
                        <th>Stripe ID</th>
                        <th>Status</th>
                        <th>Started At</th>
                        <th>Ends At</th>
                     </tr>
               </thead>
                  <tbody>

                     @forelse ($subscriptions as $subscription)
                        <tr>
                           <td>{{ $subscription->name }}</td>
                           <td>{{ $subscription->stripe_id }}</td>
                           <td>{{ $subscription->stripe_status }}</td>
                           <td>{{ $subscription->created_at->format('Y-m-d') }}</td>
                           <td>{{ $subscription->ends_at ?? 'Active' }}</td>
                        </tr>
                     @empty
                        <tr>
                           <td colspan="5" class="text-center">No plans available.</td>
                        </tr>
                     @endforelse


                     </tbody>
               </table>
            </div>
            <!-- Custom Pagination Section -->
            <!-- Dynamic Pagination -->
            @if ($subscriptions->lastPage() > 1)
            <nav aria-label="Page navigation example">
               <ul class="pagination">
                  <!-- Previous Button -->
                  <li class="page-item {{ $subscriptions->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $subscriptions->previousPageUrl() }}">Previous</a>
                  </li>

                  <!-- Page Numbers -->
                  @for ($i = 1; $i <= $subscriptions->lastPage(); $i++)
                        <li class="page-item {{ $subscriptions->currentPage() == $i ? 'active' : '' }}">
                           <a class="page-link" href="{{ $subscriptions->url($i) }}">{{ $i }}</a>
                        </li>
                  @endfor

                  <!-- Next Button -->
                  <li class="page-item {{ $subscriptions->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $subscriptions->nextPageUrl() }}">Next</a>
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
