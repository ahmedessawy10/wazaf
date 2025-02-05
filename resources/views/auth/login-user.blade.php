<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="   wazaf is job portal laravel script designed to create, manage and publish jobs posts. Companies can create their profile and publish jobs posts. Candidate can apply job posts.
">
    {{-- <meta property="og:image" content="https://jobpilot.templatecookie.com/frontend/assets/images/jobpilot.png
"> --}}

    <title> Login
    </title>
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


    {{-- <script src="https://jobpilot.templatecookie.com/frontend/assets/js/jquery-3.6.0.min.js"></script> --}}
    {{-- <link rel="icon" type="image/png" href="https://jobpilot.templatecookie.com/frontend/assets/images/logo/fav.png"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="preload"
        as="style">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    {{-- <link rel="preload" as="style" href="https://jobpilot.templatecookie.com/build/assets/app.2a1af9ee.css" /> --}}
    {{-- <link rel="preload" as="style" href="https://jobpilot.templatecookie.com/build/assets/app.76229581.css" /> --}}
    {{-- <link rel="stylesheet" href="https://jobpilot.templatecookie.com/build/assets/app.2a1af9ee.css" /> --}}
    <link rel="stylesheet" href="{{asset('vendor/login.css')}}" />



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
                            <form action="{{route('login')}}" method="POST" class="rt-form" id="login_form">
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
        <img src="" alt="Install App">
    </button>
    <!-- PWA Button End -->

    <!-- scripts -->
    {{-- <script src="https://jobpilot.templatecookie.com/frontend/assets/js/bootstrap.bundle.js"></script>
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
    <script src="https://jobpilot.templatecookie.com/frontend/assets/js/axios.min.js"></script> --}}
    {{-- <script src="https://jobpilot.templatecookie.com/frontend/assets/js/app.js"></script> --}}
    {{-- <link rel="preload" as="style" href="https://jobpilot.templatecookie.com/build/assets/app.21aed338.css" />
    <link rel="preload" as="style" href="https://jobpilot.templatecookie.com/build/assets/app.76229581.css" />
    <link rel="modulepreload" href="https://jobpilot.templatecookie.com/build/assets/app.a380e14a.js" />
    <link rel="stylesheet" href="https://jobpilot.templatecookie.com/build/assets/app.21aed338.css" />
    <link rel="stylesheet" href="https://jobpilot.templatecookie.com/build/assets/app.76229581.css" />
    <script type="module" src="https://jobpilot.templatecookie.com/build/assets/app.a380e14a.js"></script> --}}






    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- <script defer src='https://www.google.com/recaptcha/api.js'></script> --}}
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
    {{-- <script defer src='https://www.google.com/recaptcha/api.js'></script> --}}
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