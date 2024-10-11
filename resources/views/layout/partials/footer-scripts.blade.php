<script src="{!!url('assets/js/jquery.min.js')!!}"></script>

<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{ asset('assets/libs/headhesive/dist/headhesive.min.js')}}"></script>

<!-- Theme JS -->
<script src="{{ asset('assets/js/theme.min.js')}}"></script>

<script src="{{ asset('assets/libs/jarallax/dist/jarallax.min.js')}}"></script>
<script src="{{ asset('assets/js/vendors/jarallax.js')}}"></script>
<script src="{{ asset('assets/libs/parallax-js/dist/parallax.min.js')}}"></script>
<script src="{{ asset('assets/js/vendors/parallax.js')}}"></script>

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
