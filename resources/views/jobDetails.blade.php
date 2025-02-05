@extends('layouts.users-app')
@section("css")
<style>
    .comp-logo {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;

        margin-right: 20px;

    }

    .salary-range::after {
        content: "";
        position: absolute;
        left: 0;
        height: 80%;
        width: 2px;
        color: var(--primary-color);
    }

    .primary-color {
        color: var(--primary-color);
    }

    .border-prim {
        border: 1px solid var(--primary-color);
        border-radius: 12px;
        padding: 8px;
        margin: 5px;
    }
</style>


@endsection
@section("centent")

<section class="py-4">
    <div class="container">
        <div class="d-flex flex-wrap  justify-content-center align-items-center">
            <div class="d-flex flex-grow-1">
                <img src="{{$job->employer->logo ?asset( $job->employer->logo):asset('defualtCompanyLogo.png') }}"
                    alt="" class="comp-logo">
                <div class="details">
                    <h2>{{$job->job_title}}</h2>
                    <p>
                        {{$job->employer->company_name??"company_name"}}
                    </p>
                </div>
            </div>
            <div class="right">
                @auth

                @if(Auth::user()->candidate->appliedJobs()->where('job_applications.job_position_id',
                $job->id)->exists())
                <p>you have applied</p>
                @else
                <a href="{{ route('candidate.applyForJob', $job->id) }}" class="btn"
                    style="background-color:var(--primary-color); color:#fff">
                    Apply
                </a>
                @endif
                @else
                <button onclick="notAuth()" class="btn" style="background-color:var(--primary-color); color:#fff">
                    Apply
                </button>
                @endauth

            </div>
        </div>


        <div class="row " style="margin-top: 80px !important;">
            <div class="col-lg-6">
                <p>
                    {{$job->description}}
                </p>
            </div>
            <div class="col-lg-6">
                <div class="salary row border-prim">
                    <div
                        class="col-sm-6 salary-range d-flex align-items-center justify-content-center flex-column py-3">
                        <h4>salary</h4>
                        <span class="">{{$job->min_salary}} -
                            {{$job->max_salary}}
                        </span>
                    </div>
                    <div class="col-sm-6 d-flex align-items-center justify-content-center flex-column">
                        <i class="fa fa-map-location"></i>
                        <h3>Location</h3>
                        <p>{{$job->job_location}}</p>
                    </div>

                </div>

                <div class="border-prim  mt-4 px-3">
                    <h3 class="mb-3">Job Overview</h3>
                    <div class="row">
                        <div class="col-4 d-flex flex-column align-items-center justify-content-center">
                            <i class="fa  fa-calendar fs-2" style="color:var(--primary-color)"></i>
                            <span style="color:var(--gray-color)"> job Posted:</span>
                            <p class="fw-bold">
                                {{ $job->created_at ? $job->created_at->diffForHumans() : 'Date not available' }}</p>
                        </div>
                        <div class="col-4 d-flex flex-column align-items-center justify-content-center">
                            <i class="fa  fa-clock fs-2" style="color:var(--primary-color)"></i>
                            <span style="color:var(--gray-color)"> Job Expire:</span>
                            <p class="fw-bold">
                                {{ $job->deadline ?\Carbon\Carbon::now()->diffForHumans(\Carbon\Carbon::parse($job->deadline)):"no deadline"
                               }}</p>
                        </div>
                        <div class="col-4 d-flex flex-column align-items-center justify-content-center">
                            <i class="fa-solid fa-briefcase fs-2" style="color:var(--primary-color)"></i>
                            <span style="color:var(--gray-color)"> Job Type:</span>
                            <p class="fw-bold">
                                {{ $job->job_type
                               }}</p>
                        </div>
                        <div class="col-4 d-flex flex-column align-items-center justify-content-center">
                            <i class="fa-brands fa-google-scholar fs-2" style="color:var(--primary-color)"></i>
                            <span style="color:var(--gray-color)"> Experiance:</span>
                            <p class="fw-bold">
                                {{ $job->experiencelevel->level
                               }}</p>
                        </div>
                        <div class="col-4 d-flex flex-column align-items-center justify-content-center">
                            <i class="fa-regular fa-building fs-2" style="color:var(--primary-color)"></i>
                            <span style="color:var(--gray-color)"> Education:</span>
                            <p class="fw-bold">
                                {{ $job->educationlevel->level
                               }}</p>
                        </div>
                    </div>
                </div>


            </div>

        </div>


    </div>
</section>




@endsection

@section("script")
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function notAuth(){
    Swal.fire({
  title: "you should auth  to apply",
  icon: "error",
  draggable: true
});
}
  
</script>

@endsection