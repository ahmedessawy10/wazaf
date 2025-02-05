<div class="col-md-4 mb-3">
    <a href="#" class="open-positions-card">
         <div class="d-flex justify-content-between align-items-center">
             <div class="d-flex align-items-center gap-2">
                <img src="https://i.ibb.co/t2N4fS9/Rectangle-345.png" alt="Logo">
                <span>{{ $companyName }}</span>
            </div>
             <div>
              @if($featured) <span class="featured-badge">Featured</span> @endif
          </div>
     </div>
    <span class="card-location"><i class="fas fa-map-marker-alt text-muted me-2"></i>{{ $location }}</span>
     <p class="card-text fw-bold mt-1">{{ $jobTitle }}</p>
      <span class="card-type">{{ $jobType }}  •  {{ $salary }}</span>
  </a>
 </div>