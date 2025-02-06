<div class="candidate-item">
       <div class="candidate-info">
          <img src="{{ $image }}" alt="Candidate Image" class="rounded">
             <div>
                 <h6 class="mb-1 fw-bold">{{ $name }}</h6>
               <small class="text-muted">{{ $job }}</small>
            </div>
       </div>
       <div class="d-flex align-items-center">
         <button class="btn btn-primary btn-sm me-2">View Profile <i class="fas fa-arrow-right"></i></button>
          <div class="dropdown">
              <button class="btn btn-light btn-sm border-0" type="button" id="candidateDropdown{{ $id }}" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-ellipsis-v"></i>
               </button>
               <ul class="dropdown-menu" aria-labelledby="candidateDropdown{{ $id }}">
                  <li><a class="dropdown-item" href="#">Option 1</a></li>
                  <li><a class="dropdown-item" href="#">Option 2</a></li>
                  <li><a class="dropdown-item" href="#">Option 3</a></li>
               </ul>
           </div>
         </div>
  </div>