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

    .content-section {
        display: none;
    }

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
</style>
@endsection
@section("centent")
<x-candidate-slider></x-candidate-slider>

<div id="settings" class="content-section">
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
                <form action="{{ route('candidate.settings.basic-info') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="profilePicture" class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" id="profilePicture" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" value="mohamed emad">
                    </div>
                    <div class="mb-3">
                        <label for="experienceLevel" class="form-label">Experience Level</label>
                        <input type="text" class="form-control" id="experienceLevel" value="10+ Years">
                    </div>
                    <div class="mb-3">
                        <label for="jobTitle" class="form-label">Job Title</label>
                        <input type="text" class="form-control" id="jobTitle" value="Software Engineer">
                    </div>
                    <div class="mb-3">
                        <label for="dateOfBirth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dateOfBirth" value="1990-01-01">
                    </div>
                    <div class="mb-3">
                        <label for="personalWebsite" class="form-label">Personal Website</label>
                        <input type="url" class="form-control" id="personalWebsite" value="https://mohamedemad.com">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>


            <div class="tab-pane fade" id="profile-info">
                <form>
                    <div class="mb-3">
                        <label for="maritalStatus" class="form-label">Marital Status</label>
                        <select class="form-control" id="maritalStatus">
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-control" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jobSpecialization" class="form-label">Job Specialization</label>
                        <input type="text" class="form-control" id="jobSpecialization" value="Software Development">
                    </div>
                    <div class="mb-3">
                        <label for="skills" class="form-label">Skills</label>
                        <textarea class="form-control" id="skills" rows="3">JavaScript, React, Node.js</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="languages" class="form-label">Languages</label>
                        <textarea class="form-control" id="languages" rows="3">English, Arabic</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="availability" class="form-label">Availability for Work</label>
                        <select class="form-control" id="availability">
                            <option value="yes">avalable now</option>
                            <option value="no">Not available</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>

            <div class="tab-pane fade" id="account-settings">
                <form>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" value="+1234567890">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" value="mohamedemad@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="whatsappNumber" class="form-label">WhatsApp Number</label>
                        <input type="tel" class="form-control" id="whatsappNumber" value="+1234567890">
                    </div>
                    <div class="mb-3">
                        <label for="changePassword" class="form-label">Change Password</label>
                        <input type="password" class="form-control" id="changePassword" placeholder="New Password">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword"
                            placeholder="Confirm New Password">
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
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section("script")

@endsection