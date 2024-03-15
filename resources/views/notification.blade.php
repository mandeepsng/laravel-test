<!DOCTYPE html>
<html>
<head>
	<title> Laravel Sweet Alert Notification by code.yoblogger.com</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- sweet alert 2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">

</head>
<body>


<h1 class="text-center">Laravel Sweet Alert Notification</h1>


    <button type="button" id="success" class="btn btn-primary">Suceess</button>
    <button type="button" id="warning" class="btn btn-warning">Warning</button>
    <button type="button" id="left" class="btn btn-success">Left Success</button>


</body>

<!-- sweetalert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">

    var msg = 'Notification by code.yoblogger.com'

    $(document).ready(function(){

            $('#success').click(function(e){
                    e.preventDefault();
                    Swal.fire('Good job!', msg,'success');
            });
            
            $('#warning').click(function(e){
                    e.preventDefault();
                    Swal.fire('Warning!', msg,'warning');
            });
            $('#left').click(function(e){
                    e.preventDefault();
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: msg,
                        showConfirmButton: false,
                        timer: 1500
                    })
            });
    });


</script>


</html>