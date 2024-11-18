@extends('layout.mainlayout_admin')

@section('content')


   <div class="col-lg-9 col-md-8">
      <div class="mb-4">
         <h1 class="mb-0 h3">Teams</h1>
      </div>
      <div class="col-12">
         <a href="{{ route('user.create') }}" class="btn btn-primary" type="submit">Create</a>
      </div>
      <div class="card border-0 shadow-sm mb-4">
         <div class="card-body p-lg-5">
            <div class="mb-5">
               <h4 class="mb-1">Add team members</h4>
               <p class="fs-6 mb-0">Invite as many team members as you need to help run this account. Learn More</p>
            </div>
            <form class="row g-3 needs-validation" novalidate>
               <div class="col-lg-6 col-md-12">
                  <label for="formGroupEmailInput" class="form-label">Email</label>
                  <input type="email" class="form-control" id="formGroupEmailInput" placeholder="Team member’s email" required />
                  <div class="invalid-feedback">Please enter an email.</div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <label for="formGroupRoleInput" class="form-label">Role</label>
                  <select class="form-select" id="formGroupRoleInput" required>
                     <option selected disabled value="">Role</option>
                     <option value="Owner">Owner</option>
                     <option value="Front End Developer">Front End Developer</option>
                     <option value="Full Stack Developer">Full Stack Developer</option>
                  </select>
               </div>
               <div class="col-12">
                  <button class="btn btn-primary" type="submit">Send Invitation</button>
               </div>
            </form>
         </div>
      </div>
      <div class="card border-0 mb-4 shadow-sm">
         <div class="card-body p-lg-5">
            <div class="mb-5">
               <h4 class="mb-1">Team members</h4>
               <p class="mb-0 fs-6">List of member are in your team with its roles.</p>
            </div>
            <div class="table-responsive">
               <table class="table table-centered td table-centered th table-lg text-nowrap">
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
                     <tr>
                        <td>
                           <div class="d-flex align-items-center">
                              <img src="assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                              <div class="ms-3">
                                 <div class="fs-5 fw-semibold text-dark">Jitu Chauhan</div>
                                 <small>anitaexample@block.com</small>
                              </div>
                           </div>
                        </td>
                        <td><span>Owner</span></td>
                        <td></td>
                        <td></td>
                     </tr>
                     <tr>
                        <th scope="row">
                           <div class="d-flex align-items-center">
                              <img src="assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                              <div class="ms-3">
                                 <div class="fs-5 fw-semibold text-dark">Anita parmar</div>
                                 <small>anitaexample@block.com</small>
                              </div>
                           </div>
                        </th>
                        <td><span>Front End Developer</span></td>
                        <td></td>
                        <td>
                           <a href="{{ route('user.edit', 2) }}" class="btn btn-sm btn-dark me-2">Edit</a>
                           <a href="#" class="btn btn-sm btn-light">Remove</a>
                        </td>
                     </tr>
                     <tr>
                        <th scope="row">
                           <div class="d-flex align-items-center">
                              <img src="assets/images/avatar/avatar-9.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                              <div class="ms-3">
                                 <div class="fs-5 fw-semibold text-dark">Sandip Chauhan</div>
                                 <small>sandipexample@block.com</small>
                              </div>
                           </div>
                        </th>
                        <td><span>Full Stack Developer</span></td>
                        <td></td>
                        <td>
                           <a href="#" class="btn btn-sm btn-dark me-2">Edit</a>
                           <a href="#" class="btn btn-sm btn-light">Remove</a>
                        </td>
                     </tr>
                     <tr>
                        <th scope="row">
                           <div class="d-flex align-items-center">
                              <img src="assets/images/avatar/avatar-9.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                              <div class="ms-3">
                                 <div class="fs-5 fw-semibold text-dark">Sandip Chauhan</div>
                                 <small>sandipexample@block.com</small>
                              </div>
                           </div>
                        </th>
                        <td><span>Full Stack Developer</span></td>
                        <td></td>
                        <td>
                           <a href="#" class="btn btn-sm btn-dark me-2">Edit</a>
                           <a href="#" class="btn btn-sm btn-light">Remove</a>
                        </td>
                     </tr>
                     <tr>
                        <th scope="row">
                           <div class="d-flex align-items-center">
                              <img src="assets/images/avatar/avatar-9.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                              <div class="ms-3">
                                 <div class="fs-5 fw-semibold text-dark">Sandip Chauhan</div>
                                 <small>sandipexample@block.com</small>
                              </div>
                           </div>
                        </th>
                        <td><span>Full Stack Developer</span></td>
                        <td></td>
                        <td>
                           <a href="#" class="btn btn-sm btn-dark me-2">Edit</a>
                           <a href="#" class="btn btn-sm btn-light">Remove</a>
                        </td>
                     </tr>
                     <tr>
                        <th scope="row">
                           <div class="d-flex align-items-center">
                              <img src="assets/images/avatar/avatar-9.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                              <div class="ms-3">
                                 <div class="fs-5 fw-semibold text-dark">Sandip Chauhan</div>
                                 <small>sandipexample@block.com</small>
                              </div>
                           </div>
                        </th>
                        <td><span>Full Stack Developer</span></td>
                        <td></td>
                        <td>
                           <a href="#" class="btn btn-sm btn-dark me-2">Edit</a>
                           <a href="#" class="btn btn-sm btn-light">Remove</a>
                        </td>
                     </tr>
                     <tr>
                        <th scope="row">
                           <div class="d-flex align-items-center">
                              <img src="assets/images/avatar/avatar-9.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                              <div class="ms-3">
                                 <div class="fs-5 fw-semibold text-dark">Sandip Chauhan</div>
                                 <small>sandipexample@block.com</small>
                              </div>
                           </div>
                        </th>
                        <td><span>Full Stack Developer</span></td>
                        <td></td>
                        <td>
                           <a href="#" class="btn btn-sm btn-dark me-2">Edit</a>
                           <a href="#" class="btn btn-sm btn-light">Remove</a>
                        </td>
                     </tr>
                     <tr>
                        <th scope="row">
                           <div class="d-flex align-items-center">
                              <img src="assets/images/avatar/avatar-9.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                              <div class="ms-3">
                                 <div class="fs-5 fw-semibold text-dark">Sandip Chauhan</div>
                                 <small>sandipexample@block.com</small>
                              </div>
                           </div>
                        </th>
                        <td><span>Full Stack Developer</span></td>
                        <td></td>
                        <td>
                           <a href="#" class="btn btn-sm btn-dark me-2">Edit</a>
                           <a href="#" class="btn btn-sm btn-light">Remove</a>
                        </td>
                     </tr>
                     <tr>
                        <th scope="row">
                           <div class="d-flex align-items-center">
                              <img src="assets/images/avatar/avatar-9.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                              <div class="ms-3">
                                 <div class="fs-5 fw-semibold text-dark">Sandip Chauhan</div>
                                 <small>sandipexample@block.com</small>
                              </div>
                           </div>
                        </th>
                        <td><span>Full Stack Developer</span></td>
                        <td></td>
                        <td>
                           <a href="#" class="btn btn-sm btn-dark me-2">Edit</a>
                           <a href="#" class="btn btn-sm btn-light">Remove</a>
                        </td>
                     </tr>
                     <tr>
                        <th scope="row">
                           <div class="d-flex align-items-center">
                              <img src="assets/images/avatar/avatar-9.jpg" alt="avatar" class="avatar avatar-lg rounded-circle" />
                              <div class="ms-3">
                                 <div class="fs-5 fw-semibold text-dark">Sandip Chauhan</div>
                                 <small>sandipexample@block.com</small>
                              </div>
                           </div>
                        </th>
                        <td><span>Full Stack Developer</span></td>
                        <td></td>
                        <td>
                           <a href="#" class="btn btn-sm btn-dark me-2">Edit</a>
                           <a href="#" class="btn btn-sm btn-light">Remove</a>
                        </td>
                     </tr>
                  </tbody>
               </table>


               
            </div>
            <!--default pagination-->
            <nav aria-label="Page navigation example">
               <ul class="pagination">
               <li class="page-item"><a class="page-link" href="#">Previous</a></li>
               <li class="page-item"><a class="page-link" href="#">1</a></li>
               <li class="page-item"><a class="page-link" href="#">2</a></li>
               <li class="page-item"><a class="page-link" href="#">3</a></li>
               <li class="page-item"><a class="page-link" href="#">Next</a></li>
               </ul>
            </nav>
         </div>
      </div>
   </div>

@endsection

@section('script')
<script type="text/javascript">


      // Cache jQuery selectors to reduce redundant lookups
      var $myLoader = $(".myLoader");
      var $datatable = $(".datatable_server");

      // Initialize DataTable
      var table = $datatable.on('processing.dt', function (e, settings, processing) {
         // Toggle loader visibility
         $myLoader.css('display', processing ? 'flex' : 'none');
      }).DataTable({
         colReorder: {
            fixedColumnsLeft: 1
         },
         processing: true,
         serverSide: true,
         pageLength: 10,
         order: [[1, 'asc']],
         dom: 'lB<"top"if>rt<"bottom"p><"clear">',
         infoCallback: function (settings, start, end, max, total, pre) {
            return pre + selectedinfo();
         },
         buttons: [
            {
                  extend: 'csv',
                  text: 'Export CSV',
                  className: 'csv_export btn btn-success',
                  exportOptions: {
                     columns: [1, 2, 3, 4, 5, 6]
                  }
            }
         ],
         ajax: {
            url: '{{route("productJson")}}',
            type: 'GET',
            data: function (d) {
                  return $.extend({}, d, {
                     "sku": sku.value,
                     'name': $("#name").val(),
                     'type_id': type_id.value,
                     'status': $('#status').val(),
                     'visibility': visibility.value,
                     'attribute_set_id': attribute_set_id.value,
                  });
            }
         },
         columns: [
            { data: 'checkbox' },
            { data: 'sku' },
            { data: 'name' },
            { data: 'type_id' },
            { data: 'price' },
            { data: 'qty' },
            { data: 'status' },
            { data: 'visibility' },
            { data: 'url_key' },
            { data: 'attribute_set_id' },
            { data: 'action' }
         ],
         columnDefs: [
            {
                  targets: [0, 8, 9],
                  orderable: false
            },
            {
                  targets: [0],
                  orderable: false,
                  render: function (data) {
                     // Update checkbox state based on `update_arr`
                     if (jQuery.inArray($(data).val(), update_arr) !== -1) {
                        data = $(data).attr('checked', 1).get(0).outerHTML;
                     }
                     return data;
                  }
            }
         ]
      });

      // Optional: Apply specific styles via CSS instead of directly in JavaScript
      $datatable.on('draw', function () {
         $('tr td:nth-child(4)').css('background-color', '#f2dede');
      });

</script>


@endsection
