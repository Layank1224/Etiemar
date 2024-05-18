{{-- For organizing layout page  --}}
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ asset('assets/images/users/avatar-1.jpg') }} " alt=""
                    class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">Julia Hudda</h4>
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
                                    <span class="mdi mdi-badge-account-outline"></span>
                                    <span>Vacant Position</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('candidates') }}" class="waves-effect">
                                    <span class="mdi mdi-card-account-details-outline"></span>
                                    <span>Candidates Information</span>
                                </a>

                            </li>
                            <li>
                                <a href="#" class="waves-effect">
                                    <span class="mdi mdi-account"></span>
                                    <span>Employees Information</span>
                                </a>

                            </li>
                            <li>
                                <a href="#" class="waves-effect">
                                    <span class="ri-user-follow-fill"></span>
                                    <span>Attendence</span>
                                </a>

                            </li>
                            <li>
                                <a href="#" class="waves-effect">
                                    <span class="ri-user-unfollow-line"></span>
                                    <span>Leaves</span>
                                </a>

                            </li>
                            <li>
                                <a href="#" class="waves-effect">
                                    <span class=" dripicons-suitcase"></span>
                                    <span>Holiday</span>
                                </a>

                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <span class="mdi mdi-arrange-send-to-back"></span>
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
                                <div class="log-out-btn">
                                    <a href="{{ route('logout') }}" class="waves-effect"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <span class="mdi mdi-logout-variant"></span>
                                        <span>Log out</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </li>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
