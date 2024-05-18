@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-4 card-title">Average Number of candidates in each department</h4>
                    <!--Line with Data Labels-->

                    <div id="line_chart_datalabel" class="apex-charts" dir="ltr"></div>
                </div>
            </div><!--end card-->
        </div>
    </div>
@endsection
