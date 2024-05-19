{{-- Home page --}}
@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                <h3 class="mb-sm-0">Departments</h3>
                <h3 class="mb-sm-0">Dashboard</h3>
                <div class="page-title-right">
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <div class ="flex-container">
                        <div class ="HortLINE1"></div>
                        <div class ="flex-box1">
                            <h2 class="DEPname">Marketing</h2>

                            <h5 class="EPname">Fatima Ali</h5>
                            <h6 id ="M">Director of Marketing Department</h6>
                            <button id="m" type="button"onclick="location.href='/departments'">See
                                Details</button>


                        </div>
                        <div class ="HortLINE2"></div>
                        <div class ="flex-box2">
                            <h2 class="DEPname">Finance</h2>
                            <h5 class="EPname">Mohammed Ali</h5>
                            <h6 id ="F">Director of the Finance Department</h6>
                            <button id="f" type="button" onclick="location.href='/departments'">See
                                Details</button>

                        </div>
                    </div>
                    <div class ="HortLINE3"></div>
                    <div class ="flex-box3">
                        <h2 class="DEPname">IT</h2>
                        <h5 class="EPname">Sara Ahmed </h5>
                        <h6 id ="I">CTO</h6>
                        <button id="i" type="button" onclick="location.href='/departments'">See
                            Details</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end card-->
        <!-- second card -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Total number of candidates</h4>

                    <div id="radial_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
            <!--end card-->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4"> Candidate's State</h4>

                    <div id="radialBar" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
            <!--end card-->
        </div>
    </div>
@endsection
@section('style')
    <style type="text/css">
        {
            margin: 0;
            padding: 0;
            font-family:
                cursive;
            box-sizing: border-box;
        }

        .flex-container {
            width: 100%;
            height: auto:
        }

        .flex-box1 {
            width: 400px;
            height: 200px;
            background: linear-gradient(white, lightgray);


            color: MediumTurquoise;
            font-size: 25px;
            text-align: left;
            line-height: 200px;
            border-radius: 20px;
        }

        .flex-box2 {
            width: 400px;
            height: 200px;
            background: linear-gradient(white, lightgray);
            color: #E089FF;
            font-size: 25px;
            text-align: left;
            line-height: 200px;
            border-radius: 20px;
        }

        .flex-box3 {
            width: 400px;
            height: 200px;
            background: linear-gradient(white, lightgray);
            color: #FFEA7E;
            font-size: 25px;
            text-align: left;
            line-height: 200px;
            border-radius: 20px;
        }

        .HortLINE1 {
            width: 390px;
            height: 4px;
            margin: 10px;
            background: MediumTurquoise;
            border-radius: 50px;
        }

        .HortLINE2 {
            width: 390px;
            height: 4px;
            margin: 7px;
            background: #E089FF;
            border-radius: 50px;
        }

        .HortLINE3 {
            width: 390px;
            height: 4px;
            margin: 10px;
            background: #FFEA7E;
            border-radius: 50px;
        }


        #M {
            padding: 3px;
            margin: 10px;
            color: MediumTurquoise;
            filter: blur(1px);
        }

        #F {
            padding: 3px;
            margin: 10px;
            color: #E089FF;
            filter: blur(1px);
        }

        #I {
            padding: 3px;
            margin: 10px;
            color: #FFEA7E;
            filter: blur(1px);
        }

        #m {
            background-color: mediumturquoise;
            border: none;
            position: absolute;
            transform: translate(-1%, -50%);
            top: 30%;
            left: 320px;
            width: 81.5px;
            /* Set width */
            height: 30.04px;
            /* Set height */
            font-size: 13px;
            text-align: center;
            line-height: 30.04px;
            color: white;
            padding: 0;
            /* Removed padding to make the button size accurate */
            border-radius: 10px;
        }

        #f {

            background-color: #E089FF;
            border: none;
            position: absolute;
            transform: translate(-1%, -50%);
            top: 61%;
            left: 320px;
            width: 81.5px;
            /* Set width */
            height: 30.04px;
            /* Set height */
            font-size: 13px;
            text-align: center;
            line-height: 30.04px;
            color: white;
            padding: 0;
            /* Removed padding to make the button size accurate */
            border-radius: 10px;
        }

        #i {

            background-color: #FFEA7E;
            border: none;
            position: absolute;
            transform: translate(-1%, -50%);
            top: 93%;
            left: 320px;
            width: 81.5px;
            /* Set width */
            height: 30.04px;
            /* Set height */
            font-size: 13px;
            text-align: center;
            line-height: 30.04px;
            color: black;
            padding: 0;
            /* Removed padding to make the button size accurate */
            border-radius: 10px;
        }

        .DEPname {
            padding-bottom: 30px;
            padding: 15px;
            margin: 10px;
        }

        .EPname {
            padding-bottom: 1px;
            margin: 10px;
            filter: blur(1px);
        }
    </style>
@endsection
@section('script')
    <script>
        var options = {
            series: [70, 30], // Assuming 70% completed and 30% incomplete
            chart: {
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '30%',
                    },
                    track: {
                        background: '#e0e0e0', // Gray background for the incomplete progress
                    },
                    dataLabels: {
                        name: {
                            offsetY: -10,
                            show: true,
                            color: '#888',
                            fontSize: '13px'
                        },
                        value: {
                            color: '#111',
                            fontSize: '30px',
                            show: true,
                        }
                    }
                },
            },
            labels: ['Completed Progress', 'Incomplete Progress'],
            colors: ['#28a745', '#dc3545'], // Green for completed, Red for incomplete
            legend: {
                show: true,
                labels: {
                    colors: ['#28a745', '#dc3545'], // Matching colors for the legend
                    useSeriesColors: false,
                },
                markers: {
                    fillColors: ['#28a745', '#dc3545'], // Matching colors for the legend markers
                },
                itemMargin: {
                    vertical: 3,
                },
            },
        };

        var chart = new ApexCharts(document.querySelector("#radialBar"), options);
        chart.render();
    </script>
    <script src="{{ asset('assets/auth/js/pages/apexcharts.init.js') }}"></script>
@endsection
