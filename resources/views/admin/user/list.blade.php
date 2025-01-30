@extends('layout.mainlayout_admin')

@section('content')

   <div class="col-lg-9 col-md-8">
      <div class="mb-4">
         <h1 class="mb-0 h3">User</h1>
      </div>
      <div class="col-12">
         <a href="{{ route('users.create') }}" class="btn btn-primary" type="submit">Create</a>
         
      </div>

      <div class="card border-0 mb-4 shadow-sm">
         <div class="card-body p-lg-5">
            <div class="mb-5">
               <h4 class="mb-1">User List</h4>
               <p class="mb-0 fs-6">List of members in your team with their roles.</p>
            </div>
            {{-- {{ $user->subscribed() }} --}}
            @if (Auth::check())
               <p>Welcome, {{ Auth::user()->name }}!</p>
            @else
               <p>Please log in to see user details.</p>
            @endif
            <div class="table-responsive mb-5">
               <table class="datatable_server table table-centered td table-centered th table-lg text-nowrap">
                  <thead>
                     <tr>
                        <th scope="col">
                           <div class="fs-6 text-dark fw-semibold">Member</div>
                        </th>
                        <th scope="col">
                           <div class="fs-6 text-dark fw-semibold">Role</div>
                        </th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                     </tr>
                  </thead>
                  <tbody>
                     <!-- Team member rows will be populated by DataTable -->
                  </tbody>
               </table>
            </div>
            <!-- Custom Pagination Section -->
            <nav aria-label="Page navigation example">
               <ul class="pagination">
                   <li class="page-item" id="prevPage"><a class="page-link" href="#">Previous</a></li>
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

      // Cache jQuery selectors to reduce redundant lookups
      var $myLoader = $(".myLoader");
      var $datatable = $(".datatable_server");

      // Initialize DataTable
      var table = $(".datatable_server").on('processing.dt', function (e, settings, processing) {
         $(".myLoader").css('display', processing ? 'flex' : 'none');
      }).DataTable({
         processing: true,
         serverSide: true,
         pageLength: 10,
         order: [[0, 'asc']],
         dom: 'lrt',  // Removed the export buttons from 'lB<"top"if>rt<"bottom"p><"clear">'
         ajax: {
            url: '{{route("userjson")}}',  // Change this to your actual URL
            type: 'GET',
            data: function (d) {
                  return $.extend({}, d, {
                     // Any additional filters
                  });
            }
         },
         columns: [
            {
                  data: 'id',  // This data corresponds to the user block (avatar, name, email)
                  render: function (data, type, row) {
                     return `
                        <div class="d-flex align-items-center">
                              <img src="${row.avatar}" alt="avatar" class="avatar avatar-lg rounded-circle" />
                              <div class="ms-3">
                                 <div class="fs-5 fw-semibold text-dark">${row.name}</div>
                                 <small>${row.email}</small>
                              </div>
                        </div>
                     `;
                  }
            },
            {
                  data: 'role',  // This corresponds to the 'Role' column, e.g., 'Front End Developer'
                  render: function (data) {
                     return `<span>${data}</span>`;
                  }
            },
            {
                  data: 'action',  // This corresponds to the action buttons column (Edit, Remove)
                  render: function (data, type, row) {

                     let id = row.id;
                     let editRoute = `{{ route('users.edit', ':id') }}`.replace(':id', row.id);

                     return `
                        <a href="${editRoute}" class="btn btn-sm btn-dark me-2">Edit</a>
                        <a href="#" class="btn btn-sm btn-light" onclick="removeUser(${row.id})">Remove</a>
                     `;
                  }
            }
         ],
         columnDefs: [
            {
                  targets: [0, 1, 2],  // Disable sorting on the 'user' and 'actions' columns
                  orderable: false
            }
         ],
         
         // Pagination related
         drawCallback: function(settings) {
            var api = this.api();
            var pageInfo = api.page.info();
            
            // Disable the "Previous" button if it's the first page
            if (pageInfo.page === 0) {
               $('#prevPage').addClass('disabled');
            } else {
               $('#prevPage').removeClass('disabled');
            }

            // Disable the "Next" button if it's the last page
            if (pageInfo.page === pageInfo.pages - 1) {
               $('#nextPage').addClass('disabled');
            } else {
               $('#nextPage').removeClass('disabled');
            }

            // Clear existing page numbers
            $('.pagination .page-number').remove();

            // Add new page numbers
            var startPage = Math.max(pageInfo.page - 1, 0);
            var endPage = Math.min(pageInfo.page + 1, pageInfo.pages - 1);

            for (var i = startPage; i <= endPage; i++) {
               var pageNumber = i + 1;
               var activeClass = pageInfo.page === i ? 'active' : '';
               $('<li class="page-item page-number ' + activeClass + '"><a class="page-link" href="#">' + pageNumber + '</a></li>')
                     .insertBefore('#nextPage')
                     .on('click', function() {
                        api.page(parseInt($(this).text()) - 1).draw(false);
                     });
            }

         }
         
      });

      // Handle "Previous" and "Next" buttons for custom pagination
      $('#prevPage').click(function() {
         table.page('previous').draw('page');
      });

      $('#nextPage').click(function() {
         table.page('next').draw('page');
      });

      function removeUser(id) {

         if (confirm('Are you sure you want to delete this user?')) {
            let deleteRoute = `{{ route('users.destroy', ':id') }}`.replace(':id', id);
            
            fetch(deleteRoute, {
                  method: 'DELETE',
                  headers: {
                     'X-CSRF-TOKEN': '{{ csrf_token() }}'
                  }
            })
            .then(response => response.json())
            .then(data => {
               console.log(data.status);
               if (data.success) {
                  // alert(data.message); // 'User deleted successfully!'
                  // $('.datatable_server').DataTable().ajax.reload();
                  $('.datatable_server').DataTable().ajax.reload(null, false);

               } else {
                  alert('Failed to remove user.');
               }
            });
         }
      }


</script>

@endsection
