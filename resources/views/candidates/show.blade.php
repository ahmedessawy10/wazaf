@extends('layouts.users-app')

@section("css")
<style>
    .profile-header {
        background: linear-gradient(to right, #4a90e2, #63b3ed);
        color: white;
        padding: 3rem 0;
    }
    .profile-image-lg {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid white;
    }
    .section-card {
        margin-bottom: 2rem;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
</style>
@endsection

@section("centent")
<!-- Profile Header -->
<div class="profile-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="{{ $candidate->user->profile_photo_url ?? asset('avatar.png') }}" 
                    class="profile-image-lg" alt="Profile Image">
            </div>
            <div class="col-md-9">
                <h1>{{ $candidate->user->name }}</h1>
                <h4>{{ $candidate->job_title }}</h4>
                <p><i class="fas fa-map-marker-alt"></i> {{ $candidate->city }}, {{ $candidate->country }}</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-8">
            <!-- About Section -->
            <div class="card section-card">
                <div class="card-body">
                    <h3 class="card-title">About</h3>
                    <p>{{ $candidate->summary }}</p>
                </div>
            </div>

            <!-- Skills Section -->
            <div class="card section-card">
                <div class="card-body">
                    <h3 class="card-title">Skills</h3>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach($candidate->skills as $skill)
                            <span class="badge bg-primary">{{ $skill->name }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Experience Section -->
            <div class="card section-card">
                <div class="card-body">
                    <h3 class="card-title">Experience</h3>
                    <!-- Add experience details here -->
                </div>
            </div>

            <!-- Education Section -->
            <div class="card section-card">
                <div class="card-body">
                    <h3 class="card-title">Education</h3>
                    <!-- Add education details here -->
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <!-- Contact Information -->
            <div class="card section-card">
                <div class="card-body">
                    <h3 class="card-title">Contact Information</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-envelope"></i> {{ $candidate->user->email }}
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone"></i> {{ $candidate->phone }}
                        </li>
                        @if($candidate->personal_website)
                        <li class="mb-2">
                            <i class="fas fa-globe"></i> 
                            <a href="{{ $candidate->personal_website }}" target="_blank">Personal Website</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="card section-card">
                <div class="card-body">
                    <h3 class="card-title">Additional Information</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Availability:</strong> {{ $candidate->avilability }}
                        </li>
                        <li class="list-group-item">
                            <strong>Military Status:</strong> {{ $candidate->military_status }}
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Download Resume -->
            @if($candidate->resume)
            <div class="card section-card">
                <div class="card-body text-center">
                    <a href="{{ Storage::url($candidate->resume) }}" 
                        class="btn btn-primary btn-lg w-100" target="_blank">
                        <i class="fas fa-download"></i> Download Resume
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection 