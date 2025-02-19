<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 p-8">
    <!-- Container -->
    <div class="max-w-7xl mx-auto bg-white p-10 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Job Listings</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-3 rounded-md mb-6 border border-green-400">
                {{ session('success') }}
            </div>
        @endif

        <!-- Job Table -->
        <div class="overflow-auto">
            <table class="w-full text-left table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-3 px-6 border-b text-gray-700 font-medium">Job Title</th>
                        <th class="py-3 px-6 border-b text-gray-700 font-medium">Status</th>
                        <th class="py-3 px-6 border-b text-gray-700 font-medium">Description</th>
                        <th class="py-3 px-6 border-b text-gray-700 font-medium">Deadline</th>
                        <th class="py-3 px-6 border-b text-gray-700 font-medium">Total Positions</th>
                        <th class="py-3 px-6 border-b text-gray-700 font-medium">Job Type</th>
                        <th class="py-3 px-6 border-b text-gray-700 font-medium">Location</th>
                        <th class="py-3 px-6 border-b text-gray-700 font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jobs as $job)
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-6 border-b">{{ $job->job_title }}</td>
                            <td class="py-3 px-6 border-b">{{ $job->status }}</td>
                            <td class="py-3 px-6 border-b">{{ Str::limit($job->description, 50) }}</td>
                            <td class="py-3 px-6 border-b">{{ $job->deadline }}</td>
                            <td class="py-3 px-6 border-b">{{ $job->total_positions }}</td>
                            <td class="py-3 px-6 border-b">{{ ucfirst(str_replace('_', ' ', $job->job_type)) }}</td>
                            <td class="py-3 px-6 border-b">{{ $job->job_location }}</td>
                            <td class="py-3 px-6 border-b space-x-2 flex items-center">
                                <!-- View Button -->
                                <a href="{{ route('employer.jobs.show', $job->id) }}" class="text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <!-- Edit Button -->
                                <a href="{{ route('employer.jobs.edit', $job->id) }}" class="text-yellow-500 hover:text-yellow-700">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <!-- Delete Button -->
                                <form action="{{ route('employer.jobs.destroy', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job?');" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="py-3 px-6 text-center text-gray-500">No job listings available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Floating Button -->
    <div class="fixed bottom-6 right-6">
        <a href="{{ route('employer.jobs.create') }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg shadow-lg">
            + Add New Job
        </a>
    </div>
    <div class="fixed bottom-6 left-6">
        <a href="{{ route('employer.applications.redir') }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg shadow-lg">
            Approved Jobs
        </a>
    </div>
</body>
</html>
