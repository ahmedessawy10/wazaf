<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="    Jobpilot is job portal laravel script designed to create, manage and publish jobs posts. Companies can create their profile and publish jobs posts. Candidate can apply job posts.
">
    <meta property="og:image" content="https://jobpilot.templatecookie.com/frontend/assets/images/jobpilot.png
">

    <title> Login
        - Jobpilot</title>
    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            z-index: 1;
            /* Sit on top */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            -webkit-animation-name: fadeIn;
            /* Fade in the background */
            -webkit-animation-duration: 0.4s;
            animation-name: fadeIn;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }
    </style>


    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/jquery-3.6.0.min.js"></script>
    <link rel="icon" type="image/png" href="https://jobpilot.templatecookie.com/frontend/assets/images/logo/fav.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="preload"
        as="style">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preload" as="style" href="https://jobpilot.templatecookie.com/build/assets/app.2a1af9ee.css" />
    <link rel="preload" as="style" href="https://jobpilot.templatecookie.com/build/assets/app.76229581.css" />
    <link rel="stylesheet" href="https://jobpilot.templatecookie.com/build/assets/app.2a1af9ee.css" />
    <link rel="stylesheet" href="https://jobpilot.templatecookie.com/build/assets/app.76229581.css" />


    <!-- PWA Meta Theme color and link Start  -->
    <!-- PWA Meta Theme color and link End -->

    <style>
        :root {
            --primary-500: #0A65CC !important;
            --primary-600: #0851a4 !important;
            --primary-200: #b6d1f0 !important;
            --primary-100: #cee1f5 !important;
            --primary-50: #eef5fc !important;
            --gray-20: #fbfcfe !important;
        }
    </style>
</head>

<body class="" dir="ltr">
    <header class="site-header rt-fixed-top auth-header r-z">
        <div class="main-header">
            <div class="navbar">
                <div class="container container-full-xxl">
                    <a href="/" class="brand-logo"><img src="" alt="logo"></a>
                </div><!-- /.container -->
            </div><!-- /.navbar -->
        </div><!-- /.main-header -->
    </header>
    <div class="row mt-0 mt-lg-5">
        <div class="full-height col-12 order-1 order-lg-0">
            <div class="container">
                <div class="row full-height align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-12">
                        <div class="auth-box2">
                            <form action="" method="POST" class="rt-form" id="login_form">
                                @csrf
                                <h4 class="rt-mb-20">Log In</h4>
                                <span class="d-block body-font-3 text-gray-600 rt-mb-32">
                                    Don&#039;t have an account?
                                    <span>
                                        <a href="{{route('register')}}">Create Account
                                        </a>
                                    </span>
                                </span>
                                <div class="fromGroup rt-mb-15">
                                    <input type="email" name="email" id="email" class="form-control " value=""
                                        placeholder="Email Address">
                                </div>
                                <div class="rt-mb-15">
                                    <div class="d-flex fromGroup">
                                        <input name="password" id="password" value="" class="form-control "
                                            type="password" placeholder="Password">
                                        <div onclick="passToText('password','eyeIcon')" id="eyeIcon" class="has-badge">
                                            <i class="ph-eye "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap rt-mb-30">
                                    <div class="flex-grow-1">
                                        <div class="form-check from-chekbox-custom">
                                            <input name="remember" id="remember" class="form-check-input"
                                                type="checkbox" value="1">
                                            <label class="form-check-label pointer text-gray-700 f-size-14"
                                                for="remember">
                                                Keep me logged in
                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex-grow-0">
                                        <span class="body-font-4">
                                            <a href="reset" class="text-primary-500">
                                                Forget Password
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <button id="submitButton" type="submit" class="btn btn-primary d-block rt-mb-15">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 12H19" stroke="white" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 5L19 12L12 19" stroke="white" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        <span class="button-text">
                                            Log In
                                        </span>
                                    </span>
                                </button>
                            </form>
                            <div>
                                <div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-3 tw-gap-6">
                                </div>

                                <div class="tw-my-5 tw-bg-[#F1F2F4] tw-p-6 tw-rounded-md">
                                    <h5 class="tw-text-center tw-text-base tw-font-medium tw-mb-4">
                                        Login Credentials</h5>
                                    <div class="tw-flex tw-flex-col sm:tw-flex-row tw-gap-4 tw-justify-center">
                                        <button onclick="loginCredentials('candidate')" type="button"
                                            class="btn btn-outline-primary d-block tw-border tw-border-[#0A65CC]">
                                            <span class="button-content-wrapper">
                                                <span class="button-text">
                                                    Candidate Login
                                                </span>
                                            </span>
                                        </button>
                                        <button onclick="loginCredentials('company')" type="button"
                                            class="btn btn-outline-primary d-block tw-border tw-border-[#0A65CC]">
                                            <span class="button-content-wrapper">
                                                <span class="button-text">
                                                    Company Login
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                    <a href="#"
                                        class="tw-mt-4 btn btn-outline-primary d-block tw-border tw-border-[#0A65CC]">Admin
                                        Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="auth-right-sidebar r-z order-1 order-lg-0">
            <div class="sidebar-bg"
                style="background-image: url(https://jobpilot.templatecookie.com/frontend/assets/images/all-img/auth-img.png)">
                <div class="sidebar-content">
                    <h4 class="text-gray-10 rt-mb-50">1208 Open jobs waiting for you</h4>
                    <div class="d-flex">
                        <div class="flex-grow-1 rt-mb-24">
                            <div class="card jobcardStyle1 counterbox4">
                                <div class="card-body">
                                    <div class="rt-single-icon-box icon-center2">
                                        <div class="icon-thumb">
                                            <div class="icon-64">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M27.001 9H5.00098C4.44869 9 4.00098 9.44772 4.00098 10V26C4.00098 26.5523 4.44869 27 5.00098 27H27.001C27.5533 27 28.001 26.5523 28.001 26V10C28.001 9.44772 27.5533 9 27.001 9Z"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path opacity="0.2"
                                                        d="M16 19.0004C11.7872 19.007 7.64764 17.8995 4.00098 15.7902V26.0004C4.00098 26.1318 4.02684 26.2618 4.0771 26.3831C4.12735 26.5044 4.20101 26.6147 4.29387 26.7075C4.38673 26.8004 4.49697 26.8741 4.61829 26.9243C4.73962 26.9746 4.86965 27.0004 5.00098 27.0004H27.001C27.1323 27.0004 27.2623 26.9746 27.3837 26.9243C27.505 26.8741 27.6152 26.8004 27.7081 26.7075C27.8009 26.6147 27.8746 26.5044 27.9249 26.3831C27.9751 26.2618 28.001 26.1318 28.001 26.0004V15.7891C24.3539 17.8991 20.2135 19.0071 16 19.0004Z"
                                                        fill="white" />
                                                    <path
                                                        d="M27.001 9H5.00098C4.44869 9 4.00098 9.44772 4.00098 10V26C4.00098 26.5523 4.44869 27 5.00098 27H27.001C27.5533 27 28.001 26.5523 28.001 26V10C28.001 9.44772 27.5533 9 27.001 9Z"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M21 9V7C21 6.46957 20.7893 5.96086 20.4142 5.58579C20.0391 5.21071 19.5304 5 19 5H13C12.4696 5 11.9609 5.21071 11.5858 5.58579C11.2107 5.96086 11 6.46957 11 7V9"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M28.0012 15.7891C24.354 17.8991 20.2137 19.007 16.0002 19.0004C11.7873 19.007 7.64768 17.8995 4.00098 15.7901"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.5 15H17.5" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iconbox-content">
                                        <div class="f-size-20 ft-wt-5"><span class="counter">5</span>
                                        </div>
                                        <span class=" f-size-14">Live Jobs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1  rt-mb-24">
                            <div class="card jobcardStyle1 counterbox4">
                                <div class="card-body">
                                    <div class="rt-single-icon-box icon-center2">
                                        <div class="icon-thumb">
                                            <div class="icon-64">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.2"
                                                        d="M17.999 26.998V4.99805C17.999 4.73283 17.8937 4.47848 17.7061 4.29094C17.5186 4.1034 17.2642 3.99805 16.999 3.99805H4.99902C4.73381 3.99805 4.47945 4.1034 4.29192 4.29094C4.10438 4.47848 3.99902 4.73283 3.99902 4.99805V26.998"
                                                        fill="white" />
                                                    <path d="M2 26.998H30" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M17.999 26.998V4.99805C17.999 4.73283 17.8937 4.47848 17.7061 4.29094C17.5186 4.1034 17.2642 3.99805 16.999 3.99805H4.99902C4.73381 3.99805 4.47945 4.1034 4.29192 4.29094C4.10438 4.47848 3.99902 4.73283 3.99902 4.99805V26.998"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M27.999 26.998V12.998C27.999 12.7328 27.8937 12.4785 27.7061 12.2909C27.5186 12.1034 27.2642 11.998 26.999 11.998H17.999"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M7.99902 8.99805H11.999" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M9.99902 16.998H13.999" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.99902 21.998H11.999" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M21.999 21.998H23.999" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M21.999 16.998H23.999" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="iconbox-content">
                                            <div class="f-size-20 ft-wt-5"><span class="counter">14</span>
                                            </div>
                                            <span class=" f-size-14">Companies</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1 rt-mb-24">
                            <div class="card jobcardStyle1 counterbox4">
                                <div class="card-body">
                                    <div class="rt-single-icon-box icon-center2">
                                        <div class="icon-thumb">
                                            <div class="icon-64">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.2"
                                                        d="M16 19.0004C11.7872 19.007 7.64764 17.8995 4.00098 15.7902V26.0004C4.00098 26.1318 4.02684 26.2618 4.0771 26.3831C4.12735 26.5044 4.20101 26.6147 4.29387 26.7075C4.38673 26.8004 4.49697 26.8741 4.61829 26.9243C4.73962 26.9746 4.86965 27.0004 5.00098 27.0004H27.001C27.1323 27.0004 27.2623 26.9746 27.3837 26.9243C27.505 26.8741 27.6152 26.8004 27.7081 26.7075C27.8009 26.6147 27.8746 26.5044 27.9249 26.3831C27.9751 26.2618 28.001 26.1318 28.001 26.0004V15.7891C24.3539 17.8991 20.2135 19.0071 16 19.0004Z"
                                                        fill="white" />
                                                    <path
                                                        d="M27.001 9H5.00098C4.44869 9 4.00098 9.44772 4.00098 10V26C4.00098 26.5523 4.44869 27 5.00098 27H27.001C27.5533 27 28.001 26.5523 28.001 26V10C28.001 9.44772 27.5533 9 27.001 9Z"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M21 9V7C21 6.46957 20.7893 5.96086 20.4142 5.58579C20.0391 5.21071 19.5304 5 19 5H13C12.4696 5 11.9609 5.21071 11.5858 5.58579C11.2107 5.96086 11 6.46957 11 7V9"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M28.0012 15.7891C24.354 17.8991 20.2137 19.007 16.0002 19.0004C11.7873 19.007 7.64768 17.8995 4.00098 15.7901"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.5 15H17.5" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="iconbox-content">
                                            <div class="f-size-20 ft-wt-5"><span class="counter">31</span>
                                            </div>
                                            <span class="f-size-14">
                                                <span>Candidates</span>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- The Modal -->
    <div id="ModalBtn" class="modal">
        <div class="row justify-content-center m-2 mt-5 pt-5">
            <div class="col-sm-12 col-lg-4">
                <div class="rt-rounded-12">
                    <div class="card border border-gray-500">
                        <div class="card-header bg-primary text-white font-size-25">
                            Select One
                        </div>
                        <form class="d-inline justify-content-center" method="POST"
                            action="https://jobpilot.templatecookie.com/auth/social/register">
                            <input type="hidden" name="_token" value="K3OGSuJX017JfLzR0L1SetcWni1HQhbB6y5HQ0sP"
                                autocomplete="off">
                            <div class="card-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="experience">Company Or Candidate ?</label>
                                        <select name="user" class="form-controll rounded" id="">
                                            <option value="candidate">Candidate</option>
                                            <option value="company">Employer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <a href="https://jobpilot.templatecookie.com/login" class="close btn btn-danger">
                                    <div class="button-content-wrapper ">
                                        <span class="button-text">
                                            Cancel
                                        </span>
                                    </div>
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <div class="button-content-wrapper ">
                                        <span class="button-text">
                                            Register Now
                                        </span>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PWA Button Start -->
    <button class="pwa-install-btn bg-white position-fixed d-none" id="installApp">
        <img src="https://jobpilot.templatecookie.com/pwa-btn.png" alt="Install App">
    </button>
    <!-- PWA Button End -->

    <!-- scripts -->
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/bootstrap.bundle.js"></script>
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/jquery.counterup.min.js"></script>
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/jquery.scrollUp.min.js"></script>
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/OverlayScrollbars.js"></script>
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/scrollax.min.js"></script>
    <script src="https://jobpilot.templatecookie.com/backend/plugins/select2/js/select2.min.js"></script>
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/waypoints.min.js"></script>
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/jquery-ui.min.js"></script>
    <script src="https://jobpilot.templatecookie.com/backend/plugins/toastr/toastr.min.js"></script>
    <script src="https://jobpilot.templatecookie.com/backend/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/aos.js"></script>
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/slick.min.js"></script>
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/sortable.min.js"></script>
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/ckeditor.min.js"></script>
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/axios.min.js"></script>
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/app.js"></script>
    <link rel="preload" as="style" href="https://jobpilot.templatecookie.com/build/assets/app.21aed338.css" />
    <link rel="preload" as="style" href="https://jobpilot.templatecookie.com/build/assets/app.76229581.css" />
    <link rel="modulepreload" href="https://jobpilot.templatecookie.com/build/assets/app.a380e14a.js" />
    <link rel="stylesheet" href="https://jobpilot.templatecookie.com/build/assets/app.21aed338.css" />
    <link rel="stylesheet" href="https://jobpilot.templatecookie.com/build/assets/app.76229581.css" />
    <script type="module" src="https://jobpilot.templatecookie.com/build/assets/app.a380e14a.js"></script>
    <script>
        var auth_check = $('#auth_user').val();

    if (auth_check == 1) {
        loadUnreadMessageCount();

        function playAudio() {
            const audio = new Audio("/frontend/assets/sound.mp3");
            audio.play();
        }

        function loadUnreadMessageCount() {
            $.ajax({
                url: "https://jobpilot.templatecookie.com/load-unread-count",
                type: "GET",
                success: function(response) {
                    if (response > 0) {
                        $('.unread-message-part').removeClass('d-none');
                    } else {
                        $('.unread-message-part').addClass('d-none');
                    }
                }
            });
        }
    }

    // autocomplete
    var path = "https://jobpilot.templatecookie.com/job/autocomplete";

    $('.global_header_search').keyup(function(e) {
        var keyword = $(this).val();

        if (keyword != '') {
            $.ajax({
                url: path,
                type: 'GET',
                dataType: "json",
                data: {
                    search: keyword
                },
                success: function(data) {
                    $('#autocomplete_job_results').fadeIn();
                    $('#autocomplete_job_results').html(data);
                }
            });
        } else {
            $('#autocomplete_job_results').fadeOut();
        }
    });

    $('#global_search').keypress(function(e) {
        var key = e.which;

        if (key == 13) {
            $('#search-form').submit();
        }
    });

    $("#searchIcon").click(function() {
        $(".togglesearch").toggle();
        $("#search_input").focus();
    });

    $("#mblSearchIcon").click(function() {

        $(".mblTogglesearch").toggle();
        $('#mobile_search_input').focus();
    });


    $('button.effect1').on('click', function() {
        $(this).find('span').toggleClass('active');
    });

    $('.rt-mobile-menu-overlay').on('click', function() {
        $('button.effect1').find('span').removeClass('active');
    });

    //image upload scripts
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                if (input.className === 'profile-file-upload-input') {
                    $('.profile-image-upload-wrap').hide();
                    $('.profile-file-upload-image').attr('src', e.target.result);
                    $('.profile-file-upload-content').show();

                    // $('.image-title').html(input.files[0].name);
                }
                if (input.className === 'banner-file-upload-input') {
                    $('.banner-image-upload-wrap').hide();

                    $('.banner-file-upload-image').attr('src', e.target.result);
                    $('.banner-file-upload-content').show();

                    // $('.image-title').html(input.files[0].name);
                }
                if (input.className === 'resume-file-upload-input') {
                    $('.cv-image-upload-wrap').hide();
                    $('.resume-file-upload-content.none').show();
                }
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            $('.profile-remove-image').on('click', function() {
                $('.profile-file-upload-input').replaceWith($('.profile-file-upload-input').clone());
                $('.profile-file-upload-content').hide();
                $('.profile-file-upload-image').attr('src', '');
                $('.profile-image-upload-wrap').show();
            })
            $('.banner-remove-image').on('click', function() {
                $('.banner-file-upload-input').replaceWith($('.banner-file-upload-input').clone());
                $('.banner-file-upload-content').hide();
                $('.banner-file-upload-image').attr('src', '');
                $('.banner-image-upload-wrap').show();
            })
        }
    }
    $('.profile-remove-image').on('click', function() {
        $('.profile-file-upload-input').replaceWith($('.profile-file-upload-input').clone());
        $('.profile-file-upload-content').hide();
        $('.profile-image-upload-wrap').show();
    })
    $('.banner-remove-image').on('click', function() {
        $('.banner-file-upload-input').replaceWith($('.banner-file-upload-input').clone());
        $('.banner-file-upload-content').hide();
        $('.banner-image-upload-wrap').show();
    })
    $('.cv-remove-image').on('click', function() {
        $('.resume-file-upload-input').replaceWith($('.resume-file-upload-input').clone());
        $('.resume-file-upload-content').hide();
        $('.cv-image-upload-wrap').show();
    })

    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
    </script>

    <script>
        // toast config
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "hideMethod": "fadeOut"
    }

    $('.login_required').on('click', function(event) {
        event.preventDefault();

        Swal.fire({
            title: "Unauthenticated",
            text: "Performing this action requires logging into your account. Would you like to log in now",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Yes, I want to login",
            cancelButtonText: "Cancel",
        }).then((result) => {
            if (result.value) {
                window.location.href = '/login';
            }
        })
    });
    $('.no_permission').on('click', function(event) {
        event.preventDefault();
        Swal.fire({
            title: "Unauthorized Access",
            text: "You don't have permission to perform this action",
            icon: "warning",
            dangerMode: true,
        })
    });

    $('[data-toggle="tooltip"]').tooltip();

    $(".notification-icon a").off("click").on('click', function(e) {
        e.stopImmediatePropagation();
        return true;
    });
    </script>

    <script>
        // read notification by ajax
    function ReadNotification() {
        $.ajax({
            url: "https://jobpilot.templatecookie.com/user/notification/read",
            type: "POST",
            data: {
                _token: 'K3OGSuJX017JfLzR0L1SetcWni1HQhbB6y5HQ0sP'
            },
            dataType: 'json',
            success: function(data) {
                $('#unNotifications').hide();
            }
        });
    }
    // read single notification by ajax
    function readSingleNotification(url, id) {
        $.ajax({
            url: "https://jobpilot.templatecookie.com/markasread/single/notification",
            type: "POST",
            data: {
                id: id,
                _token: 'K3OGSuJX017JfLzR0L1SetcWni1HQhbB6y5HQ0sP'
            },
            dataType: 'json',
            success: function(data) {
                window.location.href = url;
            }
        });
    }
    // Call ckeditor
    if (document.querySelector('#image_ckeditor')) {
        ClassicEditor.create(document.querySelector('#image_ckeditor'), {
                ckfinder: {
                    uploadUrl: "https://jobpilot.templatecookie.com/ckeditor/upload?_token=K3OGSuJX017JfLzR0L1SetcWni1HQhbB6y5HQ0sP"
                },
            })
            .catch(error => {
                console.error(error);
            });
    }
    // Call ckeditor
    if (document.querySelector('#image_ckeditor_2')) {
        ClassicEditor.create(document.querySelector('#image_ckeditor_2'), {
                ckfinder: {
                    uploadUrl: "https://jobpilot.templatecookie.com/ckeditor/upload?_token=K3OGSuJX017JfLzR0L1SetcWni1HQhbB6y5HQ0sP"
                },
            })
            .catch(error => {
                console.error(error);
            });
    }
    // Call ckeditor
    if (document.querySelector('#editor2')) {

        ClassicEditor.create(document.querySelector('#editor2'))
            .then(editor => {
                editor.ui.view.editable.element.style.height = '500px';
            })
            .catch(error => {
                console.error(error);
            });
    }
    // Call ckeditor
    if (document.querySelector('#editor3')) {
        ClassicEditor.create(document.querySelector('#editor3'))
            .then(editor => {
                editor.ui.view.editable.element.style.height = '500px';
            })
            .catch(error => {
                console.error(error);
            });
    }
    // Call ckeditor
    if (document.querySelector('#editor4')) {
        ClassicEditor.create(document.querySelector('#editor4'))
            .then(editor => {
                editor.ui.view.editable.element.style.height = '500px';
            })
            .catch(error => {
                console.error(error);
            });
    }

    function setLocationSession(form) {
        axios.post('/set/session', form)
            .then((res) => {
                // console.log(res.data);
                // toastr.success("Location Saved", 'Success!');
            })
            .catch((e) => {
                toastr.error("Something Wrong", 'Error!');
            });
    }
    // about page testimonial
    if ($(".testimonal2-active").length > 0) {
        $(".testimonal2-active").slick({
            slidesToShow: 1,
            infinite: true,
            slidesToScroll: 1,
            dots: true,
            fade: false,
            prevArrow: $(".slickprev3"),
            nextArrow: $(".slicknext3")
        });
    }
    // tab switch style
    var style = localStorage.getItem("candidate_style") == null ? 'box' : localStorage.getItem("candidate_style");
    setStyle(style);

    function styleSwitch(style) {
        localStorage.setItem("candidate_style", style);
        setStyle(style);
    }

    function setStyle(style) {
        if (style == 'box') {
            $('#nav-home-tab').addClass('active');
            $('#nav-home').addClass('show active');
            $('#nav-profile-tab').removeClass('active');
            $('#nav-profile').removeClass('show active');
        } else {
            $('#nav-home-tab').removeClass('active');
            $('#nav-home').removeClass('show active');
            $('#nav-profile-tab').addClass('active');
            $('#nav-profile').addClass('show active');
        }
    }

    // category wise search
    $(document).ready(function() {
        const form = $("#job_search_form");
        const radioButtons = form.find("input[aria-data-id='category']");

        // Store the initial action attribute value
        const defaultAction = form.attr("action");

        // Function to update the form action based on the selected radio button
        function updateFormAction(selectedRadioValue) {
            const dataSlug = selectedRadioValue || '';
            const actionUrl = selectedRadioValue ?
                "https://jobpilot.templatecookie.com/jobs/category/:slug".replace(':slug', dataSlug) :
                defaultAction;
            form.attr("action", actionUrl);
        }

        // Initialize form action on page load
        updateFormAction("");

        // Update selected radio value when radio button changes
        radioButtons.on("change", function() {
            const selectedRadioValue = $(this).data('id');
            updateFormAction(selectedRadioValue);
        });
    });
    </script>











    <script>
        !function(t,e){var o,n,p,r;e.__SV||(window.posthog=e,e._i=[],e.init=function(i,s,a){function g(t,e){var o=e.split(".");2==o.length&&(t=t[o[0]],e=o[1]),t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}}(p=t.createElement("script")).type="text/javascript",p.crossOrigin="anonymous",p.async=!0,p.src=s.api_host.replace(".i.posthog.com","-assets.i.posthog.com")+"/static/array.js",(r=t.getElementsByTagName("script")[0]).parentNode.insertBefore(p,r);var u=e;for(void 0!==a?u=e[a]=[]:a="posthog",u.people=u.people||[],u.toString=function(t){var e="posthog";return"posthog"!==a&&(e+="."+a),t||(e+=" (stub)"),e},u.people.toString=function(){return u.toString(1)+".people (stub)"},o="init capture register register_once register_for_session unregister unregister_for_session getFeatureFlag getFeatureFlagPayload isFeatureEnabled reloadFeatureFlags updateEarlyAccessFeatureEnrollment getEarlyAccessFeatures on onFeatureFlags onSessionId getSurveys getActiveMatchingSurveys renderSurvey canRenderSurvey getNextSurveyStep identify setPersonProperties group resetGroups setPersonPropertiesForFlags resetPersonPropertiesForFlags setGroupPropertiesForFlags resetGroupPropertiesForFlags reset get_distinct_id getGroups get_session_id get_session_replay_url alias set_config startSessionRecording stopSessionRecording sessionRecordingStarted captureException loadToolbar get_property getSessionProperty createPersonProfile opt_in_capturing opt_out_capturing has_opted_in_capturing has_opted_out_capturing clear_opt_in_out_capturing debug getPageViewId".split(" "),n=0;n<o.length;n++)g(u,o[n]);e._i.push([i,s,a])},e.__SV=1)}(document,window.posthog||[]);
    posthog.init('phc_gZ1gM5ohs92IjEQMziTLugJTGwgOVZy62QRHrgcF2G7', {
        api_host:'https://us.i.posthog.com',
        person_profiles: 'identified_only' // or 'always' to create profiles for anonymous users as well
    })
    </script>





    <script defer src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        $(document).ready(function() {
            Validate();
            $('#email, #password').keyup(Validate);
        });

        function Validate() {
            if (
                $('#email').val().length > 0 &&
                $('#password').val().length > 0) {
                $('#submitButton').prop('disabled', false);
            } else {
                $('#submitButton').prop('disabled', true);
            }
        }

        function passToText(id, icon) {
            var input = $('#' + id);
            var eyeIcon = $('#' + icon);
            if (input.is('input[type="password"]')) {
                eyeIcon.html('<i class="ph-eye-slash "></i>');
                input.attr('type', 'text');
            } else {
                eyeIcon.html('<i class="ph-eye "></i>');
                input.attr('type', 'password');
            }
        }

        function loginCredentials(type) {
            if (type == 'candidate') {
                $('#email').val('candidate@mail.com')
                $('#password').val('password')
            } else {
                $('#email').val('company@mail.com')
                $('#password').val('password')
            }

            $('#login_form').submit();
        }

        if (0 == 1) {
            LoginService();
        }

        function LoginService() {
            $("#ModalBtn").css("display", "block");
        }
    </script>
    <script defer src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        $(document).ready(function() {
            Validate();
            $('#email, #password').keyup(Validate);
        });

        function Validate() {
            if (
                $('#email').val().length > 0 &&
                $('#password').val().length > 0) {
                $('#submitButton').prop('disabled', false);
            } else {
                $('#submitButton').prop('disabled', true);
            }
        }

        function passToText(id, icon) {
            var input = $('#' + id);
            var eyeIcon = $('#' + icon);
            if (input.is('input[type="password"]')) {
                eyeIcon.html('<i class="ph-eye-slash "></i>');
                input.attr('type', 'text');
            } else {
                eyeIcon.html('<i class="ph-eye "></i>');
                input.attr('type', 'password');
            }
        }

        function loginCredentials(type) {
            if (type == 'candidate') {
                $('#email').val('candidate@example.com')
                $('#password').val('1234')
            } else {
                $('#email').val('employer@example.com')
                $('#password').val('1234')
            }

            $('#login_form').submit();
        }

        if (0 == 1) {
            LoginService();
        }

        function LoginService() {
            $("#ModalBtn").css("display", "block");
        }
    </script>

    <!-- PWA Script Start -->
    <!-- PWA Script End -->

</body>

</html>