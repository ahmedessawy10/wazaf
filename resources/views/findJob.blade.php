@extends('layouts.users-app')

@section("css")
<style>
    .filter-card {
        background: #fff;
        border-radius: 12px;
        padding: 24px;
        margin-bottom: 24px;
    }

    .filter-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 16px;
    }

    .custom-checkbox {
        margin-bottom: 12px;
    }

    .job-count {
        color: var(--gray-color);
        font-size: 14px;
    }
</style>
@endsection

@section("centent")
<section class="py-5">

    <div class="container">
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="mb-4" style="background-color: #fff;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}"
                        style="color: #0a65cc;text-decoration: none;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Find Job</li>
            </ol>
        </nav>
        <div class="row">
            <!-- Filters Sidebar -->
            <div class="col-lg-4">
                <form action="{{ route('jobs.index') }}" method="GET">
                    <!-- Search Box -->
                    <div class="filter-card">
                        <div class="search-box mb-4">
                            <div class="d-flex justify-content-start align-content-center px-2">
                                <i class="fa fa-search search-icon"></i>
                                <input type="text" name="search" value="{{ request('search') }}"
                                    placeholder="Job Title, Keyword" class="w-100">
                            </div>
                        </div>

                        <div class="search-box">
                            <div class="d-flex justify-content-start align-content-center px-2">
                                <i class="fa fa-map-marker search-icon"></i>
                                <input type="text" name="location" value="{{ request('location') }}"
                                    placeholder="Location" class="w-100">
                            </div>
                        </div>
                    </div>

                    <!-- Categories Filter -->
                    <div class="filter-card">
                        <h3 class="filter-title">Categories</h3>
                        @foreach($categories as $category)
                        <div class="custom-checkbox">
                            <input type="checkbox" name="category[]" value="{{ $category->id }}"
                                id="cat-{{ $category->id }}"
                                {{ in_array($category->id, (array)request('category')) ? 'checked' : '' }}>
                            <label for="cat-{{ $category->id }}">
                                {{ $category->name }}
                                <span class="job-count">({{ $category->jobs_count }})</span>
                            </label>
                        </div>
                        @endforeach
                    </div>

                    <!-- Job Type Filter -->
                    <div class="filter-card">
                        <h3 class="filter-title">Job Type</h3>
                        @foreach(['Full Time', 'Part Time', 'Contract', 'Internship'] as $type)
                        <div class="custom-checkbox">
                            <input type="checkbox" name="type[]" value="{{ $type }}" id="type-{{ $loop->index }}"
                                {{ in_array($type, (array)request('type')) ? 'checked' : '' }}>
                            <label for="type-{{ $loop->index }}">{{ $type }}</label>
                        </div>
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
                </form>
            </div>

            <!-- Jobs List -->
            <div class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>{{ $jobs->total() }} Jobs Found</h2>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                            data-bs-toggle="dropdown">
                            Sort By: Latest
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Latest</a></li>
                            <li><a class="dropdown-item" href="#">Oldest</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Jobs Grid -->
                <div class="row g-4">
                    @forelse($jobs as $job)
                    <div class="col-12">
                        <div class="job-card bg-white p-4 rounded-3 shadow-sm">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex gap-3">
                                    <div class="company-logo">
                                        <img src="{{ $job->employer->logo ?asset( $job->employer->logo):asset('defualtCompanyLogo.png') }}"
                                            alt="company logo" class="rounded-3" width="60" height="60">
                                    </div>
                                    <div>

                                        <h5 class="mb-1">{{ $job->job_title }}</h5>
                                        <p class="text-secondary mb-2">{{ $job->employer->company_name }}</p>
                                        <div class="d-flex gap-2 flex-wrap">
                                            <span class="badge bg-success text-light btn">{{ $job->job_type }}</span>
                                            <span class="badge bg-light text-dark">{{ $job->location }}</span>
                                            <span
                                                class="badge bg-light text-dark">${{ number_format($job->min_salary) }}
                                                - ${{ number_format($job->max_salary) }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-outline-primary">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <p>No jobs available matching your criteria.</p>
                    </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-5">
                    {{ $jobs->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section("script")

@endsection