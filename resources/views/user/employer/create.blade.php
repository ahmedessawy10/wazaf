<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <title>Create Job Post</title>
</head>
<body class="bg-light py-5">

    <div class="container">
        <h2 class="mb-4 text-center">Create a New Job Post</h2>
        
        <form id="postJobForm" method="POST" action="{{ route('employer.store') }}" class="row g-3">
            @csrf

            <!-- Job Title -->
            <div class="col-md-6">
                <label for="job_title" class="form-label">Job Title <span class="text-danger">*</span></label>
                <input type="text" id="job_title" name="job_title" required class="form-control">
            </div>

            <!-- Description -->
            <div class="col-12">
                <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                <textarea id="description" name="description" rows="4" required class="form-control"></textarea>
            </div>

            <!-- Category -->
            <div class="col-md-6">
                <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                <select id="category_id" name="category_id" required class="form-select">
                    <option value="">Select Category</option>
                    <option value="1">Category 1</option>
                    <option value="2">Category 2</option>
                </select>
            </div>

            <!-- Experience Level -->
            <div class="col-md-6">
                <label for="experience_id" class="form-label">Experience Level <span class="text-danger">*</span></label>
                <select id="experience_id" name="experience_id" required class="form-select">
                    <option value="1">Entry Level</option>
                    <option value="2">Mid Level</option>
                    <option value="3">Senior Level</option>
                </select>
            </div>

            <!-- Education Level -->
            <div class="col-md-6">
                <label for="education_id" class="form-label">Education Level <span class="text-danger">*</span></label>
                <select id="education_id" name="education_id" required class="form-select">
                    <option value="1">High School</option>
                    <option value="2">Bachelor's Degree</option>
                    <option value="3">Master's Degree</option>
                </select>
            </div>

            <!-- Deadline -->
            <div class="col-md-6">
                <label for="deadline" class="form-label">Deadline <span class="text-danger">*</span></label>
                <input type="date" id="deadline" name="deadline" required class="form-control">
            </div>

            <!-- Total Positions -->
            <div class="col-md-6">
                <label for="total_positions" class="form-label">Total Positions <span class="text-danger">*</span></label>
                <input type="number" id="total_positions" name="total_positions" required class="form-control">
            </div>

            <!-- Job Type -->
            <div class="col-md-6">
                <label for="job_type" class="form-label">Job Type <span class="text-danger">*</span></label>
                <select id="job_type" name="job_type" required class="form-select">
                    <option value="full_time">Full Time</option>
                    <option value="part_time">Part Time</option>
                    <option value="freelance">Freelance</option>
                    <option value="internship">Internship</option>
                </select>
            </div>

            <!-- Job Location -->
            <div class="col-md-6">
                <label for="job_location" class="form-label">Job Location</label>
                <input type="text" id="job_location" name="job_location" class="form-control">
            </div>

            <!-- Salary Type -->
            <div class="col-md-6">
                <label for="salary_type" class="form-label">Salary Type <span class="text-danger">*</span></label>
                <select id="salary_type" name="salary_type" required class="form-select">
                    <option value="hourly">Hourly</option>
                    <option value="monthly">Monthly</option>
                    <option value="yearly">Yearly</option>
                    <option value="project">Project</option>
                </select>
            </div>

            <!-- Salary Range -->
            <div class="col-md-3">
                <label for="min_salary" class="form-label">Min Salary</label>
                <input type="number" id="min_salary" name="min_salary" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="max_salary" class="form-label">Max Salary</label>
                <input type="number" id="max_salary" name="max_salary" class="form-control">
            </div>

            <!-- Benefits -->
            <div class="col-12">
                <label for="benefits" class="form-label">Benefits</label>
                <textarea id="benefits" name="benefits" rows="3" class="form-control"></textarea>
            </div>

            <!-- Keywords -->
            <div class="col-12">
                <label for="keywords" class="form-label">Keywords</label>
                <textarea id="keywords" name="keywords" rows="3" class="form-control"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="col-12 d-flex justify-content-between">
                <!-- <a href="{{ route('employer.index') }}" class="btn btn-outline-secondary">Cancel</a> -->
                <button type="submit" class="btn btn-primary">Post Job</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>