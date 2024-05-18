{{-- Dpartment page --}}
@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                {{-- <h4 class="mb-sm-0"></h4>Departments --}}

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Departments</a></li>
                        <li class="breadcrumb-item active">IT</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">Total Candidates</p>
                            <h4 class="mb-2">193</h4>
                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                        class="ri-arrow-right-up-line me-1 align-middle"></i>193</span>In IT
                                Department</p>
                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-primary rounded-3">
                                <i class="ri-user-3-line font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">Total Candidates</p>
                            <h4 class="mb-2">200</h4>
                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                        class="ri-arrow-right-up-line me-1 align-middle"></i>200</span>In Marketing Department</p>
                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-primary rounded-3">
                                <i class="ri-user-3-line font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">Total Candidates</p>
                            <h4 class="mb-2">87</h4>
                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                        class="ri-arrow-right-up-line me-1 align-middle"></i>87</span>In Finance Department</p>
                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-primary rounded-3">
                                <i class="ri-user-3-line font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">Total Candidates</p>
                            <h4 class="mb-2">55</h4>
                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                        class="ri-arrow-right-up-line me-1 align-middle"></i>55</span>In HR department
                                period</p>
                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-primary rounded-3">
                                <i class="ri-user-3-line font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

    <div class="row">
        <div class="col-xl-6">

            <div class="card">
                <div class="card-body pb-0">
                    <div class="float-end d-none d-md-inline-block">
                        {{-- <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Export</a>
                                <a class="dropdown-item" href="#">Import</a>
                                <a class="dropdown-item" href="#">Download Report</a>
                            </div>
                        </div> --}}
                    </div>
                    <h4 class="card-title mb-4">Total Number of candidates in each department</h4>

                    <div class="text-center pt-3">
                        <div class="row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <div class="d-inline-flex">
                                    <h5 class="me-2">193</h5>
                                    {{-- <div class="text-success font-size-12">
                                        <i class="mdi mdi-menu-up font-size-14"> </i>193
                                    </div> --}}
                                </div>
                                <p class="text-muted text-truncate mb-0">In IT</p>
                            </div><!-- end col -->
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <div class="d-inline-flex">
                                    <h5 class="me-2">200</h5>
                                    {{-- <div class="text-success font-size-12">
                                        <i class="mdi mdi-menu-up font-size-14"> </i>200
                                    </div> --}}
                                </div>
                                <p class="text-muted text-truncate mb-0">In Marketing</p>
                            </div><!-- end col -->
                            <div class="col-sm-4">
                                <div class="d-inline-flex">
                                    <h5 class="me-2">87</h5>
                                    {{-- <div class="text-success font-size-12">
                                        <i class="mdi mdi-menu-up font-size-14"> </i>87
                                    </div> --}}
                                </div>
                                <p class="text-muted text-truncate mb-0">In Finance</p>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                </div>
                <div class="card-body py-0 px-2">
                    <div id="area_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="float-end d-none d-md-inline-block">
                        {{-- <div class="dropdown">
                            <a class="text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="text-muted">This Years<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">This Year</a>
                            </div>
                        </div> --}}
                    </div>
                    <h4 class="card-title mb-4">Total number of candidates in Web devolper position</h4>

                    <div class="text-center pt-3">
                        <div class="row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <div>
                                    <h5>22</h5>
                                    <p class="text-muted text-truncate mb-0">Currently</p>
                                </div>
                            </div><!-- end col -->
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <div>
                                    <h5>30</h5>
                                    <p class="text-muted text-truncate mb-0">Last Week</p>
                                </div>
                            </div><!-- end col -->
                            <div class="col-sm-4">
                                <div>
                                    <h5>33</h5>
                                    <p class="text-muted text-truncate mb-0">Last Month</p>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                </div>
                <div class="card-body py-0 px-2">
                    <div id="column_line_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    {{-- <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div> --}}

                    <h4 class="card-title mb-4">IT department</h4>

                    <div class="table-responsive">
                        <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th style="width: 120px;">Salary</th>
                                </tr>
                            </thead><!-- end thead -->
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="mb-0">Mohammed</h6>
                                    </td>
                                    <td>Web Developer</td>
                                    <td>
                                        <div class="font-size-13"><i
                                                class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                        </div>
                                    </td>
                                    <td>
                                        23
                                    </td>
                                    <td>
                                        04 Apr, 2023
                                    </td>
                                    <td>$42,450</td>
                                </tr>
                                <!-- end -->
                                <tr>
                                    <td>
                                        <h6 class="mb-0">Ahmed</h6>
                                    </td>
                                    <td>Full stack devolper</td>
                                    <td>
                                        <div class="font-size-13"><i
                                                class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive
                                        </div>
                                    </td>
                                    <td>
                                        28
                                    </td>
                                    <td>
                                        01 Aug, 2024
                                    </td>
                                    <td>$25,060</td>
                                </tr>
                                <!-- end -->
                                <tr>
                                    <td>
                                        <h6 class="mb-0">   Maha</h6>
                                    </td>
                                    <td>Senior Javascript Developer</td>
                                    <td>
                                        <div class="font-size-13"><i
                                                class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                        </div>
                                    </td>
                                    <td>
                                        35
                                    </td>
                                    <td>
                                        15 Jun, 2023
                                    </td>
                                    <td>$59,350</td>
                                </tr>
                                <!-- end -->
                                <tr>
                                    <td>
                                        <h6 class="mb-0">Khadija</h6>
                                    </td>
                                    <td>React Developer</td>
                                    <td>
                                        <div class="font-size-13"><i
                                                class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                        </div>
                                    </td>
                                    <td>
                                        25
                                    </td>
                                    <td>
                                        01 March, 2023
                                    </td>
                                    <td>$23,700</td>
                                </tr>
                                <!-- end -->
                                <tr>
                                    <td>
                                        <h6 class="mb-0">Ghadeer</h6>
                                    </td>
                                    <td>Senior Web Designer</td>
                                    <td>
                                        <div class="font-size-13"><i
                                                class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                        </div>
                                    </td>
                                    <td>
                                        38
                                    </td>
                                    <td>
                                        01 Jan, 2023
                                    </td>
                                    <td>$69,185</td>
                                </tr>
                                <!-- end -->
                                <tr>
                                    <td>
                                        <h6 class="mb-0">Ibrahim</h6>
                                    </td>
                                    <td>IT spicealist</td>
                                    <td>
                                        <div class="font-size-13"><i
                                                class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive
                                        </div>
                                    </td>
                                    <td>
                                        21
                                    </td>
                                    <td>
                                        01 Sep, 2022
                                    </td>
                                    <td>$37,845</td>
                                </tr>
                                <!-- end -->
                                <tr>
                                    <td>
                                        <h6 class="mb-0">Najlae</h6>
                                    </td>
                                    <td>Senior Laravel Developer</td>
                                    <td>
                                        <div class="font-size-13"><i
                                                class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                        </div>
                                    </td>
                                    <td>
                                        32
                                    </td>
                                    <td>
                                        20 May, 2024
                                    </td>
                                    <td>$55,100</td>
                                </tr>
                                <!-- end -->
                            </tbody><!-- end tbody -->
                        </table> <!-- end table -->
                    </div>
                </div><!-- end card -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <select class="form-select shadow-none form-select-sm">
                            <option selected>Apr</option>
                            <option value="1">Mar</option>
                            <option value="2">Feb</option>
                            <option value="3">Jan</option>
                        </select>
                    </div>
                    <h4 class="card-title mb-4">Total number of candidates</h4>

                    <div class="row">
                        <div class="col-4">
                            <div class="text-center mt-4">
                                <h5>44</h5>
                                <p class="mb-2 text-truncate">Web devolper</p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-4">
                            <div class="text-center mt-4">
                                <h5>22</h5>
                                <p class="mb-2 text-truncate">Fullstack devolper</p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-4">
                            <div class="text-center mt-4">
                                <h5>15</h5>
                                <p class="mb-2 text-truncate">Senior Javascript Developer</p>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="mt-4">
                        <div id="donut-chart" class="apex-charts"></div>
                    </div>
                </div>
            </div><!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection
