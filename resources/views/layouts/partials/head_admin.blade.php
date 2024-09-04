<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>
    @hasSection('title')
        @yield('title')
    @endif
    {{-- {!!isset($title_name) ? $title_name : ''!!} --}}
</title>

<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets_admin/img/cropped-R_fav-5-32x32.png')}}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap.min.css')}}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/css/font-awesome.min.css')}}">
<!-- <link rel="stylesheet" href="{{asset('assets_admin/plugins/fontawesome/css/font-awesome.min.css')}}"> -->
@if(Route::is(['blog','blog-details','add-blog','edit-blog','pending-blog']))
<link rel="stylesheet" href="{{asset('assets_admin/plugins/fontawesome/css/all.min.css')}}">
@endif
<!-- Feathericon CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/css/feathericon.min.css')}}">
<link rel="stylesheet" href="{{asset('assets_admin/plugins/morris/morris.css')}}">
<!-- Select2 CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/css/select2.min.css')}}">
<!-- Datetimepicker CSS -->
{{-- <link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap-datepicker3.css')}}"> --}}
<link rel="stylesheet" href="{{asset('assets_admin/js/datetimepicker-master/jquery.datetimepicker.css')}}">

<!-- Full Calander CSS -->
<!--<link rel="stylesheet" href="{{asset('assets_admin/plugins/fullcalendar/fullcalendar.min.css')}}">-->
<link rel="stylesheet" href="{{asset('assets_admin/css/main.css?v='.rand(1, 99999))}}">
<!-- Datatables CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/plugins/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('assets_admin/plugins/datatables/buttons.dataTables.min.css')}}">

<!-- <link rel="stylesheet" href="assets/plugins/morris/morris.css"> -->

<!-- Main CSS -->
@guest
<link rel="stylesheet" href="{{asset('assets_admin/css/style.css?v='.rand(1, 99999))}}">
@endguest

<link rel="stylesheet" href="{{asset('assets_admin/css/user_style.css?v='.rand(1, 99999))}}">
{{-- <link rel="stylesheet" href="{{asset('assets/css/app.css?v='.rand(1, 99999))}}"> --}}

{{-- <link rel="stylesheet" href="{{asset('assets_admin/css/admin_style.css?v='.rand(1, 99999))}}"> --}}

{{-- <link rel="stylesheet" href="{{asset('assets_admin/css/practitioner_style.css?v='.rand(1, 99999))}}"> --}}


<!-- Color Picker CSS -->
<link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap-colorpicker.min.css')}}">

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap-clockpicker.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.signature.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/trumbowyg.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/trumbowyg.emoji.min.css')}}">
<style>
    .hide{
        display: none !important;
    }
    .a-link{
        cursor: pointer;
    }
    
    .kbw-signature { width: 50%; height: 100px;}
    #sig canvas{
        width: 100% !important;
        height: auto;
    }
</style>

<!-- sweet alert 2 -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
