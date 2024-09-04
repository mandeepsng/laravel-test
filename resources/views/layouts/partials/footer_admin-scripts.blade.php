<!-- jQuery -->
<script src="{!!url('assets_admin/js/jquery-3.2.1.min.js')!!}"></script>

<!-- Bootstrap Core JS -->
<script src="{!!url('assets_admin/js/popper.min.js')!!}"></script>
<script src="{!!url('assets_admin/js/bootstrap.min.js')!!}"></script>

<!-- Slimscroll JS -->
<script src="{!!url('assets_admin/plugins/slimscroll/jquery.slimscroll.min.js')!!}"></script>
@if(Route::is(['pagee']))
<script src="{!!url('assets_admin/plugins/raphael/raphael.min.js')!!}"></script>
<script src="{!!url('assets_admin/plugins/morris/morris.min.js')!!}"></script>
<script src="{!!url('assets_admin/js/chart.morris.js')!!}"></script>
@endif
<!-- Form Validation JS -->
<script src="{!!url('assets_admin/js/form-validation.js')!!}"></script>
<!-- Mask JS -->
<script src="{!!url('assets_admin/js/jquery.maskedinput.min.js')!!}"></script>
<script src="{!!url('assets_admin/js/mask.js')!!}"></script>
<!-- Select2 JS -->
<script src="{!!url('assets_admin/js/select2.min.js')!!}"></script>

<!-- Datetimepicker JS -->
<script src="{!!url('assets_admin/js/moment.min.js')!!}"></script>
<script src="{{ asset('/assets_admin/js/datetimepicker-master/jquery.datetimepicker.full.min.js')}}"></script>

<!-- sweetalert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>

<!-- Full Calendar JS -->
<script src="{!!url('assets_admin/js/jquery-ui.min.js')!!}"></script>
<!--<script src="{!!url('assets_admin/plugins/fullcalendar/fullcalendar.min.js')!!}"></script>-->
<!--<script src="{!!url('assets_admin/plugins/fullcalendar/jquery.fullcalendar.js')!!}"></script>-->
<script src="{!!url('assets_admin/js/main.js')!!}"></script>
<!-- Datatables JS -->
<script src="{!!url('assets_admin/plugins/datatables/jquery.dataTables.min.js')!!}"></script>
<script src="{!!url('assets_admin/plugins/datatables/datatables.min.js')!!}"></script>

<script src="{!!url('assets_admin/js/bootstrap-datepicker.min.js')!!}"></script>

<!-- Custom JS -->
<script src="{!!url('assets_admin/js/script.js?v='.rand(1, 99999))!!}"></script>

<!-- Color Picker JS -->
<script src="{!!url('assets_admin/js/bootstrap-colorpicker.min.js')!!}"></script>
<script src="{!!url('assets_admin/js/form-builder.min.js')!!}"></script>
<script src="{!!url('assets_admin/js/form-render.min.js')!!}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="{!!url('assets_admin/js/bootstrap-clockpicker.min.js')!!}"></script>
<script src="{!!url('assets/js/sweetalert.min.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/js/jquery.signature.js')!!}"></script>
<script src="{!!url('assets/js/trumbowyg.min.js')!!}"></script>
<script src="{!!url('assets/plugins/trumbowyg.emoji.min.js')!!}"></script>
<script src="{{asset('assets_admin/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/datatables/buttons.html5.min.js')}}"></script>

<!-- One of the following themes -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css" /> <!-- 'classic' theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/monolith.min.css" /> <!-- 'monolith' theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/nano.min.css" /> <!-- 'nano' theme -->

<!-- Modern or es5 bundle -->
<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.es5.min.js"></script>


<script type="text/javascript">
    var fields = [{
        label: 'Signature',
        attrs: {
            type: 'signature'
        },
        icon: '✍️'
    }];

    $('#trumbowyg,#trumbowyg1').trumbowyg({
        btns: [
            ['viewHTML'],
            ['undo', 'redo'], // Only supported in Blink browsers
            ['formatting'],
            ['strong', 'em', 'del'],
            ['superscript', 'subscript'],
            ['link'],
            ['insertImage'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen'],
            ['emoji']
        ],
        imageWidthModalEdit: true
    });
    var templates = {
        signature: function(fieldData) {
            if ($('#fb-editor .signature-field').length > 1) {
                $('#fb-editor .signature-field:last').remove();
                scl_show_alert('warning', 'Signature can be added only once.');
            }
            return {
                field: '<div class="col-md-12"><div id="' + fieldData.name + '"></div><br/><button id="clear' + fieldData.name + '" class="btn btn-danger btn-sm">Clear Signature</button><textarea id="signature64' + fieldData.name + '" name="signed" style="display: none"></textarea></div>',
                onRender: function() {
                    var sig = $('#' + fieldData.name).signature({
                        syncField: '#signature64' + fieldData.name,
                        syncFormat: 'PNG'
                    });
                    $('#clear' + fieldData.name).click(function(e) {
                        e.preventDefault();
                        sig.signature('clear');
                        $("#signature64" + fieldData.name).val('');
                    });
                }
            };
        }
    };
    $('.select2').select2({
        width: '100%'
    });
    jQuery('.colorpicker').colorpicker();
    // bellnotification();

    function scl_show_alert(type, msg, classnameappend = '') {
        var classname = type;
        var shortmsg = '';
        if (type == 'error') {
            classname = 'danger';
            shortmsg = 'Error!';
        } else if (type == 'success') {
            shortmsg = 'Success!';
        } else {
            shortmsg = 'Warning!';
        }

        var html = '<div class="alert alert-' + classname + ' alert-dismissible fade show" role="alert"><strong>' + shortmsg + '</strong> ' + msg + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
        if (classnameappend != '') {
            $('.' + classnameappend).html(html);
            $('html, body').animate({
                scrollTop: ($('.' + classnameappend).offset().top)
            }, 500);
            setTimeout(function() {
                $('.' + classnameappend).html('');
            }, 5000);
        } else {
            $('.universal_msg').html(html);
            $('html, body').animate({
                scrollTop: ($('.universal_msg').offset().top)
            }, 500);
            setTimeout(function() {
                $('.universal_msg').html('');
            }, 5000);
        }
    }

    
   

    

   
    $('.clockpicker').clockpicker({
        donetext: 'Done'
    });
    $(document).ajaxSend(function() {
        $('.myLoader').removeClass('hide');
    });
    $(document).ajaxComplete(function() {
        $('.myLoader').addClass('hide');
    });

    $(window).scroll(function () {
        var threshold = 5;
        if ($(window).scrollTop() >= threshold){
            $('.normal-logo').addClass('hide');
            $('.scroll-logo').removeClass('hide');
            $('body').addClass('scrollLogo');
        }else {
            $('.normal-logo').removeClass('hide');
            $('.scroll-logo').addClass('hide');
            $('body').removeClass('scrollLogo');
        }
    });


    // custom validation 
    var error;
    function custom_validations(id){

        var val = $(id).val();
        var er = $(id).attr('data-error');
        $(id).closest('.form-group').find('.invalid-feedback').remove();

        if(val === ''){
            
            $(id).addClass('is-invalid');
            var html = `<span class="invalid-feedback" role="alert">
                            <strong>${er} is required</strong>
                        </span>`;
            $(id).closest('.form-group').append(html);
            error = true;
        }else{
            $(id).removeClass('is-invalid');
            error = false;
        }

    }

    // logut popup

    $('.signout').click(function(e){
			e.preventDefault();

            const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn main_logout',
					cancelButton: 'btn main_logout-cancel'
				},
				buttonsStyling: false
			})


			swalWithBootstrapButtons.fire({
				title: 'Do you want to Logout?',
				text: "",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Logout'
				}).then((result) => {
				if (result.isConfirmed) {

					// $.ajax({
					// 	type: "POST",
					// 	url: "{!!url('signout')!!}",
					// 	success: function (res) {
                    //         location.reload();
					// 	}
					// }); 

                    $.ajax({
                        type: "POST",
                        url: "{!!url('signout')!!}",
                        processData: false,  // Prevent jQuery from processing data
                        contentType: false,  // Prevent jQuery from setting content type
                        headers: {
                            'X-CSRF-TOKEN': "{!! csrf_token() !!}"
                        },
                        success: function (res) {
                            location.reload();
                        },
                        error: function (xhr, status, error) {
                            // Handle errors here
                        }
                    });

				}
			})

			

			
	});	

    // comment file changes validation
    
    function uploadFileValidation(id, allowedExtensions){
        
        $(id).on('change', function () {
                var fileInput = this;
                
                if(id === '.profileimage'){
                    var maxFileSizeInBytes = 2 * 1024 * 1024;; // 2MB
                }else{
                    var maxFileSizeInBytes = 5242880; // 5MB
                }

                // var allowedExtensions = ['jpg', 'jpeg', 'png', 'xlsx', 'xls', 'docx', 'pdf'];
                var invalidFiles = [];
                
                // Check if any file is selected
                if (fileInput.files.length === 0) {
                    alert('Please select at least one file.');
                    return;
                }
                
                for (var i = 0; i < fileInput.files.length; i++) {
                    var selectedFile = fileInput.files[i];
                    var fileName = selectedFile.name;
                    var fileSizeInBytes = selectedFile.size;
                    var fileExtension = fileName.split('.').pop().toLowerCase();
                    
                    // Check file extension
                    if ($.inArray(fileExtension, allowedExtensions) === -1) {
                        invalidFiles.push(fileName);
                    }
                    
                    // Check file size
                    if (fileSizeInBytes > maxFileSizeInBytes) {
                        invalidFiles.push(fileName);
                }
            }
    
            if (invalidFiles.length > 0) {
                var errorMessage = 'The following files have invalid format or size:\n';
                errorMessage += invalidFiles.join('\n');
                // alert(errorMessage);
                
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    text: errorMessage,
                    showConfirmButton: false,
                    timer: 1500
                })
                
                // Clear the file input
                $(this).val('');
                return;
            }
            
            
        });
    }


    // clear all validation error msg on model close
    function emptyModalError(id){
        names = [];
        
        $(id).on('hide.bs.modal', function(){
            
            $(`${id} .form-control`).each(function () {
                var name_id = `#${$(this).attr('id')}`;
                names.push(name_id);

                $(name_id).closest('.form-group').find('.invalid-feedback').remove();
                $(name_id).removeClass('is-invalid');
            });
            
            console.log(names);
        });
    }


    $(document).on('click', '.notification-message', function(e) {
        // e.preventDefault();

        var notification_id = $(this).data('id');

        // $(".myLoader").css('display', 'block !important').removeClass('hide');

        console.log('notification_id = ', notification_id);

        // return false;

        $.ajax({
                url: "{{ route('readnotification') }}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    notification_id: notification_id,
                },
                success: function (response) {
                    console.log(response);
                    // bellnotification();
                }
            });

            // $(".myLoader").css('display', 'none');

       
        console.log('notification_id = ', notification_id);
    });


    $(document).on('click', '.clear-noti', function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{!!route('readnotification')!!}",
            data: {
                "_token": "{{ csrf_token() }}",
                notification_id: 'all'
            },
            success: function() {
                bellnotification();
            }
        });


    });


    function bellnotification()
    {
        // $(".myLoader").css('display', 'flex');
        $(".myLoader").css('display', 'block !important').removeClass('hide');

        $.ajax({
            url: "{{ route('getbellnotification') }}",
            type: 'GET',
            success: function (response) {
                console.log('get bell icon', response);
                $('.notification-list').html('');
                $('.notification-list').append(response.html);
                
                $('.badge.badge-pill').html(response.count);

                $('#show_badge').hide();
                if(response.count > 0){
                    $('#show_badge').show();
                    // $(".myLoader").css('display', 'none');
                }
                // $('.badge.badge-pill').html(response.count);
            }
        });
        
        $(".myLoader").css('display', 'none');
    }


    bellnotification();

    setInterval(() => {
        bellnotification();
    }, 5000);



</script>
@include('common_script')