<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/style.css')}}">

    @yield('css')
    <title>{{config('app.name', 'jop portal')}}</title>
<<<<<<< HEAD
=======
    <!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <style>
         .sidebar {
            background-color: #f8f9fa;
            padding-top: 20px;
            height: 100vh;
        }
        .sidebar a {
            padding: 10px 20px;
            display: block;
            color: #333;
            text-decoration: none;
             margin-bottom: 5px;
        }
        .sidebar a:hover {
            background-color: #e9ecef;
        }
        .sidebar a.active {
             background-color: #e9ecef;
              font-weight: bold;
        }
         .sidebar a i {
           margin-right: 10px;
        }
         .sidebar .logout-btn {
             margin-top: auto;
              padding: 10px 20px;
        }
         .form-label{
           font-weight: bold;
        }
        .leaflet-container {
            height: 300px;
            width: 100%;
        }
        .benefits-container .btn{
             margin: 5px;
        }
        .form-control:focus, .form-select:focus {
            box-shadow: none;
            border-color: #ced4da;
         }
          .btn-outline-secondary:focus{
             box-shadow: none;
         }
          #customSalaryInput::selection {
            background-color: rgb(59 130 246 / .5);; /* اللون الأزرق الفاتح */
          }
          #customSalaryInput::-moz-selection {
            background-color: #b3d7ff; /* اللون الأزرق الفاتح (للمتصفح Firefox) */
          }
           .create-benefit {
              display: flex;
             align-items: center;
               gap: 10px;
           }
          .create-benefit .form-control {
             width: auto;
          }
        .table-responsive{
          overflow-x:auto;
        }
          .dropdown-toggle{
            background-color: #fff !important;
             border: 1px solid #ced4da !important;
             padding-left: 1.25rem !important;
               font-size: 0.875rem;
               font-weight: 400;
        }
         .dropdown-menu{
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15)!important;
              padding: 0.5rem 0;
                min-width: 13rem !important;
         }
          .dropdown-item:focus, .dropdown-item:hover{
           background-color: #e9ecef;
        }
      .table thead th{
          border-bottom: 1px solid #dee2e6;
           color: #6c757d;
             font-size: .875rem;
           font-weight: 500;
          text-transform: uppercase;
           padding: 1.25rem 1rem;
           vertical-align: middle !important;
        }
          .table tbody tr:last-child td{
             border-bottom: none;
          }
          .table tbody td{
             padding: 1.25rem 1rem;
              vertical-align: middle;
               font-size: .9rem;
          }
           .table-responsive{
               border: 1px solid #dee2e6;
                border-radius: .375rem;
           }
           .page-item.active .page-link {
                background-color: #0d6efd;
               border-color: #0d6efd;
               z-index: 1;
               color: #fff;
            }
             .page-link{
               border: 1px solid #dee2e6;
            }
             .page-item:first-child .page-link, .page-item:last-child .page-link{
                border-radius: .375rem;
             }
                .btn-light{
              background-color: #fff !important;
                padding: 0.375rem;
                    border: 0;
           }
           .btn-light:hover {
                 background-color: #e9ecef !important;
            }
             .badge{
                font-weight: 500;
                 padding: 0.45em 0.7em;
                 border-radius: 50px;
                 font-size: .875rem;
            }
             .dropdown-menu a{
                font-size: .9rem;
             }
             .btn-primary{
                 font-size: .9rem;
                  padding: 0.5em 1em;
             }
              .table tbody tr td:nth-child(3){
               text-align: center;
           }
              .table tbody tr td:nth-child(4){
               text-align: right;
           }
            .badge-active{
                 display: inline-block;
                    width: 18px;
                    height: 18px;
                    border-radius: 50%;
                    background-color: #28a745;
                    position: relative;
                    margin-right: 5px;
                }
            .badge-active::after {
                content: '\2713'; /* Unicode checkmark */
                font-size: 12px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: #fff; /* Adjust color as needed */
          }
           .badge-pending{
                display: inline-block;
                width: 18px;
                height: 18px;
                border-radius: 50%;
                background-color: #ffc107; /* Yellow for pending */
                position: relative;
                margin-right: 5px;
              }
          .badge-pending::after{
                content: '\f017'; /* clock */
                font-family: 'Font Awesome 6 Free';
                font-weight: 900;
                font-size: 10px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: #fff;
           }
          .badge-expired{
                display: inline-block;
                width: 18px;
                height: 18px;
                border-radius: 50%;
                 background-color: #dc3545; /* red for Expired */
                position: relative;
                margin-right: 5px;
            }
           .badge-expired::after {
               content: '\f057'; /* exclamation-circle */
               font-family: 'Font Awesome 6 Free';
                font-weight: 900;
                font-size: 10px;
                position: absolute;
                 top: 50%;
                 left: 50%;
                 transform: translate(-50%, -50%);
                 color: #fff;
         }
            .icon-applications {
                  display: inline-block;
                   width: 18px;
                  height: 18px;
                 border-radius: 50%;
                 background-color: #e9ecef;
                position: relative;
                   margin-right: 5px;
            }
            .icon-applications::after{
                 content: '\f007';
                font-family: 'Font Awesome 6 Free';
                font-weight: 900;
                  font-size: 10px;
                  position: absolute;
                    top: 50%;
                    left: 50%;
                 transform: translate(-50%, -50%);
               color: #6c757d; /* Adjust color as needed */
           }
           .form-check-label.active{
               background-color: #f8f9fa;
           }
            .banner-image {
              height: 200px;
             overflow: hidden;
            }
            .banner-image img {
              width: 100%;
              object-fit: cover;
               object-position: center;
            }
           .profile-card{
                 position: relative;
                 padding: 1rem;
                 background-color: #fff;
                 border-radius: 0.375rem;
               box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15)!important;
               top: -80px;
                left: 20px;
               display: flex;
                align-items: center;
                gap: 15px;
                width: 95%;
           }
            .profile-card img{
               width: 60px;
                height: 60px;
             }
            .profile-card .open-position{
                 margin-left: auto;
              }
           .contact-information{
                 margin-top: 20px;
                 border: 1px solid #dee2e6;
                  border-radius: .375rem;
                   padding: 1.5rem;
             }
          .map-location{
                 margin-top: 20px;
                 border: 1px solid #dee2e6;
                   border-radius: .375rem;
                 padding: 1.5rem;
            }
           .form-check-label.active{
              background-color: #f8f9fa;
           }
           .open-positions-card{
              border: 1px solid #dee2e6;
                 border-radius: .375rem;
               padding: 1rem;
             text-decoration: none;
            display: block;
              color: #333;
             transition: all 0.3s ease;
            }
             .open-positions-card:hover{
              background-color: #e9ecef;
               transform: translateY(-5px);
            }
            .open-positions-card img{
                 width: 40px;
                 height: 40px;
               border-radius: .375rem;
            }
           .open-positions-card .card-text{
                margin-bottom: 0;
            }
           .open-positions-card .card-location{
                font-size: .8rem;
            }
             .open-positions-card .card-type{
                  font-size: .8rem;
               color: #6c757d;
           }
            .screening-questions-container{
               border: 1px solid #dee2e6;
                 border-radius: .375rem;
                   padding: 1.5rem;
               }
            .screening-questions-container label {
                font-weight: normal;
           }
           .apply-on-container{
                 margin-top: 15px;
                  padding: 1.5rem;
                   border: 1px solid #dee2e6;
                 border-radius: .375rem;
            }
         .apply-on-container .form-check-label{
                display: flex;
                 align-items: center;
                 gap: 10px;
              margin-bottom: 10px;
                 padding: 1.25rem;
                    border: 1px solid #dee2e6;
               border-radius: .375rem;
            transition: all 0.3s ease-in-out;
             }
          .apply-on-container .form-check-label input{
                 margin: 0;
            }
             .apply-on-container .form-check-label:hover {
             background-color: #f8f9fa;
               transform: translateY(-3px);
            }
           .email-address-container{
                margin-top: 15px;
               display: none;
            }
              .email-address-container .input-group{
                   border: 1px solid #ced4da;
                    border-radius: .375rem;
              }
             .email-address-container .input-group-text{
                  background-color: #e9ecef;
                   border: 0;
             }
             .website-url-container{
               margin-top: 15px;
              display: none;
           }
           .website-url-container .input-group{
                 border: 1px solid #ced4da;
                  border-radius: .375rem;
            }
            .website-url-container .input-group-text{
                  background-color: #e9ecef;
                   border: 0;
            }
          h2{
              font-size: 1.5rem;
                font-weight: 600;
             color: #343a40;
           }
           h3 {
                font-size: 1.5rem;
               font-weight: 600;
                color: #343a40;
             }
              h4 {
                 font-size: 1.2rem;
               font-weight: 600;
                 color: #343a40;
             }
               p{
                 font-size: .9rem;
             }
              .table tbody tr td{
                 color: #343a40;
            }
            .table tbody tr td span{
                  color: #343a40;
            }
            .dropdown-menu a{
                color: #343a40;
            }
             .overview-counter {
                  border: 1px solid #dee2e6;
                  border-radius: .375rem;
                    padding: 1.5rem;
                    text-align: center;
                }
             .overview-counter .counter-title {
                  color: #6c757d;
                   font-size: .875rem;
                  margin-bottom: 0.5rem;
             }
              .overview-counter .counter-value {
                  font-size: 1.5rem;
                   font-weight: 600;
             }
               .overview-counter .icon-container {
                   display: inline-block;
                   border-radius: 50%;
                     padding: 0.7rem;
                     background-color: #e9ecef;
                     margin-bottom: 0.5rem;
             }
          .overview-pricing {
              border: 1px solid #dee2e6;
               border-radius: .375rem;
             padding: 1.5rem;
         }
         .overview-pricing .pricing-title{
             margin-bottom: 1.25rem;
              font-weight: 600;
              font-size: 1.2rem;
                color: #343a40;
         }
        .overview-pricing .pricing-item{
             text-align: center;
         }
        .overview-pricing .pricing-item span{
             display: block;
         }
          .overview-pricing .pricing-item .pricing-value{
                font-size: 1.5rem;
              font-weight: 600;
              color: #343a40;
         }
        .overview-pricing .pricing-item .pricing-label{
              color: #6c757d;
               font-size: .875rem;
         }
          .overview-pricing a{
                color: #0d6efd;
             text-decoration: none;
         }
    </style>
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
</head>

<body>
    @include('layouts.navbar')

<<<<<<< HEAD
    @yield('centent')


=======
    <div class="container-fluid">
           <div class="row">
             <x-sidebar />
             <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                  @yield('content')
            </main>
           </div>
        </div>
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)

    @include('layouts.footer')


    {{-- <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
<<<<<<< HEAD
   
=======
    @include('layouts.footer')
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
    @yield('script')
</body>

</html>