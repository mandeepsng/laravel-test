<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.partials.head')
    </head>
    @if(Route::is(['map-grid']))
    <body class="map-page">
        @endif
        @if(Route::is(['chat-doctor','chat']))
        <body class="chat-page">
            @endif
            @if(Route::is(['doctor-register','forgot-password','login','register']))
            <body class="account-page">
                @endif
                @if(Route::is(['video-call','voice-call']))
                <body class="call-page">
                    @endif
                    <div class="myLoader hide">
                        <span class="spinner-border spinner-border-sm mr-2" role="status"></span>
                    </div>
                    @include('layout.partials.header')
                    @yield('content')
                    @include('layout.partials.footer-scripts')
                    @yield('script')
                </body>
                </html>
            @yield('jquery')