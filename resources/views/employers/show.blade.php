@extends('layouts.users-app')

@section("css")
<style>
    .company-header {
        background-size: cover;
        background-position: center;
        padding: 100px 0;
        position: relative;
    }
    .company-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.5);
    }
    .company-logo-lg {
        width: 150px;
        height: 150px;
        object-fit: contain;
        background: white;
        padding: 15px;
        border-radius: 10px;
    }
    .info-card {
        height: 100%;
        transition: transform 0.2s;
    }
    .info-card:hover {
        transform: translateY(-5px);
    }
</style>
@endsection

@section("centent")
<!-- Company Header -->
<div class="company-header" style="background-image: url('{{ $employer->banner_image ? asset($employer->banner_image) : asset('images/default-banner.jpg') }}')">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="{{ $employer->logo ? asset($employer->logo) : asset('defualtCompanyLOGO.png') }}" 
                    class="company-logo-lg" alt="{{ $employer->company_name }}">
            </div>
            <div class="col-md-9 text-white">
                <h1>{{ $employer->company_name }}</h1>
                <p class="mb-2">
                    <i class="fas fa-map-marker-alt"></i> 
                    {{ $employer->city }}, {{ $employer->address }}
                </p>
                <div class="d-flex gap-3">
                    @if($employer->website_url)
                    <a href="{{ $employer->website_url }}" class="btn btn-light" target="_blank">
                        <i class="fas fa-globe"></i> Visit Website
                    </a>
                    @endif
                    <button class="btn btn-outline-light">
                        <i class="fas fa-bookmark"></i> Follow Company
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-8">
            <!-- About Section -->
            <div class="card mb-4">
                <div class="card-body">
                    <h3>About Us</h3>
                    <p>{{ $employer->about_us }}</p>
                </div>
            </div>

            <!-- Company Vision -->
            @if($employer->company_vision)
            <div class="card mb-4">
                <div class="card-body">
                    <h3>Company Vision</h3>
                    <p>{{ $employer->company_vision }}</p>
                </div>
            </div>
            @endif

            <!-- Latest Jobs -->
            <div class="card mb-4">
                <div class="card-body">
                    <h3>Latest Job Openings</h3>
                    @forelse($employer->jobs as $job)
                    <div class="border-bottom py-3">
                        <h5>{{ $job->job_title }}</h5>
                        <div class="d-flex gap-2 mb-2">
                            <span class="badge bg-primary">{{ $job->job_type }}</span>
                            <span class="badge bg-secondary">{{ $job->location }}</span>
                        </div>
                        <a href="{{ route('jobs.show', $job) }}" class="btn btn-sm btn-outline-primary">
                            View Job
                        </a>
                    </div>
                    @empty
                    <p class="text-muted">No job openings available at the moment.</p>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <!-- Company Info -->
            <div class="card mb-4">
                <div class="card-body">
                    <h3>Company Information</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <strong>Founded:</strong> {{ $employer->year_establish }}
                        </li>
                        <li class="mb-2">
                            <strong>Team Size:</strong> {{ $employer->team_size }}
                        </li>
                        @if($employer->industry)
                        <li class="mb-2">
                            <strong>Industry:</strong> {{ $employer->industry->name }}
                        </li>
                        @endif
                        @if($employer->organizationType)
                        <li class="mb-2">
                            <strong>Organization Type:</strong> 
                            {{ $employer->organizationType->name }}
                        </li>
                        @endif
                    </ul>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="card">
                <div class="card-body">
                    <h3>Contact Information</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-envelope"></i> {{ $employer->company_email }}
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone"></i> {{ $employer->phone }}
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-map-marker-alt"></i> {{ $employer->address }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 