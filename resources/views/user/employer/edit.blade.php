@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Edit Job Position</h1>

        <!-- Form for editing the job position -->
        <form action="{{ route('employer.jobs.update', $jobPosition->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="job_title" class="block text-gray-700">Job Title</label>
                <input type="text" name="job_title" id="job_title" class="w-full px-4 py-2 border rounded" value="{{ old('job_title', $jobPosition->job_title) }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" class="w-full px-4 py-2 border rounded" rows="4" required>{{ old('description', $jobPosition->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="deadline" class="block text-gray-700">Deadline</label>
                <input type="date" name="deadline" id="deadline" class="w-full px-4 py-2 border rounded" value="{{ old('deadline', $jobPosition->deadline) }}" required>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Job</button>
            </div>
        </form>
    </div>
@endsection
