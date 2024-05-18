@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">create job</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('jobs') }}">Jobs</a></li>
                        <li class="breadcrumb-item active">create job</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">create job</h4>
                    <form method="POST" action="{{ route('positions.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label>job name :</label>
                                        <input id="job_name" type="text" name="job_name" class="form-control"
                                            required="" placeholder="create job name" autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label>job salaries :</label>
                                        <div>
                                            <input id="job_salaries" type="number" name="job_salaries" class="form-control"
                                                required="" placeholder="Enter salary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4 mt-lg-0">
                                    <div class="mb-3">
                                        <label>job description :</label>
                                        <div>
                                            <textarea id="job_description" type="text" name="job_description" required="" class="form-control" rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>requierments :</label>
                                        <div>
                                            <textarea id="requierments" type="text" name="requierments" class="form-control" rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>department :</label>
                                        <div>
                                            <select name="department_id" class="form-select" required="">
                                                <option value="">Select department</option>
                                                @foreach ($departments as $department)
                                                    <option value="{{ $department->id }}">{{ $department->dep_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
