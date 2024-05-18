@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Candidates</h4>

                <div class="page-title-right">
                    <ol class="m-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                        <li class="breadcrumb-item active">Candidates</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-10"><!--col-10 8-->
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
                                    <th>position state</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr><!--data-id="1"-->
                                <td></td><!--<td data-field="id" style="width: 80px">1</td>-->
                                <td></td><!--from db  <td data-field="job">Web devoleper</td>-->
                                <td></td><!--<td data-field="department">IT</td>-->
                                <td></td><!--<td data-field="position state">Vacant position</td>-->

                                </tr>

                                <tr data-id="2">
                                    <td data-field="id">2</td>
                                    <td data-field="name">Marketing Manager</td>
                                    <td data-field="age">Marketing</td>
                                    <td data-field="position state">Vacant position</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

    </div>
@endsection
