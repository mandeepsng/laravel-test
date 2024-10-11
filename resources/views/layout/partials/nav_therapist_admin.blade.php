<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title" style="display: none">
                    <span>Main</span>
                </li>
                <li class="{{ Request::is('index_admin') ? 'active' : '' }}" style="display: none">
                    <a href="{{ url('index_admin') }}"><img src="{!!url('assets/img/sidebaricons/Dashboard.svg')!!}" class="img-fluid" width="40" /> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{!!url('assets/img/sidebaricons/Appointment.svg')!!}" class="img-fluid" width="45" /> <span>My Appointments</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li>
                            <a class="{{ Request::is('my_appointments') ? 'active' : '' }}" href="{{ url('my_appointments') }}" > <span>List View</span></a>
                        </li>
                        <li>
                            <a class="{{ Request::is('my_calender') ? 'active' : '' }}" href="{{ url('my_calender') }}" > <span>Calender View</span></a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Request::is('media_gallery') ? 'active' : '' }}"> 
                    <a href="{{ url('media_gallery') }}"><img src="{!!url('assets/img/sidebaricons/Gallery.svg')!!}" class="img-fluid" width="45" /> <span>Media Gallery</span></a>
                </li>
                 <li class="{{ Request::is('message_therapist') ? 'active' : '' }}"> 
                    <a href="{!!url('message_therapist')!!}"><img src="{!!url('assets/img/sidebaricons/Messages.svg')!!}" class="img-fluid" width="45" /> <span>Messages</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->