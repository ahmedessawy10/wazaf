@extends('layouts.users-app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Overview</h2>
        </div>
         <div class="mb-4">
              <h3>Hello, {{ Auth::user()->name }}</h3>
              <p class="text-muted">Here are your daily activities & career opportunities</p>
         </div>
        <div class="row mb-4">
               <x-counter icon="fas fa-briefcase" value="88" title="Open Job"/>
               <x-counter icon="fas fa-bookmark" value="5" title="Saved Candidates"/>
                <x-counter icon="fas fa-hourglass-half" value="1" title="Pending Jobs"/>
        </div>
         <div class="overview-pricing mb-4">
            <h4 class="pricing-title">Pricing Plan - Feature Remaining</h4>
            <div class="row">
                <div class="col-md-3 pricing-item">
                    <i class="fas fa-check-circle"></i>
                    <span class="pricing-value">20</span>
                    <span class="pricing-label">Active Jobs</span>
                </div>
                <div class="col-md-3 pricing-item">
                    <i class="fas fa-bolt"></i>
                   <span class="pricing-value">4</span>
                    <span class="pricing-label">Highlight Jobs</span>
                </div>
                <div class="col-md-3 pricing-item">
                    <i class="fas fa-arrow-circle-up"></i>
                     <span class="pricing-value">8</span>
                    <span class="pricing-label">Featured Jobs</span>
                </div>
                <div class="col-md-3 pricing-item">
                     <i class="fas fa-user-alt"></i>
                     <span class="pricing-value">20</span>
                   <span class="pricing-label">Profile View</span>
                </div>
            </div>
            <a href="#" class="d-block mt-3">Upgrade Plan</a>
        </div>
          <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4>Recent Jobs</h4>
                        <a href="#">View All →</a>
                    </div>
        <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>Job</th>
                            <th>Status</th>
                            <th>Applications</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="recentJobsContainer">
                        </tbody>
                   </table>
                </div>
    </div>
@endsection
@section('script')
  <script>
    fetch('{{route('employer.jobs.getRecentJobs')}}', {
           method: 'GET',
            headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
        })
        .then(response => {
            if (!response.ok) {
              return response.json().then(errorData => {
                    throw new Error('Request failed');
                });
            }
            return response.json()
        })
        .then(data => {
               console.log(data)
                const jobs = data.data;
                 const recentJobsContainer = document.getElementById('recentJobsContainer');
               jobs.forEach(job => {
                   recentJobsContainer.innerHTML +=`
                       <tr>
                            <td>
                                <div class="d-flex flex-column">
                                    <span class="fw-bold">${job.job_title}</span>
                                    <small class="text-muted">${job.job_type}  <span class="text-dark">${job.deadline}</span></small>
                                </div>
                            </td>
                            <td>
                                  ${job.status == 'open' ? '<span class="badge-active"></span> <span class="badge text-bg-success">Active</span>'
                                  : (job.status == 'pending' ? '<span class="badge-pending"></span> <span class="badge text-bg-warning">Pending</span>'
                                   : '<span class="badge-expired"></span> <span class="badge text-bg-danger">Job Expire</span>')
                                  }
                             </td>
                            <td>
                                 <i class="fas fa-user-check text-muted me-1"></i>  1 Applications
                            </td>
                           <td>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-primary btn-sm me-2">View Applications</button>
                                    <div class="dropdown">
                                      <button class="btn btn-light btn-sm border-0" type="button" id="jobOptionsDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                                          <i class="fas fa-ellipsis-v"></i>
                                       </button>
                                      <ul class="dropdown-menu" aria-labelledby="jobOptionsDropdown1">
                                        <li><a class="dropdown-item" href="#">View Details</a></li>
                                        <li><a class="dropdown-item" href="#">Make It Expire</a></li>
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Promote</a></li>
                                        <li><a class="dropdown-item" href="#">Clone</a></li>
                                      </ul>
                                  </div>
                                </div>
                           </td>
                        </tr>
                    `
               });
        })
         .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
</script>
@endsection