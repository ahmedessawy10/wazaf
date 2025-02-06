@extends('layouts.users-app')

@section("css")
<style>
    .company-card {
        transition: transform 0.2s;
        border: 1px solid #eee;
    }
    .company-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .company-logo {
        width: 100px;
        height: 100px;
        object-fit: contain;
        border: 1px solid #eee;
        padding: 10px;
        border-radius: 8px;
    }
    .search-box {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 30px;
    }
</style>
@endsection

@section("centent")
<div class="container mt-4">


    <div class="row">
        <!-- Sidebar Filters -->
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Industries</h5>
                    <div class="mt-3">
                        @foreach($industries as $industry)
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" 
                                name="industry[]" value="{{ $industry->id }}" 
                                id="industry-{{ $industry->id }}">
                            <label class="form-check-label" for="industry-{{ $industry->id }}">
                                {{ $industry->name }}
                                <span class="text-muted">({{ $industry->employers_count }})</span>
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Team Size</h5>
                    <div class="mt-3">
                        @foreach(['only_one', '10 Members', '10-20 Members', '20-50 Members', '50-100 Members', '100-200 Members'] as $size)
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" 
                                name="team_size[]" value="{{ $size }}" 
                                id="size-{{ $loop->index }}">
                            <label class="form-check-label" for="size-{{ $loop->index }}">
                                {{ str_replace('_', ' ', $size) }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Companies Grid -->
        <div class="col-md-9">
            <div class="row">
                @forelse($employers as $employer)
                <div class="col-md-6 mb-4">
                    <div class="company-card card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ $employer->logo ? asset($employer->logo) : asset('defualtCompanyLogo.png') }}" 
                                    class="company-logo me-3" alt="{{ $employer->company_name }}">
                                <div>
                                    <h5 class="card-title mb-1">{{ $employer->company_name }}</h5>
                                    <p class="text-muted mb-0">
                                        <i class="fas fa-map-marker-alt"></i> 
                                        {{ $employer->city }}
                                    </p>
                                </div>
                            </div>

                            <p class="card-text">{{ Str::limit($employer->about_us, 100) }}</p>

                            <div class="mb-3">
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-users"></i> {{ $employer->team_size }}
                                </span>
                                @if($employer->industry)
                                <span class="badge bg-light text-dark">
                                    {{ $employer->industry->name }}
                                </span>
                                @endif
                            </div>

                            <a href="{{ route('employers.show', $employer) }}" 
                                class="btn btn-outline-primary">View Company</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="alert alert-info">
                        No companies found matching your criteria.
                    </div>
                </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $employers->links() }}
            </div>
        </div>
    </div>
</div>
@endsection 