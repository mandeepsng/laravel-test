<script src="{!!url('assets/js/jquery.min.js')!!}"></script>

<!-- Bootstrap Core JS -->
<script src="{!!url('assets/js/popper.min.js')!!}"></script>
<script src="{!!url('assets/js/bootstrap.min.js')!!}"></script>
<!-- Datetimepicker JS -->
<script src="{!!url('assets/js/moment.min.js')!!}"></script>
<script src="{{ url('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{!!url('assets/plugins/daterangepicker/daterangepicker.js')!!}"></script>
<!-- Full Calendar JS -->
<script src="{!!url('assets/plugins/jquery-ui/jquery-ui.min.js')!!}"></script>
<script src="{!!url('assets/plugins/fullcalendar/fullcalendar.min.js')!!}"></script>
<script src="{!!url('assets/plugins/fullcalendar/jquery.fullcalendar.js')!!}"></script>
<script src="{!!url('assets_admin/js/bootstrap-datepicker.min.js')!!}"></script>
<!-- Sticky Sidebar JS -->
<script src="{!!url('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')!!}"></script>
<script src="{!!url('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')!!}"></script>
<!-- Select2 JS -->
<script src="{!!url('assets/plugins/select2/js/select2.min.js')!!}"></script>
<!-- Fancybox JS -->
<script src="{!!url('assets/plugins/fancybox/jquery.fancybox.min.js')!!}"></script>
<!-- Dropzone JS -->
<script src="{!!url('assets/plugins/dropzone/dropzone.min.js')!!}"></script>

<!-- Bootstrap Tagsinput JS -->
<script src="{!!url('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')!!}"></script>

<!-- Profile Settings JS -->
<script src="{!!url('assets/js/profile-settings.js')!!}"></script>
<!-- Circle Progress JS -->
<script src="{!!url('assets/js/circle-progress.min.js')!!}"></script>
<!-- Slick JS -->
<script src="{!!url('assets/js/slick.js')!!}"></script>

<!-- Custom JS -->
<script src="{!!url('assets/js/script.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/js/jquery.signature.js')!!}"></script>

<script type="text/javascript" src="{!!url('assets_admin/js/form-builder.min.js')!!}"></script>

@if(Route::is(['map-grid','map-list']))
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6adZVdzTvBpE2yBRK8cDfsss8QXChK0I"></script>
<script src="{!!url('assets/js/map.js')!!}"></script>

@endif

<script src="{!!url('assets_admin/js/bootstrap-clockpicker.min.js')!!}"></script>

<script src="{!!url('assets/js/trumbowyg.min.js')!!}"></script>
<script src="{!!url('assets/plugins/trumbowyg.emoji.min.js')!!}"></script>
<script src="{!!url('assets/js/sweetalert.min.js')!!}"></script>
<script src="{!!url('assets_admin/js/form-render.min.js')!!}"></script>
<script>
   var fields = [{
        label: 'Signature',
        attrs: {
            type: 'signature'
        },
        icon: '✍️'
    }];
    $('.datetime').datepicker({ 
        format: 'dd-mm-yyyy',
        clearBtn : true
    });
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
    function scl_show_alert(type,msg,classnameappend = ''){
        var classname = type;
        var shortmsg = '';
        if(type == 'error'){
            classname = 'danger';
            shortmsg = 'Error!';
        }else if(type == 'success'){
            shortmsg = 'Success!'; 
        }else{
            shortmsg = 'Warning!';  
        }

        var html = '<div class="alert alert-'+classname+' alert-dismissible fade show" role="alert"><strong>'+shortmsg+'</strong> '+msg+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
        if(classnameappend != ''){
            $('.'+classnameappend).html(html);
            $('html, body').animate({
                scrollTop: ($('.'+classnameappend).offset().top)
            },500);
            setTimeout(function(){  $('.'+classnameappend).html('');  }, 5000);
        }else{
            $('.universal_msg').html(html); 
            $('html, body').animate({
                scrollTop: ($('.universal_msg').offset().top)
            },500);
            setTimeout(function(){  $('.universal_msg').html('');  }, 5000);
        }


    }
    $(document).ajaxSend(function(){
        $('.myLoader').removeClass('hide');
    });
    $(document).ajaxComplete(function(){
        $('.myLoader').addClass('hide');
    });

    
     var templates = {
        signature: function(fieldData) {
            if($('#fb-editor .signature-field').length > 1){
                $('#fb-editor .signature-field:last').remove();
                scl_show_alert('warning','Signature can be added only once.');
            }
            return {
                field: '<div class="col-md-12"><div id="'+fieldData.name+'"></div><br/><button id="clear'+fieldData.name+'" class="btn btn-danger btn-sm">Clear Signature</button><textarea id="signature64'+fieldData.name+'" name="signed" style="display: none"></textarea></div>',
                onRender: function() {
                    var sig = $('#'+fieldData.name).signature({syncField: '#signature64'+fieldData.name, syncFormat: 'PNG'});
                    $('#clear'+fieldData.name).click(function(e) {
                        e.preventDefault();
                        sig.signature('clear');
                        $("#signature64"+fieldData.name).val('');
                    });
                }
            };
        }
    };
    var fields = [{
        label: 'Signature',
        attrs: {
            type: 'signature'
        },
        icon: '✍️'
    }];

   $(window).scroll(function () {
       var threshold = 5;
       if ($(window).scrollTop() >= threshold){
           $('.normal-logo').addClass('hide');
           $('.scroll-logo').removeClass('hide');
       }else {
           $('.normal-logo').removeClass('hide');
           $('.scroll-logo').addClass('hide');
       }
   });
</script>
@include('common_script')
