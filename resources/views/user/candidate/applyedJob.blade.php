@extends('layouts.users-app')
@section("css")
<style>
    /* Custom CSS */
    .sidebar {
        min-height: 100vh;
        background: linear-gradient(180deg, #1e3c72, #2a5298);
        position: sticky;
        top: 0;
    }

    .sidebar h2 {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .sidebar .nav-link {
        font-size: 1rem;
        padding: 12px 15px;
        border-radius: 8px;
        transition: all 0.3s ease;
        margin-bottom: 5px;
        display: flex;
        align-items: center;
    }

    .sidebar .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.15);
        transform: translateX(8px);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .sidebar .nav-link i {
        margin-right: 12px;
        width: 20px;
        text-align: center;
    }

    .card {
        border: none;
        border-radius: 12px;
        padding: 1.5rem !important;
        height: 100%;
    }

    .card-hover {
        transition: all 0.3s ease;
        background: linear-gradient(145deg, #e6f3ff, #f0f7ff);
        border: 1px solid rgba(30, 60, 114, 0.1);
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        background: linear-gradient(145deg, #e1f0ff, #eaf5ff);
    }

    .card h3 {
        font-size: 2rem;
        font-weight: 600;
        color: #1e3c72;
        margin-bottom: 0.5rem;
    }

    .card p {
        color: #555;
        margin-bottom: 0;
        font-weight: 500;
    }

    @media (max-width: 768px) {
        .col-md-3 {
            margin-bottom: 1rem;
        }

        .card {
            padding: 1rem !important;
        }

        .card h3 {
            font-size: 1.5rem;
        }

        .sidebar {
            position: fixed;
            z-index: 1000;
            width: 100%;
            max-height: 100vh;
            overflow-y: auto;
        }

        .main-content {
            margin-top: 60px;
        }
    }

    .table {
        background: white;
        border-radius: 10px;
        overflow: hidden;
    }

    .table thead th {
        background-color: #f8f9fa;
        border-bottom: 2px solid #dee2e6;
        color: #1e3c72;
        font-weight: 600;
    }

    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
        transition: background-color 0.2s ease;
    }

    .btn-hover {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-hover:hover,
    .btn-hover.active {
        transform: scale(1.05);
        background-color: rgba(255, 255, 255, 0.2);
    }

    .main-content {
        padding: 2rem;
        background-color: #f8f9fa;
        min-height: 100vh;
    }

    h1,
    h2 {
        color: #1e3c72;
        font-weight: 600;
    }

    .lead {
        color: #555;
    }


    .content-section.active {
        display: block;
    }

    .form-control {
        margin-bottom: 1rem;
    }

    .btn-primary {
        background-color: #1e3c72;
        border: none;
    }

    .btn-primary:hover {
        background-color: #2a5298;
    }

    .nav-tabs .nav-link {
        border: none;
        color: #1e3c72;
        font-weight: 500;
    }

    .nav-tabs .nav-link.active {
        border-bottom: 2px solid #1e3c72;
        color: #1e3c72;
        font-weight: 600;
    }

    .nav-tabs .nav-link:hover {
        color: #2a5298;
    }
</style>
@endsection
@section("centent")

<div class="container-fluid px-1 py-4">
    <div class="row">

        <div class="col-2">
            <x-candidate-slider></x-candidate-slider>

        </div>

        <div class="col-9">
            <div id="applied-jobs" class="content-section">
                <h2 class="mb-4">Applied Jobs</h2>
                <table class="table table-hover shadow-sm">
                    <thead>
                        <tr>
                            <th>Job Id</th>
                            <th>Job title</th>
                            <th>company name</th>
                            <th>apply date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- @dump($applyedJobs->appliedJobs) --}}
                        @forelse ($applyedJobs->appliedJobs as $job)
                        <tr class="text-center">
                            <td>{{ $job->id }} </td>
                            <td>{{ $job->job_title }} </td>
                            <td>{{ $job->employer->company_name }} </td>
                            <td>{{ $job->created_at->format('M d, Y H:i') }} </td>
                            <td><span class="text-success">{{ $job->status }}</span></td>
                            <td>
                                <a href="{{route('jobs.show',$job->id)}}"
                                    class="btn btn-primary text-decoration-none btn-hover">View Details</a>

                                <a href="{{route('candidate.applyedJob.cancel',$job->id)}}"
                                    class="btn btn-danger text-decoration-none btn-hover">cancel
                                    apply</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">لا توجد وظائف متقدمة</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>




@endsection

@section("script")

@endsection