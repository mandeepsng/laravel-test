<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="/" class="logo">
                <img src="{!! url('assets_admin/img/rvs-header-logo.png') !!}" class="normal-logo" alt="Logo">
                <img src="{!! url('assets_admin/img/rvs-header-logo.png') !!}" class="scroll-logo hide" alt="Logo">
            </a>
        </div>
        <!-- /Logo -->

        <!-- Header Right Menu -->
        <ul class="nav user-menu">
            <!-- Mobile Menu Toggle -->
            <li class="nav-item mobMenuToggle">
                <a class="mobile_btn" id="mobile_btn">
                    <i class="fe fe-text-align-left"></i>
                </a>
            </li>
            <!-- /Mobile Menu Toggle -->

            <li class="nav-item menuToggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fe fe-text-align-left"></i>
                </a>
            </li>

            <!-- Notifications -->
            <li class="nav-item dropdown noti-dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <img class="bell-img" src="{!!url('assets_admin/img/notificationIcon.png')!!}" alt="Logo" width="22" height="24"> <span class="badge badge-pill">0</span>
                    {{-- <img src="{!!url('assets_admin/img/bell.svg')!!}" alt="Logo" width="22" height="24"> <span class="badge badge-pill"></span> --}}
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">


                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
                                        <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="../assets_admin/img/doctors/doctor-thumb-01.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Dr. Ruby Perrin</span> Schedule <span class="noti-title">her appointment</span></p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>


                        </ul>

                    </div>
                    <div class="topnav-dropdown-footer">
                        {{-- <a href="#">View all Notifications</a> --}}
                    </div>
                </div>
            </li>
            <!-- /Notifications -->

            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img">
                        <img class="rounded-circle" src="{!!(isset($userData->personaldetails->image) ? url('uploads/profiles/'.$userData->id.'/'.$userData->personaldetails->image) : url('assets_admin/img/patients/patient1.jpg'))!!}" width="31" alt="">

                    </span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            {{-- <img src="{!!(isset($userimg[0]) ? url($userimg[0]->destination.'/'.$userimg[0]->file) : asset('/assets_admin/img/doctors/doctor-thumb-01.jpg') )!!}" alt="User Image" class="avatar-img rounded-circle"> --}}

                            <img src="{!!(isset($userData->personaldetails->image) ? url('uploads/profiles/'.$userData->id.'/'.$userData->personaldetails->image) : url('assets_admin/img/patients/patient1.jpg'))!!}" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6>{{Session::get('compname') }}</h6>
                            <p class="text-muted mb-0">{{ @$userData->name }}</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item signout" href="#">Logout</a>
                </div>
            </li>
            <!-- /User Menu -->

        </ul>
        <!-- /Header Right Menu -->

        {{-- <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Search here">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div> --}}

    </div>
    <!-- /Header -->
