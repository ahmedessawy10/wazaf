<nav class="navbar navbar-expand-lg bg-body-white">
    <div class="container">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('home') ? 'active' : ''}}" aria-current="page"
                        href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  {{request()->routeIs('jobs.index') ? 'active' : ''}} " aria-current="page"
                        href="{{route('jobs.index')}}">Find Job</a>

                <li class="nav-item">
                    <a class="nav-link  {{request()->routeIs('candidates.index') ? 'active' : ''}} " aria-current="page"
                        href="{{route('candidates.index')}}">Candidates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('employers.index') ? 'active' : ''}}  " aria-current="page"
                        href="{{route('employers.index')}}">Companies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">About Us</a>
                </li>

            </ul>
        </div>

        <div class="btn-group" role="group">
            <button type="button" class="btn dropdown-toggle py-2 border-0" data-bs-toggle="dropdown"
                aria-expanded="false">
                language
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Arabic</a></li>
                <li><a class="dropdown-item" href="#">English</a></li>
            </ul>
        </div>

    </div>
</nav>


<header>
    <nav class="secondary-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-2  col-3 d-flex align-items-center justify-content-center">
                    <a href="{{route('home')}}">
                        <img src="{{asset('logo.png')}}" style="width:140px" class="logo">
                    </a>
                </div>
                <div class="col-md-7  d-lg-flex   d-none">

                    <form action="#" method="POST" class="d-flex w-100">
                        <div class="search-box d-flex align-content-center ">
                            <select name="searchType" id="searchType" class="form-select" style="width: 131px;
                             height: 52px;">
                                <option value="jobs">jobs</option>
                                <option value="candidates">candidates</option>
                                <option value="companies">companies</option>
                            </select>

                            <div class="d-flex justify-content-start align-content-center px-2 flex-grow-1">
                                <i class="fa fa-search search-icon"></i>
                                <input type="text" name="search" id="search" placeholder="Job Title, Keyword"
                                    class="focus-visible:outline-none ps-2 ">
                            </div>

                        </div>


                    </form>


                </div>

                <div class="col-lg-3 col-9 d-flex justify-content-end align-items-center">



                    <div class="links">
                        @guest
                        <a href="{{route('login')}}" class="btn login">
                            login
                        </a>

                        <a href="#" class="btn post-job">
                            post job
                        </a>
                        @endguest

                        @auth



                        <div class="btn-group btn-profile" role="group">
                            <button type="button border-0" class="btn " data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="profile rounded-circle" src="{{asset('avatar.png')}}"
                                    style="width:65px;height:65px" alt="">
                            </button>
                            <ul class="dropdown-menu">

                                @if(auth()->user()->role == 'candidate')
                                <li><a class="dropdown-item" href="{{route('candidate.dashboard')}}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{route('candidate.settings')}}">setting</a></li>
                                @elseif(auth()->user()->role == 'employer')
                                <li><a class="dropdown-item" href="#">Dashboard</a></li>
                                <li><a class="dropdown-item" href="#">setting</a></li>
                                @endif

                                <li>
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item" href="#">logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @endauth
                    </div>


                </div>
            </div>
        </div>

    </nav>

</header>