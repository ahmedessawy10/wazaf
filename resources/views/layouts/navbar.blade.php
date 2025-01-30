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
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">about us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">candidates</a>
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
                <div class="col-md-2  col-3">
                    <a href="">
                        <img src="logo" alt="" class="logo">
                    </a>
                </div>
                <div class="col-md-7  d-md-flex  d-none">

                    <form action="#" method="POST" class="d-md-flex d-none w-100">
                        <div class="search-box d-flex align-content-center ">
                            <select name="searchType" id="searchType" class="form-select">
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

                <div class="col-md-3 col-9 d-flex justify-content-end">



                    <div class="links">
                        @guest
                        <a href="#" class="btn login">
                            login
                        </a>
                        @endguest
                        <a href="#" class="btn post-job">
                            post job
                        </a>

                    </div>


                </div>
            </div>
        </div>

    </nav>

</header>