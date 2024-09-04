<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="index_admin" class="logo">
                <img src="{!! url('assets_admin/img/tell_it_once.png') !!}" class="normal-logo" alt="Logo">
                <img src="{!! url('assets_admin/img/tell_it_once.png') !!}" class="scroll-logo hide" alt="Logo">
            </a>
        </div>
        <!-- /Logo -->

        <!-- Header Right Menu -->
        <ul class="nav user-menu">

            <!-- Notifications -->
            <li class="nav-item dropdown noti-dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="fe fe-bell"></i> <span class="badge badge-pill"></span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                    </div>
                </div>
            </li>
            <!-- /Notifications -->

            <li class="nav-item mobMenuToggle">
                <!-- Mobile Menu Toggle -->
                <a class="mobile_btn" id="mobile_btn">
                    <i class="fe fe-text-align-left"></i>
                </a>
                <!-- /Mobile Menu Toggle -->
            </li>

            <li class="nav-item menuToggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fe fe-text-align-left"></i>
                </a>
            </li>

            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img class="rounded-circle" src="{!!(isset($userimg[0]) ? url($userimg[0]->destination.'/'.$userimg[0]->file) : '../assets_admin/img/doctors/doctor-thumb-01.jpg')!!}" width="31" alt="Ryan Taylor"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="{!!(isset($userimg[0]) ? url($userimg[0]->destination.'/'.$userimg[0]->file) : '../assets_admin/img/doctors/doctor-thumb-01.jpg')!!}" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6>{!!isset($user_data[0]) ? $user_data[0]->firstname.' '.$user_data[0]->lastname : '' !!}</h6>
                            <p class="text-muted mb-0">Therapist</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="{!!url('th_profile')!!}">My Profile</a>
                    <a class="dropdown-item" href="{!!url('logout')!!}">Logout</a>
                </div>
            </li>
            <!-- /User Menu -->

        </ul>
        <!-- /Header Right Menu -->

        <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Search here">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

    </div>
    <!-- /Header -->