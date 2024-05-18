@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit Job</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('jobs') }}">Jobs</a></li>
                        <li class="breadcrumb-item active">Edit Job</li>
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
                    <h4 class="card-title mb-4">Edit Job</h4>
                    <form method="POST" action="{{ route('positions.update', $position->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label>Job Name :</label>
                                        <input id="job_name" type="text" name="job_name" class="form-control"
                                            required="" value="{{ $position->job_name }}" autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label>Job Salaries :</label>
                                        <div>
                                            <input id="job_salaries" type="number" name="job_salaries" class="form-control"
                                                required="" value="{{ $position->job_salaries }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-4 mt-lg-0">
                                    <div class="mb-3">
                                        <label>Job Description :</label>
                                        <div>
                                            <textarea id="job_description" type="text" name="job_description" required="" class="form-control" rows="1">{{ $position->job_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>Requierments :</label>
                                        <div>
                                            <textarea id="requierments" type="text" name="requierments" class="form-control" rows="1">{{ $position->requierments }}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>Department :</label>
                                        <div>
                                            <select name="department_id" class="form-select" required="">
                                                <option value="">Select department</option>
                                                @foreach ($departments as $department)
                                                    <option value="{{ $department->id }}"
                                                        {{ $department->id == $position->department_id ? 'selected' : '' }}>
                                                        {{ $department->dep_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
