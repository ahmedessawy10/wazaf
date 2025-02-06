<div class=" text-white sidebar " style="min-height:300px;position: relative;">
    <h2 class="mb-4"><i class="fas fa-tachometer-alt"></i> Dashboard</h2>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-white btn-hover {{request()->routeIs('candidate.dashboard')?'active':''}}"
                href="{{route('candidate.dashboard')}}" data-target="overview">
                <i class="fas fa-home"></i> Overview
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white btn-hover {{request()->routeIs('candidate.applyedJob')?'active':''}}"
                href="{{route('candidate.applyedJob')}}" data-target="applied-jobs">
                <i class="fas fa-briefcase"></i> Applied Jobs
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link text-white btn-hover" href="#" data-target="favorite-jobs">
                <i class="fas fa-heart"></i> Favourite Jobs
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white btn-hover" href="#" data-target="job-alert">
                <i class="fas fa-bell"></i> Job Alerts
            </a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link text-white btn-hover {{request()->routeIs('candidate.setting')?'active':''}}"
                href="{{route('candidate.setting')}}" data-target="settings">
                <i class="fas fa-cog"></i> Settings
            </a>
        </li>
        <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
                @csrf

                <button class="nav-link text-white btn-hover" data-target="logout">
                    <i class="fas fa-sign-out-alt"></i> Log Out
                </button>

            </form>

        </li>
    </ul>
</div>