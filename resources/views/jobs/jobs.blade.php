{{-- Jobs(vacant position) page --}}
@extends('layouts.app')

@section('content')
    <div class="mb-3 row">
        <label for="example-search-input" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-6">
            <form action="{{ route('search-filter') }}" method="GET">
                <div class="input-group">
                    <input name="search" class="form-control" type="search" placeholder="Search..">
                    <select name="department_id" class="form-select" placeholder=" ">
                        <option value=""> </option>
                        @foreach ($departments as $dep)
                            <option value="{{ $dep->id }}">{{ $dep->dep_name }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-primary" type="submit">Filter</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <a href="{{ route('positions.create') }}"><button class="btn btn-primary">Create</button></a>

                    <div class="page-title-right">
                        <ol class="m-0 breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Positions</li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- start first row of job cards content -->

        <div class="row">
            @forelse ($position as $job)
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="btn-group dropstart">
                                <button type="button"
                                    class="btn btn-info btn-light btn-rounded btn-sm waves-effect dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="mdi mdi-briefcase-account font-size-24"></i>
                                        </span>
                                    </div>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('positions.edit', $job->id) }}">Edit</a>
                                    <a class="dropdown-item" href="#"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $job->id }}').submit();">Delete</a>
                                    <form id="delete-form-{{ $job->id }}"
                                        action="{{ route('positions.destroy', $job->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <br>
                                    <p class="mb-2 text-truncate font-size-14">{{ $job->job_name }}</p>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success fw-bold font-size-12 me-2"></span>
                                        <a
                                            href="{{ route('positions.show', $job->id) }}">{{ Str::limit($job->job_description, 50, ' more..') }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h1>Not found</h1>
            @endforelse
        </div>
    </div>
@endsection
