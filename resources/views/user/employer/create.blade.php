<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    {{-- link bootstrap --}}

    <title>Document</title>
</head>
<body>

    <form id="postJobForm" method="POST" action="{{ route('employer.jobs.store') }}" class="space-y-6">
        @method('POST') <!-- Method Spoofing for Laravel -->
        @csrf <!-- CSRF Token for Laravel -->

        <!-- Job Title -->
        <div>
            <label for="job_title" class="block text-sm font-medium text-gray-700">Job Title <span class="text-red-500">*</span></label>
            <input type="text" id="job_title" name="job_title" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <!-- Description -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description <span class="text-red-500">*</span></label>
            <textarea id="description" name="description" rows="4" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
        </div>

        <!-- Category ID -->
        <div>
            <label for="category_id" class="block text-sm font-medium text-gray-700">Category <span class="text-red-500">*</span></label>
            <select id="category_id" name="category_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                <option value="1">Category 1</option>
                <option value="2">Category 2</option>
                <!-- Add more options dynamically -->
            </select>
        </div>

        <!-- Experience ID -->
        <div>
            <label for="experience_id" class="block text-sm font-medium text-gray-700">Experience Level <span class="text-red-500">*</span></label>
            <select id="experience_id" name="experience_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                <option value="1">Entry Level</option>
                <option value="2">Mid Level</option>
                <option value="3">Senior Level</option>
            </select>
        </div>

        <!-- Education ID -->
        <div>
            <label for="education_id" class="block text-sm font-medium text-gray-700">Education Level <span class="text-red-500">*</span></label>
            <select id="education_id" name="education_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                <option value="1">High School</option>
                <option value="2">Bachelor's Degree</option>
                <option value="3">Master's Degree</option>
            </select>
        </div>

        <!-- Deadline -->
        <div>
            <label for="deadline" class="block text-sm font-medium text-gray-700">Deadline <span class="text-red-500">*</span></label>
            <input type="date" id="deadline" name="deadline" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <!-- Total Positions -->
        <div>
            <label for="total_positions" class="block text-sm font-medium text-gray-700">Total Positions <span class="text-red-500">*</span></label>
            <input type="number" id="total_positions" name="total_positions" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <!-- Job Type -->
        <div>
            <label for="job_type" class="block text-sm font-medium text-gray-700">Job Type <span class="text-red-500">*</span></label>
            <select id="job_type" name="job_type" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                <option value="full_time">Full Time</option>
                <option value="part_time">Part Time</option>
                <option value="freelance">Freelance</option>
                <option value="internship">Internship</option>
            </select>
        </div>

        <!-- Job Location -->
        <div>
            <label for="job_location" class="block text-sm font-medium text-gray-700">Job Location</label>
            <input type="text" id="job_location" name="job_location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <!-- Salary Type -->
        <div>
            <label for="salary_type" class="block text-sm font-medium text-gray-700">Salary Type <span class="text-red-500">*</span></label>
            <select id="salary_type" name="salary_type" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                <option value="hourly">Hourly</option>
                <option value="monthly">Monthly</option>
                <option value="yearly">Yearly</option>
                <option value="project">Project</option>
            </select>
        </div>

        <!-- Min Salary -->
        <div>
            <label for="min_salary" class="block text-sm font-medium text-gray-700">Minimum Salary</label>
            <input type="number" id="min_salary" name="min_salary" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <!-- Max Salary -->
        <div>
            <label for="max_salary" class="block text-sm font-medium text-gray-700">Maximum Salary</label>
            <input type="number" id="max_salary" name="max_salary" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <!-- Benefits -->
        <div>
            <label for="benefits" class="block text-sm font-medium text-gray-700">Benefits</label>
            <textarea id="benefits" name="benefits" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
        </div>

        <!-- Keywords -->
        <div>
            <label for="keywords" class="block text-sm font-medium text-gray-700">Keywords</label>
            <textarea id="keywords" name="keywords" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
        </div>

        <!-- Submit Button -->
        <a href="{{ route('employer.jobs.index') }}">
            <button  type="submit"  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Post Job
            </button>
        </a>
    </form>

</body>
</html>
