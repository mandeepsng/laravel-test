<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.partials.head_admin')
    </head>

    <body class="{!!Session::get('body')!!}">
        {{-- <div class="myLoader hide">
            <span class="spinner-border spinner-border-sm mr-2" role="status"></span>
        </div> --}}
        @if(!Route::is(['login','register','forgot-password','lock-screen','error-404','error-500', 'verification.notice' , 'register.notice', 'verified.email', 'reset.password.get', 'details']))
            @include('layout.partials.header_admin')
            @include('layout.partials.nav_admin')
        @endif

        <main>
            <!--Account profile Start-->
            <section class="py-lg-7 py-5 bg-light-subtle">
               <div class="container">
                  <div class="row">

                    @if(!Route::is(['signin', 'signup', 'welcome', 'landing-sass-v1' ]))
                        @include('layout.partials.sidebar_admin')
                    @endif
                    @yield('content')

                    </div>
                </div>
            </section>
            <!--Account profile end-->
            </main>
            <!-- Footer -->
            @include('layout.partials.footer_admin-scripts')
            @yield('script')
            @include('layout.partials.common-scripts')
        
    </body>
</html>