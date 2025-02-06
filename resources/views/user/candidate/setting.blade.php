@extends('layouts.users-app')
@section("css")
<style>
    /* Custom CSS */
    .sidebar {
        min-height: 100vh;
        background: linear-gradient(180deg, #1e3c72, #2a5298);
        position: sticky;
        top: 0;
    }

    .sidebar h2 {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .sidebar .nav-link {
        font-size: 1rem;
        padding: 12px 15px;
        border-radius: 8px;
        transition: all 0.3s ease;
        margin-bottom: 5px;
        display: flex;
        align-items: center;
    }

    .sidebar .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.15);
        transform: translateX(8px);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .sidebar .nav-link i {
        margin-right: 12px;
        width: 20px;
        text-align: center;
    }

    .card {
        border: none;
        border-radius: 12px;
        padding: 1.5rem !important;
        height: 100%;
    }

    .card-hover {
        transition: all 0.3s ease;
        background: linear-gradient(145deg, #e6f3ff, #f0f7ff);
        border: 1px solid rgba(30, 60, 114, 0.1);
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        background: linear-gradient(145deg, #e1f0ff, #eaf5ff);
    }

    .card h3 {
        font-size: 2rem;
        font-weight: 600;
        color: #1e3c72;
        margin-bottom: 0.5rem;
    }

    .card p {
        color: #555;
        margin-bottom: 0;
        font-weight: 500;
    }

    @media (max-width: 768px) {
        .col-md-3 {
            margin-bottom: 1rem;
        }

        .card {
            padding: 1rem !important;
        }

        .card h3 {
            font-size: 1.5rem;
        }

        .sidebar {
            position: fixed;
            z-index: 1000;
            width: 100%;
            max-height: 100vh;
            overflow-y: auto;
        }

        .main-content {
            margin-top: 60px;
        }
    }

    .table {
        background: white;
        border-radius: 10px;
        overflow: hidden;
    }

    .table thead th {
        background-color: #f8f9fa;
        border-bottom: 2px solid #dee2e6;
        color: #1e3c72;
        font-weight: 600;
    }

    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
        transition: background-color 0.2s ease;
    }

    .btn-hover {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-hover:hover {
        transform: scale(1.05);
        background-color: rgba(255, 255, 255, 0.2);
    }

    .main-content {
        padding: 2rem;
        background-color: #f8f9fa;
        min-height: 100vh;
    }

    h1,
    h2 {
        color: #1e3c72;
        font-weight: 600;
    }

    .lead {
        color: #555;
    }

    /* .content-section {
        display: none;
    } */

    .content-section.active {
        display: block;
    }

    .form-control {
        margin-bottom: 1rem;
    }

    .btn-primary {
        background-color: #1e3c72;
        border: none;
    }

    .btn-primary:hover {
        background-color: #2a5298;
    }

    .nav-tabs .nav-link {
        border: none;
        color: #1e3c72;
        font-weight: 500;
    }

    .nav-tabs .nav-link.active {
        border-bottom: 2px solid #1e3c72;
        color: #1e3c72;
        font-weight: 600;
    }

    .nav-tabs .nav-link:hover {
        color: #2a5298;
    }

    .primary {
        background-color: var(--primary-color) !important;
        color: #fff !important;

    }
</style>
@endsection
@section("centent")

<div class="row">
    <div class="col-3">
        <x-candidate-slider></x-candidate-slider>

    </div>
    <div class="col-8">
        <div id="settings" class="content-section mt-5 mb-4">
            <h2 class="mb-4">Settings</h2>
            <div class="card card-hover p-4">

                <ul class="nav nav-tabs mb-4">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#basic-info">Basic Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile-info">Profile Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#account-settings">Account Settings</a>
                    </li>
                </ul>

                <div class="tab-content">

                    <div class="tab-pane fade show active" id="basic-info">
                        <form action="{{ route('candidate.settings.update-profile') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="mb-3">
                                <label for="profilePicture" class="form-label">Profile Picture</label>
                                <input type="file" name="profile_photo" class="form-control @error('profile_photo') is-invalid @enderror" id="profilePicture"
                                    accept="image/*">
                                @error('profile_photo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="fullName"
                                    value="{{ old('name', $candidate->user->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jobTitle" class="form-label">Job Title</label>
                                <input type="text" name="job_title" class="form-control @error('job_title') is-invalid @enderror" id="jobTitle"
                                    value="{{ old('job_title', $candidate->job_title) }}">
                                @error('job_title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                    value="{{ old('phone', $candidate->phone) }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    value="{{ old('email', $candidate->user->email) }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="experienceLevel" class="form-label">Experience Level</label>
                                <select name="experienceLevel" class="form-select @error('experienceLevel') is-invalid @enderror" id="experienceLevel">
                                    @foreach($experienceLevels as $experienceLevel)
                                    <option value="{{ $experienceLevel->id }}"
                                        {{ old('experienceLevel', $candidate->exp_id) ==  $experienceLevel->id ? 'selected' : '' }}>
                                        {{ $experienceLevel->level }}

                                    </option>
                                    @endforeach
                                </select>
                                @error('experienceLevel')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="educationLevel" class="form-label">Education Level</label>
                                <select name="educationLevel" class="form-select @error('educationLevel') is-invalid @enderror" id="educationLevel">
                                    @foreach($educationLevels as $educationLevel)
                                    <option value="{{ $educationLevel->id }}"
                                        {{ old('educationLevel', $candidate->edu_id) == $educationLevel->id ? 'selected' : '' }}>
                                        {{ $educationLevel->level }}
                                        <!-- تأكد من استخدام الحقل الصحيح -->
                                    </option>
                                    @endforeach
                                </select>
                                @error('educationLevel')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="date_of_birth" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" id="dateOfBirth" name="date_of_birth"
                                    value="{{ old('date_of_birth', \Carbon\Carbon::parse($candidate->date_of_birth ?? now())->format('Y-m-d')) }}">
                                @error('date_of_birth')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="personalWebsite" class="form-label">Personal Website</label>
                                <input type="url" class="form-control @error('personal_website') is-invalid @enderror" id="personalWebsite" name="personal_website"
                                    value="{{ old('personal_website', $candidate->personal_website) }}">
                                @error('personal_website')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="resume" class="form-label">resume</label>
                                <input type="file" class="form-control @error('resume') is-invalid @enderror" id="resume" name="resume">
                                @error('resume')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="summary" class="form-label">Professional Summary</label>
                                <textarea name="summary" class="form-control @error('summary') is-invalid @enderror" id="summary"
                                    rows="4">{{ old('summary', $candidate->summary) }}</textarea>
                                @error('summary')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn primary m-auto py-2 px-3 fs-5 d-inline-block ">Save
                                Changes</button>
                        </form>
                    </div>


                    <div class="tab-pane fade" id="profile-info">
                        <div class="row mb-4">
                            <div class="col-12">
                                <h4>Experience</h4>
                                <button type="button" class="btn primary mb-3" data-bs-toggle="modal"
                                    data-bs-target="#addExperienceModal">
                                    Add Experience
                                </button>

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Position</th>
                                                <th>Duration</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($candidate->experiences as $experience)
                                            <tr>
                                                <td>{{ $experience->company_name }}</td>
                                                <td>{{ $experience->position }}</td>
                                                <td>
                                                    {{ $experience->start_date->format('M Y') }} -
                                                    {{ $experience->is_current ? 'Present' : $experience->end_date->format('M Y') }}
                                                </td>
                                                <td>
                                                    <form
                                                        action="{{ route('candidate.experience.delete', $experience) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h4>Education</h4>
                                <button type="button" class="btn primary mb-3" data-bs-toggle="modal"
                                    data-bs-target="#addEducationModal">
                                    Add Education
                                </button>

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Institution</th>
                                                <th>Degree</th>
                                                <th>Field of Study</th>
                                                <th>Duration</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($candidate->educations as $education)
                                            <tr>
                                                <td>{{ $education->institution }}</td>
                                                <td>{{ $education->degree }}</td>
                                                <td>{{ $education->field_of_study }}</td>
                                                <td>
                                                    {{ $education->start_date->format('M Y') }} -
                                                    {{ $education->is_current ? 'Present' : $education->end_date->format('M Y') }}
                                                </td>
                                                <td>
                                                    <form action="{{ route('candidate.education.delete', $education) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="account-settings">
                        <form action="{{ route('candidate.settings.update-account') }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="mb-3">
                                <label for="account_email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="account_email" name="email" value="{{ old('email', $candidate->user->email) }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password" placeholder="Enter current password">
                                @error('current_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="new_password" class="form-label">New Password</label>
                                <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" name="new_password" placeholder="New Password">
                                @error('new_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="new_password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" id="new_password_confirmation" name="new_password_confirmation" placeholder="Confirm New Password">
                                @error('new_password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteAccountModal">
                                    Delete Account
                                </button>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#deactivateAccountModal">
                                    Deactivate Account
                                </button>
                            </div>
                            <button type="submit" class="btn primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Experience Modal -->
<div class="modal fade" id="addExperienceModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Experience</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('candidate.experience.add') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Company Name</label>
                        <input type="text" name="company_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Position</label>
                        <input type="text" name="position" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Start Date</label>
                        <input type="date" name="start_date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_current" id="isCurrentJob">
                            <label class="form-check-label" for="isCurrentJob">Current Position</label>
                        </div>
                    </div>
                    <div class="mb-3" id="endDateField">
                        <label class="form-label">End Date</label>
                        <input type="date" name="end_date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn primary">Add Experience</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Education Modal -->
<div class="modal fade" id="addEducationModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Education</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('candidate.education.add') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Institution</label>
                        <input type="text" name="institution" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Degree</label>
                        <input type="text" name="degree" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Field of Study</label>
                        <input type="text" name="field_of_study" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Start Date</label>
                        <input type="date" name="start_date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_current" id="isCurrentEducation">
                            <label class="form-check-label" for="isCurrentEducation">Currently Studying</label>
                        </div>
                    </div>
                    <div class="mb-3" id="educationEndDateField">
                        <label class="form-label">End Date</label>
                        <input type="date" name="end_date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn primary">Add Education</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section("script")
<script>
    // Toggle end date fields based on current position/education checkboxes
    document.getElementById('isCurrentJob').addEventListener('change', function() {
        document.getElementById('endDateField').style.display = this.checked ? 'none' : 'block';
    });

    document.getElementById('isCurrentEducation').addEventListener('change', function() {
        document.getElementById('educationEndDateField').style.display = this.checked ? 'none' : 'block';
    });
</script>
@endsection