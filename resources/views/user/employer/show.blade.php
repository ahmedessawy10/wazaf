@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-3xl font-bold mb-4">Job Details</h1>

        <!-- Job Position Details -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">{{ $job->job_title }}</h2>

            <p class="text-gray-700 mb-2"><strong>Description:</strong> {{ $job->description }}</p>
            <p class="text-gray-700 mb-2"><strong>Status:</strong> {{ $job->status }}</p>
            <p class="text-gray-700 mb-2"><strong>Deadline:</strong> {{ $job->deadline }}</p>
            <p class="text-gray-700 mb-2"><strong>Total Positions:</strong> {{ $job->total_positions }}</p>
            <p class="text-gray-700 mb-2"><strong>Job Type:</strong> {{ ucfirst(str_replace('_', ' ', $job->job_type)) }}</p>
            <p class="text-gray-700 mb-2"><strong>Location:</strong> {{ $job->job_location }}</p>
        </div>

        <!-- Back to Job Listings Button -->
        <div class="mt-6">
            <a href="{{ route('employer.jobs.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">
                Back to Job Listings
            </a>
        </div>
    </div>
@endsection
