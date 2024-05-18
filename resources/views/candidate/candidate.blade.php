@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">


                <div class="page-title-right">
                    <ol class="m-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">All candidates</a></li>
                        <li class="breadcrumb-item active">Candidates</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-10"><!--col-7-->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Available positions</h4>
                    <div class="table-responsive">
                        <table class="table align-middle table-editable table-nowrap table-edits">
                            <thead>
                                <tr>

                                    <th>Number</th>
                                    <th>Job</th>
                                    <th>Department</th>
                                    <th>Position state</th>
                                    {{-- <th>Application state</th> --}}
                                </tr>
                            </thead>
                            <tbody>

                                <tr data-id="1">
                                <td data-field="id" style="width: 80px">1</td>
                                <td data-field="job">Web devoleper</td>
                                <td data-field="department">IT</td>
                                <td data-field="position state"><button type="button" class="btn btn-outline-secondary waves-effect"><a
                                    href="#">Vacant position</a></button></td>
                                </tr>

                                <tr data-id="2">
                                    <td data-field="id">2</td>
                                    <td data-field="name">Marketing Manager</td>
                                    <td data-field="age">Marketing</td>
                                    <td data-field="position state"><button type="button" class="btn btn-outline-secondary waves-effect"><a
                                        href="#">Vacant position</a></button></td>
                                    {{-- <td data-field="click"><button type="button"
                                            class="btn btn-outline-primary waves-effect waves-light"><a href="#">Click
                                                for details</a></button></td> --}}
                                    {{-- <td data-field="click"><button type="button"
                                            class="btn btn-outline-primary waves-effect waves-light"><a href="#">Click
                                                for details</a></button></td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
        {{-- <div class="col-5"><!--col-10 8-->
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Application state</h4>

                    <div class="table-responsive">
                        <table class="table align-middle table-editable table-nowrap table-edits">
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Candidate name</th>
                                    <th>State</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-id="1">
                                    <td data-field="id" style="width: 80px">1</td>
                                    <a href=#></a>
                                    <td data-field="name">Retaj Ahmed</td><!--from db-->
                                    <!--<td data-field="state">pending</td>-->
                                    <div class="button-items">
                                        <td><button type="button"
                                                class="btn btn-outline-primary waves-effect waves-light"><a
                                                    href="#">pending</a></button></td>

                                </tr>
                                <tr data-id="2">
                                    <td data-field="id">2</td>
                                    <td data-field="name">Lana ibrahim</td><!--from db-->
                                    <td><button type="button" class="btn btn-outline-secondary waves-effect"><a
                                                href="#">under review</a></button>
                                    </td>
                                <tr data-id="3">
                                    <td data-field="id">3</td>
                                    <td data-field="name">Lina mahmood</td><!--from db-->
                                    <td><button type="button" class="btn btn-outline-success waves-effect waves-light"><a
                                                href="#">accepted</a></button></td>

                                </tr>
                                <tr data-id="4">
                                    <td data-field="id">4</td>
                                    <td data-field="name">yazeed khalid</td><!--from db-->
                                    <td><button type="button" class="btn btn-outline-danger waves-effect waves-light"><a
                                                href="#">rejected</a></button></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
    </div> <!-- end row -->

    <!--hereee-->
    {{-- <div class="col-10">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Top Suggested candidates for all departments</h4>

                <div class="table-responsive">
                    <table class="table align-middle table-editable table-nowrap table-edits">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Job</th>
                                <th>Match percentage</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-id="1">
                                <td data-field="id" style="width: 80px">1</td>
                                <a href=#></a>
                                <td data-field="name">Ali Hatem</td><!--from db-->
                                <td data-field="state">Web devolpment</td>
                                <div class="button-items">
                                    <td><button type="button" class="btn btn-outline-success waves-effect waves-light"><a
                                                href="#">92%</a></button></td>
                                    <td data-field="description">Peracntage of matched candidate's cv
                                        requirements with job description</td>

                            </tr>
                            <tr data-id="2">
                                <td data-field="id">2</td>
                                <a href=#></a>
                                <td data-field="name">Mohammad Abduallah</td><!--from db!-->
                                <td data-field="state">Content writer</td>
                                <div class="button-items">
                                    <td><button type="button" class="btn btn-outline-success waves-effect waves-light"><a
                                                href="#">85%</a></button></td>
                                    <td data-field="description">Peracntage of matched candidate's cv
                                        requirements with job description</td>

                            <tr data-id="3">
                                <td data-field="id">3</td>
                                <a href=#></a>
                                <td data-field="name">Ahlam Mishal</td><!--from db!-->
                                <td data-field="state">Programming</td>
                                <div class="button-items">
                                    <td><button type="button" class="btn btn-outline-success waves-effect waves-light"><a
                                                href="#">80%</a></button></td>
                                    <td data-field="description">Peracntage of matched candidate's cv
                                        requirements with job description</td>

                            </tr>
                            <tr data-id="4">
                                <td data-field="id">4</td>
                                <a href=#></a>
                                <td data-field="name">Abdualaziz Khalid</td><!--from db!-->
                                <td data-field="state">Accountant</td>
                                <div class="button-items">
                                    <td><button type="button" class="btn btn-outline-success waves-effect waves-light"><a
                                                href="#">82%</a></button></td>
                                    <td data-field="description">Peracntage of matched candidate's cv
                                        requirements with job description</td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}



    <!--here fisrt card-->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-4 card-title">Number of applied monthly candidates in each department</h4>
                    <!--Column with Data Labels-->

                    <div id="column_chart_datalabel" class="apex-charts" dir="ltr">
                    </div>
                </div>
            </div><!--end card-->
        </div>
        <!-- second card -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-4 card-title">Total number of applicants in all months</h4><!--Bar Chart-->

                    <div id="bar_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div><!--end card-->
        </div>
    </div>
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }} "></script>

    <!-- apexcharts init -->
    <script src="{{ asset('assets/js/pages/apexcharts.init.js') }} "></script>
@endsection


