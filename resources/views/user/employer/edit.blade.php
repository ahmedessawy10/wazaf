<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job Position</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles for focus effect */
        input:focus, textarea:focus, select:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.5);
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="max-w-7xl mx-auto p-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Edit Job Position</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-3 rounded-md mb-6 border border-green-400">
                {{ session('success') }}
            </div>
        @endif

        <!-- Edit Form -->
        <form action="{{ route('employer.jobs.update', $jobPosition->id) }}" method="POST" class="space-y-6 bg-white p-8 rounded-lg shadow-xl border border-gray-200">
            @csrf
            @method('PUT')

            <!-- Job Title -->
            <div class="mb-4">
                <label for="job_title" class="block text-gray-700 font-semibold">Job Title</label>
                <input type="text" name="job_title" id="job_title" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition duration-200 ease-in-out focus:ring-2 focus:ring-indigo-500" value="{{ old('job_title', $jobPosition->job_title) }}" required>
                @error('job_title') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-semibold">Description</label>
                <textarea name="description" id="description" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition duration-200 ease-in-out focus:ring-2 focus:ring-indigo-500" rows="4" required>{{ old('description', $jobPosition->description) }}</textarea>
                @error('description') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Status -->
            <div class="mb-4">
                <label for="status" class="block text-gray-700 font-semibold">Status</label>
                <select name="status" id="status" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition duration-200 ease-in-out focus:ring-2 focus:ring-indigo-500" required>
                    <option value="active" {{ old('status', $jobPosition->status) == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="pending" {{ old('status', $jobPosition->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                </select>
                @error('status') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Job Type -->
            <div class="mb-4">
                <label for="job_type" class="block text-gray-700 font-semibold">Job Type</label>
                <select name="job_type" id="job_type" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition duration-200 ease-in-out focus:ring-2 focus:ring-indigo-500" required>
                    <option value="full_time" {{ old('job_type', $jobPosition->job_type) == 'full_time' ? 'selected' : '' }}>Full Time</option>
                    <option value="part_time" {{ old('job_type', $jobPosition->job_type) == 'part_time' ? 'selected' : '' }}>Part Time</option>
                    <option value="freelance" {{ old('job_type', $jobPosition->job_type) == 'freelance' ? 'selected' : '' }}>Freelance</option>
                    <option value="internship" {{ old('job_type', $jobPosition->job_type) == 'internship' ? 'selected' : '' }}>Internship</option>
                </select>
                @error('job_type') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Total Positions -->
            <div class="mb-4">
                <label for="total_positions" class="block text-gray-700 font-semibold">Total Positions</label>
                <input type="number" name="total_positions" id="total_positions" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition duration-200 ease-in-out focus:ring-2 focus:ring-indigo-500" value="{{ old('total_positions', $jobPosition->total_positions) }}" required>
                @error('total_positions') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Job Location -->
            <div class="mb-4">
                <label for="job_location" class="block text-gray-700 font-semibold">Job Location</label>
                <input type="text" name="job_location" id="job_location" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition duration-200 ease-in-out focus:ring-2 focus:ring-indigo-500" value="{{ old('job_location', $jobPosition->job_location) }}">
                @error('job_location') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Deadline -->
            <div class="mb-4">
                <label for="deadline" class="block text-gray-700 font-semibold">Deadline</label>
                <input type="date" name="deadline" id="deadline" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition duration-200 ease-in-out focus:ring-2 focus:ring-indigo-500" value="{{ old('deadline', $jobPosition->deadline) }}" required>
                @error('deadline') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Submit Button -->
            <div class="mb-6">
                <button type="submit" class="w-full bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-500">Update Job Position</button>
            </div>
        </form>
    </div>

</body>
</html>
