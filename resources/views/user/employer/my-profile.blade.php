@extends('layouts.users-app')

@section('content')
    <div class="container mt-4">
        <div class="banner-image">
           <img src="https://i.ibb.co/K000V0v/Rectangle-346.png" alt="Banner">
       </div>
        <div class="profile-card">
            <img src="https://i.ibb.co/t2N4fS9/Rectangle-345.png" alt="Logo" class="rounded">
            <div>
                 <h4 class="mb-1">{{$employer->company_name}}</h4>
                <span class="text-muted">Logistics/Transportation</span>
             </div>
            <button type="button" class="btn btn-primary open-position">Open Position  <i class="fas fa-arrow-right"></i></button>
        </div>

        <div class="company-descritption mb-4">
             <h5 class="mb-3">Company Description</h5>
            <p class="text-muted mb-3">{{$employer->about_us}}</p>
              <div class="row">
                  <div class="col-md-6">
                      <i class="fas fa-sitemap text-muted me-2"></i><span class="text-muted">Organization Type</span> <br>
                        <span>{{$organizationType->name}}</span>
                    </div>
                     <div class="col-md-6">
                         <i class="fas fa-users text-muted me-2"></i><span class="text-muted">Company Size</span> <br>
                         <span>{{$employer->team_size}}</span>
                     </div>
              </div>
        </div>
           <div class="mb-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="mb-3">Share This Profile:</h5>
                      <div class="mb-2 share-links">
                          <a href="#" class="me-2"><i class="fab fa-facebook text-primary"></i>Facebook</a>
                           <a href="#"  class="me-2"> <i class="fab fa-twitter text-primary"></i>Twitter</a>
                            <a href="#" class="me-2"><i class="fab fa-pinterest text-danger"></i>Pinterest</a>
                       </div>
                    </div>
           </div>
           <div class="contact-information mb-4">
                <h5 class="mb-3">Contact Information</h5>
                 <i class="fas fa-map-marker-alt text-muted me-2"></i> <span class="text-muted">LOCATION</span>
                 <p>{{ $employer->country ?? 'Not Available' }}</p>
              <a href="#">Show Contact Information</a>
           </div>
             <div class="map-location mb-4">
                <h5 class="mb-3">Map Location</h5>
                 <div id="map"></div>
             </div>
             <h4 class="mb-3">Open Positions (12)</h4>
           <div class="row mb-4" id="jobPositionsContainer">
            </div>
      
    </div>
@endsection
@section('script')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJx71kI0v3nWv3t16s0dZ9lWj+0zI="
     crossorigin=""></script>
    <script>
        var map = L.map('map').setView([ -12.045623, -75.204027], 6);
         L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
         L.marker([-12.045623, -75.204027]).addTo(map);
        fetch('{{route('employer.jobs.index')}}', {
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
                 const jobPositionsContainer = document.getElementById('jobPositionsContainer');
               jobs.forEach(job => {
                    jobPositionsContainer.innerHTML +=`
                    <div class="col-md-4 mb-3">
                        <a href="#" class="open-positions-card">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center gap-2">
                                   <img src="https://i.ibb.co/t2N4fS9/Rectangle-345.png" alt="Logo">
                                   <span>Templatecookie</span>
                                 </div>
                             
                               </div>
                                 <span class="card-location"><i class="fas fa-map-marker-alt text-muted me-2"></i>${job.job_location}</span>
                               <p class="card-text fw-bold mt-1">${job.job_title}</p>
                                <span class="card-type">${job.job_type}  • ${job.min_salary} - ${job.max_salary} USD</span>
                            </a>
                    </div>
                    `
               });
        })
         .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });

    </script>
@endsection