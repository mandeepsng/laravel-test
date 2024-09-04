<script type="text/javascript">

    // show msg notifications
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

        var html = '<div class="alert alert-' + classname + ' alert-dismissible fade show" role="alert"><strong>' + shortmsg + '</strong> ' + msg + '<button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        if (classnameappend != '') {
            $('.' + classnameappend).html(html);
            $('html, body').animate({
                scrollTop: ($('.' + classnameappend).offset().top)
            }, 500);
            setTimeout(function() {
                $('.' + classnameappend).html('');
            }, 10000);
        } else {
            $('.universal_msg').html(html);
            $('html, body').animate({
                scrollTop: ($('.universal_msg').offset().top)
            }, 500);
            setTimeout(function() {
                $('.universal_msg').html('');
            }, 10000);
        }
    }
   
   // for enter only number in text input 
   $('.numeric').on('input', function (event) { 
            this.value = this.value.replace(/[^0-9]/g, '');
    });


    

    // only number and decimal validation 
    $(function() {
        $('.only_num_digit').keypress(function(e) {
            var val = $(this).val();
            var regex = /^(\+|-)?(\d*\.?\d*)$/;
            if (regex.test(val + String.fromCharCode(e.charCode))) {
                return true;
            }
            return false;
        });
    });
    
        

    // for enter number or decimal number  
    function validatenumber(el, id) {
        var regex = /^[0-9]*(?:\.\d{1,2})?$/;    // allow only numbers [0-9] 
        if( !regex.test(el.value) ) {
            console.log('wrong', id);
            $('#'+id).val('');
            // alert('invalid value');
            // this.value = el.value.replace(el.value, '');
        }
        
    }


    function postRequest(formData, route){
			$.ajax({
				type: "POST",
				url: route,
				data: formData,
				processData: false,  // Prevent jQuery from processing data
				contentType: false,  // Prevent jQuery from setting content type
				headers: {
					'X-CSRF-TOKEN': "{!! csrf_token() !!}"
				},
				success: function (response, status, xhr) {

					if (response && response.message) {
							// console.log(response.message); // or console.log(response.message);
							$('.myLoader').addClass('hide');

							Swal.fire({
							title: 'Good job!',
							text: response.message,
							icon: 'success',
							showCancelButton: false,
							}).then((result) => {
							if (result.isConfirmed) {
								location.reload();
							}
						})
					}

				

				},
				error: function (xhr, status, error) {
					// Handle the error if needed
					console.error(xhr.responseText);
					try{
						let er = JSON.parse(xhr.responseText);
						console.log(er.errors.name[0]);
						$('#name').addClass('is-invalid');
						var html = `<span class="invalid-feedback" role="alert">
											<strong>${er.errors.name[0]}</strong>
										</span>`;
						$("#name").closest('.form-group').append(html);
					}catch (e) {
						console.error('Error parsing JSON:', e);
					}

					// Access the HTTP status code in case of an error
					var statusCode = xhr.status;
					console.log('HTTP Status Code:', statusCode);
				}
			});

		}


    // scl_show_alert('success', 'res.msg');



</script>