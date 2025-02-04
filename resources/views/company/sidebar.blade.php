    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <div class="col-lg-3"> 
        <div class="card border-0 shadow mb-4 p-3 sidebar">
            <div class="s-body text-center mt-3">
                @if (Auth::user()->logo != '')
                    <img src="{{ asset('profile_img/thumb/'.Auth::user()->logo) }}" alt="avatar"  class="rounded-circle img-fluid" style="width: 150px;">
                @else
                    <img src="{{ asset('assets/images/avatar7.jpeg) }}" alt="avatar"  class="rounded-circle img-fluid" style="width: 150px;">
                @endif
                <h5 class="mt-3 pb-0">{{ Auth::user()->name }}</h5>
                <p class="text-muted mb-1 fs-6">{{ Auth::user()->designation }}</p>
                <div class="d-flex justify-content-center mb-2">
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-primary">Change Profile Picture</button>
                </div>
            </div>
        </div>
        <div class="card account-nav border-0 shadow mb-4 mb-lg-0 sidebar">
            <div class="card-body p-0">
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a class="nav-link {{ Request::is('company/companyProfile') ? 'active' : '' }}" href="{{ route('company.companyProfile') }}">
                            <i class="fas fa-user"></i> company Settings
                        </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a class="nav-link {{ Request::is('company/create-job') ? 'active' : '' }}" href="{{ route('company.createJob') }}">
                            <i class="fas fa-plus-square"></i> Post a Job
                        </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a class="nav-link {{ Request::is('company/my-jobs') ? 'active' : '' }}" href="{{ route('company.myJobs') }}">
                             <i class="fas fa-briefcase"></i> My Jobs
                        </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a class="nav-link {{ Request::is('company/my-jobs-applications') ? 'active' : '' }}" href="{{ route('company.myJobApplications') }}">
                            <i class="fas fa-file-alt"></i> Jobs Applied
                        </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a class="nav-link {{ Request::is('company/saved-jobs') ? 'active' : '' }}" href="{{ route('company.savedJobs') }}">
                            <i class="fas fa-heart"></i> Saved Jobs
                        </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a class="nav-link" href="{{ route('company.logout') }}">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>