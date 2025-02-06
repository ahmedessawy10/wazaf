@extends('layouts.users-app')

@section('content')
   <div class="container mt-4">
               <h2>Settings</h2>
              <ul class="nav nav-tabs mb-4">
                    <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="tab" href="#company-info">Company Info</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" data-bs-toggle="tab" href="#founding-info">Founding Info</a>
                    </li>
                     <li class="nav-item">
                       <a class="nav-link" data-bs-toggle="tab" href="#social-media-profile">Social Media Profile</a>
                    </li>
                     <li class="nav-item">
                       <a class="nav-link" data-bs-toggle="tab" href="#account-setting">Account Setting</a>
                    </li>
                </ul>

                  <div class="tab-content">
                       <!-- Company Info Tab -->
                      <div class="tab-pane fade show active" id="company-info">
                            <form id="companyInfoForm" method="POST"  enctype="multipart/form-data">
                                   @csrf
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label class="form-label">Upload Logo  <span class="text-danger">*</span></label>
                                            <div style="position: relative;">
                                            <input type="file" id="logo" name="logo" hidden onchange="loadLogo(event)">
                                                <img src="{{ $employer->logo ?? 'https://i.ibb.co/t2N4fS9/Rectangle-345.png'}}" id="logo-preview" alt="logo" class="img-fluid"  style="cursor: pointer" onclick="document.getElementById('logo').click()">
                                            <button type="button" style="position: absolute; top: 10px; right: 10px;background-color: #fff; border: none; cursor: pointer;">
                                                <i class="fas fa-times text-danger"></i>
                                                </button>
                                            </div>
                                            <small class="text-muted">Image Size: 86x88</small>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Banner Image  <span class="text-danger">*</span></label>
                                            <div style="position: relative;">
                                            <input type="file" id="banner" name="banner_image" hidden  onchange="loadBanner(event)">
                                                <img src="{{ $employer->banner_image ?? 'https://i.ibb.co/K000V0v/Rectangle-346.png' }}" id="banner-preview" alt="logo" class="img-fluid" style="cursor: pointer" onclick="document.getElementById('banner').click()">
                                                <button type="button" style="position: absolute; top: 10px; right: 10px;background-color: #fff; border: none; cursor: pointer;">
                                                <i class="fas fa-times text-danger"></i>
                                                    </button>
                                            </div>
                                            <small class="text-muted">Image Size: 1920x312</small>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Company Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="company_name" value="{{  $employer->company_name ?? '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">About Us</label>
                                         <textarea class="form-control" name="about_us" rows="5"> {{  $employer->about_us ?? '' }} </textarea>
                                    </div>
                                   <button type="button" class="btn btn-primary" onclick="updateCompanyInfo()">Save Changes</button>
                             </form>
                        </div>

                      <!-- Founding Info Tab -->
                      <div class="tab-pane fade" id="founding-info">
                           <form id="foundingInfoForm" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Organization Type <span class="text-danger">*</span></label>
                                    <select class="form-select" name="organization_type">
                                        @foreach($organizationTypes as $type)
                                        <option value="{{$type->id}}"  @if($employer->organization_type_id == $type->id) selected @endif>{{$type->name}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Industry Type</label>
                                       <select class="form-select" name="industry_type">
                                          @foreach($industries as $industry)
                                             <option value="{{$industry->id}}"  @if($employer->industry_id == $industry->id) selected @endif>{{$industry->name}}</option>
                                          @endforeach
                                        </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Team Size</label>
                                        <select class="form-select" name="team_size">
                                        <option @if($employer->team_size == 'only_one') selected @endif>only_one</option>
                                            <option  @if($employer->team_size == '10 Members') selected @endif>10 Members</option>
                                            <option  @if($employer->team_size == '10-20 Members') selected @endif>10-20 Members</option>
                                            <option  @if($employer->team_size == '20-50 Members') selected @endif>20-50 Members</option>
                                            <option  @if($employer->team_size == '50-100 Members') selected @endif>50-100 Members</option>
                                            <option @if($employer->team_size == '100-200 Members') selected @endif>100-200 Members</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                <label class="form-label">Year of Establishment</label>
                                    <input type="date" class="form-control" name="year_establish" value="{{  $employer->year_establish ?? '' }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                <label class="form-label">Website</label>
                                    <input type="url" class="form-control" name="website_url" placeholder="Website url..." value="{{  $employer->website_url ?? '' }}">
                                </div>
                            </div>
                                 <div class="mb-3">
                                    <label class="form-label">Company Vision</label>
                                       <textarea class="form-control" name="company_vision" rows="5"> {{ $employer->company_vision ?? '' }} </textarea>
                                    </div>
                            <button type="button" class="btn btn-primary" onclick="updateFoundingInfo()">Save Changes</button>
                        </form>
                      </div>

                      <!-- Social Media Profile Tab -->
                      <div class="tab-pane fade" id="social-media-profile">
                          <p>Content for Social Media Profile will go here</p>
                      </div>

                        <!-- Account Setting Tab -->
                      <div class="tab-pane fade" id="account-setting">
                           
                            <form  id="accountSettingForm" method="POST">
                                  @csrf
                                  <div class="mb-3">
                                      <h5>Company Phone & Email Address For Public View</h5>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                            <label class="form-label">Phone</label>
                                                <input type="tel" class="form-control" name="phone" value="{{  $employer->phone ?? '' }}">
                                             </div>
                                             <div class="col-md-6 mb-3">
                                                <label class="form-label">Email</label>
                                                 <input type="email" class="form-control" name="company_email" value="{{  $employer->company_email ?? '' }}">
                                            </div>
                                         </div>
                                         <button type="button" class="btn btn-primary"  onclick="updateContactInfo()">Save Changes</button>
                                 </div>

                                  <div class="mb-3">
                                      <h5>Change Account Username & Email</h5>
                                         <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Username</label>
                                                    <input type="text" class="form-control" name="username"  value="{{ Auth::user()->name }}">
                                                    <small class="form-text text-muted">Profile Link: https://jobpilot.templatecookie.com/employer/templatecookie</small>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control"  name="email" value="{{ Auth::user()->email }}">
                                                 </div>
                                        </div>
                                         <button type="button" class="btn btn-primary"  onclick="updateAccountDetails()">Save Changes</button>
                                   </div>

                                  <div class="mb-3">
                                        <h5>Change Password</h5>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                              <label class="form-label">New Password <span class="text-danger">*</span></label>
                                               <div class="input-group">
                                                    <input type="password" class="form-control"  id="newPassword" name="password">
                                                      <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('newPassword')">
                                                            <i class="fas fa-eye"></i>
                                                    </button>
                                                </div>
                                           </div>
                                             <div class="col-md-6 mb-3">
                                                <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                                     <div class="input-group">
                                                        <input type="password" class="form-control"  id="confirmPassword" name="confirm_password">
                                                           <button class="btn btn-outline-secondary" type="button"  onclick="togglePassword('confirmPassword')">
                                                                <i class="fas fa-eye"></i>
                                                            </button>
                                                     </div>
                                            </div>
                                      </div>
                                    <button type="button" class="btn btn-primary"  onclick="updatePassword()">Save Changes</button>
                                </div>

                                 <div class="mb-3">
                                     <h5>Close/Delete Account</h5>
                                        <p class="text-muted">If you delete your account, you'll lose access to matched jobs, followed employers, job alerts, shortlisted jobs, and other services</p>
                                      <button type="button" class="btn btn-danger">Close Account</button>
                                </div>
                            </form>
                      </div>

                  </div>
            </div>
@endsection

@section('script')
    <script>
        function loadLogo(event){
           document.getElementById('logo-preview').src = URL.createObjectURL(event.target.files[0])
        }
         function loadBanner(event){
           document.getElementById('banner-preview').src = URL.createObjectURL(event.target.files[0])
        }
          function updateCompanyInfo() {
            const form = document.getElementById('companyInfoForm');
            const formData = new FormData(form);

            fetch('{{route('employer.settings')}}', {
                    method: 'POST',
                     headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                         },
                  body: formData
                })
                .then(response => {
                if (!response.ok) {
                    return response.json().then(errorData => {
                         console.log(errorData)
                        throw new Error('Request failed');
                    });
                   }
                    return response.json();
                })
                .then(data => {
                     console.log(data);
                     alert("Updated Company Info Successfully");
                      window.location.reload();
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                     alert("Updated Company Info Failed Please check Your Data");
                });
        }
     function updateFoundingInfo() {
            const form = document.getElementById('foundingInfoForm');
            const formData = new FormData(form);

            fetch('{{route('employer.settings')}}', {
                    method: 'POST',
                     headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                         },
                  body: formData
                })
                .then(response => {
                if (!response.ok) {
                    return response.json().then(errorData => {
                          console.log(errorData)
                        throw new Error('Request failed');
                    });
                   }
                    return response.json();
                })
                .then(data => {
                     console.log(data);
                     alert("Updated Founding Info Successfully")
                       window.location.reload();
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                      alert("Updated Founding Info Failed Please check Your Data");
                });
        }
     function updateContactInfo() {
            const form = document.getElementById('accountSettingForm');
             const formData = new FormData(form);
           fetch('{{route('employer.settings')}}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                  return response.json().then(errorData => {
                      console.log(errorData)
                        throw new Error('Request failed');
                  });
                }
                  return response.json();
            })
            .then(data => {
                console.log(data);
                 alert("Updated Contact Info Successfully");
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                  alert("Updated Contact Info Failed Please check Your Data");
           });
      }
         function updateAccountDetails() {
            const form = document.getElementById('accountSettingForm');
            const formData = new FormData(form);
            fetch('{{route('employer.settings')}}', {
                method: 'POST',
                 headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                     },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                  return response.json().then(errorData => {
                         console.log(errorData)
                        throw new Error('Request failed');
                    });
                   }
                    return response.json();
                })
            .then(data => {
                 console.log(data);
                alert("Updated Account Details Successfully");
                   window.location.reload();
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                alert("Updated Account Details Failed Please check Your Data");
            });
        }
        function updatePassword() {
            const form = document.getElementById('accountSettingForm');
            const formData = new FormData(form);
            fetch('{{route('employer.settings')}}', {
                method: 'POST',
                 headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                     },
                body: formData
            })
            .then(response => {
              if (!response.ok) {
                return response.json().then(errorData => {
                  console.log(errorData)
                        throw new Error('Request failed');
                    });
                   }
                return response.json();
            })
            .then(data => {
                console.log(data);
                 alert("Updated Password Successfully");
                 window.location.reload();
            })
            .catch(error => {
              console.error('There was a problem with the fetch operation:', error);
              alert("Updated Password Failed Please check Your Data");
            });
        }
        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            const eyeIcon = passwordInput.nextElementSibling.querySelector('i');
            if(type === 'password'){
                 eyeIcon.classList.remove('fa-eye-slash');
                 eyeIcon.classList.add('fa-eye');
            }
              else{
               eyeIcon.classList.remove('fa-eye');
                 eyeIcon.classList.add('fa-eye-slash');
            }
            }
    </script>
@endsection