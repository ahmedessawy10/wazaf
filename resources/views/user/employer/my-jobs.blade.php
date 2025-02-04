<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Job Listings</h1>

        <!-- Display success message if any -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table to display jobs -->
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Job Title</th>
                    <th class="py-2 px-4 border-b">status</th>
                    <th class="py-2 px-4 border-b">Description</th>
                    <th class="py-2 px-4 border-b">Deadline</th>
                    <th class="py-2 px-4 border-b">Total Positions</th>
                    <th class="py-2 px-4 border-b">Job Type</th>
                    <th class="py-2 px-4 border-b">location</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $job->job_title }}</td>
                        <td class="py-2 px-4 border-b">{{ $job->status }}</td>

                        <td class="py-2 px-4 border-b">{{ Str::limit($job->description, 50) }}</td>
                        <td class="py-2 px-4 border-b">{{ $job->deadline }}</td>
                        <td class="py-2 px-4 border-b">{{ $job->total_positions }}</td>
                        <td class="py-2 px-4 border-b">{{ ucfirst(str_replace('_', ' ', $job->job_type)) }}</td>
                        {{-- job status --}}
                        <td class="py-2 px-4 border-b">{{ $job->job_location }}</td>


                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('employer.jobs.show', $job->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- bottom to add new job --}}
    <div class="fixed bottom-4 right-4"></div>
        <a href="{{ route('employer.jobs.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add New Job
        </a>
    </div>


</body>
</html>
