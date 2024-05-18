{{-- Dashboard page --}}
@extends('layouts.app')
@section('style')
@endsection
@section('content')
    <!-- start page title -->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    {{-- <h4 class="mb-sm-0"></h4>Main dashboard --}}

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Main dashboard</a></li>
                            <li class="breadcrumb-item active">Charts</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Total number of candidates in each dapartment</h4>

                        <div id="line_chart_datalabel" class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!--end card-->
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Dashed Line</h4>

                        <div id="line_chart_dashed" class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!--end card-->
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Spline Area</h4>

                        <div id="spline_area" class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!--end card-->
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Total number of candidates in IT department</h4>

                        <div id="column_chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!--end card-->
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Total number of candidates in each vacant position</h4>

                        <div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!--end card-->
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Total number of candidates in each mounth</h4>

                        <div id="bar_chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!--end card-->
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Line, Column & Area Chart</h4>

                        <div id="mixed_chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!--end card-->
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Radial Chart</h4>

                        <div id="radial_chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!--end card-->

            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Total number of candidates in IT department</h4>

                        <div id="pie_chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Total number of candidates in IT department</h4>

                        <div id="donut_chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end row -->
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }} "></script>

    <!-- apexcharts init -->
    <script src="{{ asset('assets/js/pages/apexcharts.init.js') }} "></script>
@endsection
