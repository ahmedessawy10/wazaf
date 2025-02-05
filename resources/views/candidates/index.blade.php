@extends('layouts.users-app')

@section("css")
<style>
    .candidate-card {
        transition: transform 0.2s;
        border: 1px solid #eee;
    }
    .candidate-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .profile-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
    }
    .skills-list span {
        font-size: 0.8rem;
        margin-right: 5px;
    }
</style>
@endsection

@section("centent")
<div class="container mt-4">
    <!-- Search Section -->
    

    <!-- Candidates Grid -->
    <div class="row">
        @forelse($candidates as $candidate)
        <div class="col-md-4 mb-4">
            <div class="candidate-card card h-100">
                <div class="card-body text-center">
                    <img src="{{ $candidate->user->profile_photo_url ?? asset('avatar.png') }}" 
                        class="profile-image mb-3" alt="Profile Image">
                    
                    <h5 class="card-title">{{ $candidate->user->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $candidate->job_title }}</h6>
                    
                    <div class="location mb-3">
                        <i class="fas fa-map-marker-alt"></i>
                        {{ $candidate->city }}, {{ $candidate->country }}
                    </div>

                    <div class="skills-list mb-3">
                        @foreach($candidate->skills->take(4) as $skill)
                            <span class="badge bg-light text-dark">{{ $skill->name }}</span>
                        @endforeach
                        @if($candidate->skills->count() > 4)
                            <span class="badge bg-secondary">+{{ $candidate->skills->count() - 4 }} more</span>
                        @endif
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('candidates.show', $candidate) }}" 
                            class="btn btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info">
                No candidates found matching your criteria.
            </div>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $candidates->links() }}
    </div>
</div>
@endsection 