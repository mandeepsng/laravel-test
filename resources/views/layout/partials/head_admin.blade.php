<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>
    @hasSection('title')
        @yield('title')
    @endif
    {{-- {!!isset($title_name) ? $title_name : ''!!} --}}
</title>

{{-- Push additional CSS files or inline styles --}}
@stack('styles')

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png')}}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png')}}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png')}}" />
<link rel="manifest" href="assets/images/favicon/site.html" />
<link rel="mask-icon" href="assets/images/favicon/block-safari-pinned-tab.svg" color="#8b3dff" />
<link rel="shortcut icon" href="assets/images/favicon/favicon.ico" />
<meta name="msapplication-TileColor" content="#8b3dff" />
<meta name="msapplication-config" content="assets/images/favicon/tile.xml" />

<!-- Color modes -->
<script src="{{ asset('assets/js/vendors/color-modes.js')}}"></script>

<!-- Libs CSS -->
<link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet" />
<link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />

<!-- Scroll Cue -->
<link rel="stylesheet" href="{{ asset('assets/libs/scrollcue/scrollCue.css')}}" />

<!-- Box icons -->
<link rel="stylesheet" href="{{ asset('assets/fonts/css/boxicons.min.css')}}" />

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/theme.min.css')}}" />

<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}" />

