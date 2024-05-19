{{-- For organizing layout page  --}}
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-1">
            <div class="">
                <img src="{{ asset('assets/images/users/avatar-1.jpg') }} " alt=""
                    class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">User</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                    Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Navigation menu</li>

                            <li>
                                <a href="{{ route('home') }}" class="waves-effect">
                                    <i class="ri-home-line"></i><span
                                        class="badge rounded-pill bg-success float-end"></span>
                                    <span>Home</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                                    <i class="ri-pie-chart-box-line"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('departments') }}" class="waves-effect">
                                    <i class="ri-function-fill"></i>
                                    <span>Departments</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('jobs') }}" class="waves-effect">
                                    <i class="ri-briefcase-2-fill"></i>
                                    <span>Vacant Position</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('candidates') }}" class="waves-effect">
                                    <i class="ri-user-follow-line"></i>
                                    <span>Candidates Information</span>
                                </a>

                            </li>
                            <li>
                                <a href="#" class="waves-effect">
                                    <i class=" ri-contacts-fill"></i>
                                    <span>Employees Information</span>
                                </a>

                            </li>
                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="ri-user-follow-fill"></i>
                                    <span>Attendence</span>
                                </a>

                            </li>
                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="ri-user-unfollow-line"></i>
                                    <span>Leaves</span>
                                </a>

                            </li>
                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="ri-newspaper-fill"></i>
                                    <span>Holiday</span>
                                </a>

                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-equalizer-line"></i>
                                    <span>Customize</span>
                                    <!--<ul class="sub-menu" aria-expanded="true">-->
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Bar chart</a></li>
                                    <li><a href="#">Pie chart</a></li>
                                    <li><a href="#">Line chart</a></li>
                                    <li><a href="#">Radar chart</a></li>
                                    <li><a href="#">Radial chart</a></li>
                                    <li><a href="#">Column chart</a></li>
                                </ul>
                            </li>


                            <li>
                                {{-- <div class="log-out-btn"> --}}
                                    <a href="{{ route('logout') }}" class="waves-effect"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="ri-share-forward-2-line"></i>
                                        <span>Log out</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                {{-- </div> --}}

                            </li>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
