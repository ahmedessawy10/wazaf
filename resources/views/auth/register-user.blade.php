<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="    Jobpilot is job portal laravel script designed to create, manage and publish jobs posts. Companies can create their profile and publish jobs posts. Candidate can apply job posts.
">
    <meta property="og:image" content="    https://jobpilot.templatecookie.com/frontend/assets/images/jobpilot.png
">

    <title> Register
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
                    <a href="/" class="brand-logo"><img
                            src="https://jobpilot.templatecookie.com/frontend/assets/images/logo/light_logo.svg"
                            alt="logo"></a>
                </div><!-- /.container -->
            </div><!-- /.navbar -->
        </div><!-- /.main-header -->
    </header>
    <div class="row">
        <div class="auth-page2 order-1 order-lg-0">
            <div class="rt-spacer-100  rt-spacer-lg-50 rt-spacer-xs-50"></div>
            <div class="rt-spacer-100 rt-spacer-lg-50 rt-spacer-xs-0"></div>
            <div class="rt-spacer-50 rt-spacer-lg-0 rt-spacer-xs-0"></div>
            <div class="container">
                <div class="row ">
                    <div class="col-xl-5 col-lg-6 col-md-12 tw-bg-white tw-relative tw-z-50">
                        <div class="auth-box2">
                            <form id="formId" action="https://jobpilot.templatecookie.com/register" method="POST"
                                class="rt-form">
                                <input type="hidden" name="_token" value="SOpJpl6kpRnfRxzc0LDACcwEuC1VrhDLS27kKPvV"
                                    autocomplete="off">
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="rt-mb-20">Create Account</h4>
                                        <span class="d-block body-font-3 text-gray-600 rt-mb-32">
                                            Already have an account?
                                            <span>
                                                <a href="{{route('login')}}">Log In</a>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <div class="tw-bg-[#F1F2F4] tw-rounded-lg tw-mb-6 tw-p-3">
                                            <p
                                                class="tw-text-[#767F8C] tw-text-xs tw-font-medium tw-text-center tw-mb-2">
                                                CREATE ACCOUNT AS A
                                            </p>
                                            <div
                                                class="switcher-container tw-px-0 tw-w-full tw-border-2 tw-border-red-600 tw-flex">
                                                <input id="switcher-toggle-on"
                                                    class="switcher-toggle switcher-toggle-left tw-w-full" name="role"
                                                    value="candidate" type="radio" checked="">
                                                <label for="switcher-toggle-on"
                                                    class="switcher-button tw-w-full tw-rounded-tl-md  tw-rounded-bl-md"
                                                    id="web-btn">
                                                    <span><svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.5 21C17.4706 21 21.5 16.9706 21.5 12C21.5 7.02944 17.4706 3 12.5 3C7.52944 3 3.5 7.02944 3.5 12C3.5 16.9706 7.52944 21 12.5 21Z"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M12.5 15C14.5711 15 16.25 13.3211 16.25 11.25C16.25 9.17893 14.5711 7.5 12.5 7.5C10.4289 7.5 8.75 9.17893 8.75 11.25C8.75 13.3211 10.4289 15 12.5 15Z"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M6.4812 18.6913C7.04615 17.5806 7.90744 16.6478 8.96973 15.9963C10.032 15.3448 11.2539 15 12.5 15C13.7462 15 14.968 15.3448 16.0303 15.9963C17.0926 16.6478 17.9539 17.5806 18.5189 18.6913"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    <span>Candidate</span>
                                                </label>
                                                <input id="switcher-toggle-off"
                                                    class="switcher-toggle switcher-toggle-right tw-w-full" name="role"
                                                    value="company" type="radio">
                                                <label for="switcher-toggle-off"
                                                    class="switcher-button tw-w-full  tw-rounded-tr-md tw-rounded-br-md"
                                                    id="wp-btn">
                                                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.5 20.2484H22.5" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M13.4995 20.2484V3.74841C13.4995 3.5495 13.4205 3.35874 13.2798 3.21808C13.1392 3.07743 12.9484 2.99841 12.7495 2.99841H3.74951C3.5506 2.99841 3.35983 3.07743 3.21918 3.21808C3.07853 3.35874 2.99951 3.5495 2.99951 3.74841V20.2484"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M20.9995 20.2484V9.74841C20.9995 9.5495 20.9205 9.35874 20.7798 9.21808C20.6392 9.07743 20.4484 8.99841 20.2495 8.99841H13.4995"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M5.99951 6.74841H8.99951" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M7.49951 12.7484H10.4995" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M5.99951 16.4984H8.99951" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M16.4995 16.4984H17.9995" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M16.4995 12.7484H17.9995" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                    <span>Employer</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="fromGroup rt-mb-15">
                                            <input name="name" id="name" value="" class="field form-control "
                                                type="text" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="fromGroup rt-mb-15">
                                            <input type="email" id="email" value="" name="email"
                                                class="field form-control " placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>

                                <div class="rt-mb-15">
                                    <div class="d-flex fromGroup">
                                        <input name="password" id="password" class="form-control " type="password"
                                            placeholder="Password">
                                        <div onclick="passToText('password','eyeIcon')" id="eyeIcon" class="has-badge">
                                            <i class="ph-eye "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="rt-mb-15">
                                    <div class="d-flex fromGroup">
                                        <input name="password_confirmation" id="password_confirmation"
                                            class="form-control " type="password" placeholder="Confirm Password">
                                        <div onclick="passToText('password_confirmation','eyeIcon2')" id="eyeIcon2"
                                            class="has-badge">
                                            <i class="ph-eye "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="rt-mb-30">
                                    <div class="form-check from-chekbox-custom align-items-center">
                                        <input id="term" class="form-check-input" type="checkbox" value="1" required>
                                        <label class="form-check-label pointer text-gray-700 f-size-14" for="term">
                                            I&#039;ve read and agree with
                                        </label>
                                        <a href="https://jobpilot.templatecookie.com/terms-condition" target="_blank"
                                            class="body-font-4 text-primary-500">
                                            Terms of Service
                                        </a>
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
                                            Create Account
                                        </span>
                                    </span>
                                </button>

                                <div>
                                    <div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-3 tw-gap-6">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rt-spacer-100 rt-spacer-md-50"></div>
        </div>
        <div class="auth-right-sidebar reg-sidebar order-1 order-lg-0">
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
                        </div>
                        <div class="flex-grow-1  rt-mb-24">
                            <div class="card jobcardStyle1 counterbox4">
                                <div class="card-body">
                                    <div class="rt-single-icon-box icon-center2">
                                        <div class="icon-thumb">
                                            <div class="icon-64">

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

                                            </div>
                                        </div>
                                        <div class="iconbox-content">
                                            <div class="f-size-20 ft-wt-5"><span class="counter">31</span>
                                            </div>
                                            <span class=" f-size-14">Candidates</span>
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
                        <form id="LoginFormHit" class="d-inline justify-content-center" method="GET">
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
                                <button onclick="CloseModoal()" type="button" class="close btn btn-danger">
                                    <div class="button-content-wrapper ">
                                        <span class="button-text">
                                            Cancel
                                        </span>
                                    </div>
                                </button>
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
                _token: 'SOpJpl6kpRnfRxzc0LDACcwEuC1VrhDLS27kKPvV'
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
                _token: 'SOpJpl6kpRnfRxzc0LDACcwEuC1VrhDLS27kKPvV'
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
                    uploadUrl: "https://jobpilot.templatecookie.com/ckeditor/upload?_token=SOpJpl6kpRnfRxzc0LDACcwEuC1VrhDLS27kKPvV"
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
                    uploadUrl: "https://jobpilot.templatecookie.com/ckeditor/upload?_token=SOpJpl6kpRnfRxzc0LDACcwEuC1VrhDLS27kKPvV"
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
        function LoginService(value) {
            $("#ModalBtn").css("display", "block");
            var action = "auth/" + value + "/redirect";
            $("#LoginFormHit").attr("action", action);
        }

        function CloseModoal() {
            $("#ModalBtn").css("display", "none");
        }
    </script>
    <script>
        $(document).ready(function() {
            validate();
            $('#name, #email, #password, #password_confirmation, #term').keyup(validate);
        });

        function validate() {
            if (
                $('#name').val().length > 0 &&
                $('#email').val().length > 0 &&
                $('#password').val().length > 0 &&
                $('#password_confirmation').val().length > 0 &&
                $('#term').val().length > 0) {
                $('#submitButton').attr('disabled', false);
            } else {
                $('#submitButton').attr('disabled', true);
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
    </script>
    <script defer src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        function LoginService(value) {
            $("#ModalBtn").css("display", "block");
            var action = "auth/" + value + "/redirect";
            $("#LoginFormHit").attr("action", action);
        }

        function CloseModoal() {
            $("#ModalBtn").css("display", "none");
        }
    </script>
    <script>
        $(document).ready(function() {
            validate();
            $('#name, #email, #password, #password_confirmation, #term').keyup(validate);
        });

        function validate() {
            if (
                $('#name').val().length > 0 &&
                $('#email').val().length > 0 &&
                $('#password').val().length > 0 &&
                $('#password_confirmation').val().length > 0 &&
                $('#term').val().length > 0) {
                $('#submitButton').attr('disabled', false);
            } else {
                $('#submitButton').attr('disabled', true);
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
    </script>

    <!-- PWA Script Start -->
    <!-- PWA Script End -->

</body>

</html>