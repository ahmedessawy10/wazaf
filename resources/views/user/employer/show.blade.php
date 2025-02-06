<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center">Job Details</h1>

        <!-- Job Position Details -->
        <div class="bg-white p-8 rounded-xl shadow-lg ring-1 ring-gray-200">
            <h2 class="text-3xl font-semibold text-gray-900 mb-4">{{ $job->job_title }}</h2>

            <div class="space-y-4 text-lg text-gray-700">
                <p><strong class="text-gray-800">Description:</strong> {{ $job->description }}</p>
                <p><strong class="text-gray-800">Status:</strong> <span class="text-{{ $job->status === 'active' ? 'green' : 'yellow' }}-500">{{ ucfirst($job->status) }}</span></p>
                <p><strong class="text-gray-800">Deadline:</strong> {{ $job->deadline }}</p>
                <p><strong class="text-gray-800">Total Positions:</strong> {{ $job->total_positions }}</p>
                <p><strong class="text-gray-800">Job Type:</strong> {{ ucfirst(str_replace('_', ' ', $job->job_type)) }}</p>
                <p><strong class="text-gray-800">Location:</strong> {{ $job->job_location }}</p>
            </div>
        </div>

        <!-- Back to Job Listings Button -->
        <div class="mt-8 text-center">
            <a href="{{ route('employer.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg shadow-md transition duration-300 transform hover:scale-105">
                Back to Job Listings
            </a>
        </div>
    </div>

</body>
</html>
