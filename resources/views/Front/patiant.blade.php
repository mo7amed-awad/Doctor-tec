<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Profile</title>
    <meta name="description" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet" />

    <!-- Normalize -->
    <link rel="stylesheet" href="{{asset('assets/Profile/css/normalize.css')}}" />
    <!-- Font Assume -->
    <link rel="stylesheet" href="{{asset('assets/Profile/css/fontAssume.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/Profile/css/font-awesome.css')}}" />
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/twentytwenty/twentytwenty.css')}}" rel="stylesheet" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/Profile/css/bootstrap.min.css')}}" />
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- AOS Libraiy -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Main File css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <!-- Style Css -->
    <link rel="stylesheet" href="{{asset('assets/Profile/css/profile.css')}}" />
    <!-- Vendor Js -->
    <script src="{{asset('assets/Profile/js/vendor/modernizr-2.6.2.min.js')}}"></script>
    <style>
        .alerting {
            font-family: 'Rubik', sans-serif !important;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            width: 308px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 20px;
            font-weight: 500;
            background-color: #06A3DA;
            color: white !important;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .close-btn {
            cursor: pointer;
            font-size: 24px;
            color: white;
            margin-left: 10px;
        }
    </style>
    <style>
        .custom-table th,
        .custom-table td {
            text-align: center;
            color: black;
            /* Change font color to blue */
            border: 1px solid #06a3da;
            /* Blue borders for cells */
        }

        .custom-table {
            border-collapse: separate;
            /* Ensure borders don't collapse */
            border-spacing: 0;
            /* No extra space between borders */
            border: 2px solid #06a3da;
            border-radius: 15px;
        }

        .custom-table thead th {
            color: #06a3da;
            /* Change header font color to blue */
        }
    </style>

</head>

<body>
    @if(session()->has('succed'))

    <div class="ui-alert ui-alert--success alerting" id="alert-box">
        <div class="fa-solid fa-circle-info"></div>
        <div class="ui-alert-inner">
            <h3 style="color: white;">{{ session('succed') }}</h3>
        </div>
        <i class="fa-regular fa-circle-xmark close-btn" id="btn"></i>
    </div>

    @endif
    <div class="responsive-header visible-xs visible-sm">
        <div class="container">
            <div class="row"></div>
            <div class="d-flex align-center justify-content-between">
                <img class="logo  w-full mt-3" src="{{asset('assets/img/logo.jpg')}}" alt="">
                <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
            </div>
            <div class="main-navigation responsive-menu">
                <ul class="navigation">
                    <li data-aos="fade-down">
                        <a href="{{ route('home') }}"><i class="fa-solid fa-house"></i>الرئسية</a>
                    </li>
                    <li data-aos="fade-down">
                        <a href="#about"><i class="fa-solid fa-user"></i>بيانات
                            شخصية</a>
                    </li>
                    <li data-aos="fade-down">
                        <a href="#Diagnosis"><i class="fa-solid fa-file"></i>التشخيصات</a>
                    </li>

                    {{-- <li data-aos="fade-down">
                        <form action="{{route('logout.user')}}" method="POST"></form>
                    @csrf
                    <button type="submit"> <i class="fa-solid fa-file"></i>التشخيصات</button>
                    </li> --}}
                    <li data-aos="fade-down">
                        <form action="{{route('logout.user')}}" method="POST">
                            @csrf
                            <a href=""><button type="submit" style=" background: none; border: none; "> <i class="fa-solid fa-right-from-bracket"></i>تسجيل الخروج</button></a>
                        </form>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <!-- SIDEBAR -->
    <div class="sidebar-menu hidden-xs hidden-sm">
        <div class="top-section">
            <div class="profile-image" data-aos="fade-down">
                <img src="{{asset('storage/' .(Auth::guard('web')->user()->image))}}" alt="" />
            </div>
            <h3 class="profile-title" data-aos="fade-up">{{Auth::guard('web')->user()->name}}</h3>
        </div>
        <!-- top-section -->
        <div class="main-navigation">
            <ul class="">
                <li data-aos="fade-left">
                    <a href="{{ route('home') }}" data-aos="zoom-in-right">
                        <i class="fa-solid fa-home"></i> الرئسية
                    </a>
                </li>
                <li data-aos="fade-left">
                    <a href="#about">
                        <i class="fa-solid fa-user"></i> بيانات شخصية
                    </a>
                </li>
                <li data-aos="fade-left">
                    <a href="#Diagnosis">
                        <i class="fa-solid fa-file"></i> التشخيصات
                    </a>
                </li>
                <li data-aos="fade-down">
                    <form action="{{ route('logout.user') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" style="background: none; border: none; padding: 0; color: inherit; cursor: pointer;">
                            <i class="fa-solid fa-right-from-bracket"></i> تسجيل الخروج
                        </button>
                    </form>
                </li>
            </ul>
        </div>

        <!-- .main-navigation -->
        <div class="social-icons mt-0">
            <ul>
                <li>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </li>
            </ul>
        </div>
        <!-- .social-icons -->
    </div>
    <!-- .sidebar-menu -->

    <div class="banner-bg" id="top">
        <div class="welcome-text p-relative">
            <h1 data-aos="zoom-in">مرحباً بك فى دكتور تك</h1>
            <h2 class="display-3 text-white " data-aos="zoom-in-up">
                احصل على أفضل جودة علاجية
            </h2>
            <a href="{{ route('home') }}" class="h4 text-white" data-aos="zoom-in-right">الرئسية</a>
            <i class="far fa-circle text-white px-2" data-aos="zoom-in-down"></i>
            <a href="" class="h4 text-white" data-aos="zoom-in-left"> المريض</a>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="fluid-container">
            <div class="content-wrapper ">
                <!-- ABOUT -->
                <div class="page-section" id="about">
                    <div class="row">
                        <div class="section-title mb-4">
                            <h2 class="" data-aos="zoom-out-down">بيانات شخصية :-</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="col-lg-4" data-aos="zoom-in-right">
                                <img src="{{asset('storage/' .(Auth::guard('web')->user()->image))}}" style="
                                                       width: 200px;
                                                       height: 200px;
                                                  " class="img-fluid" alt="" />
                            </div>
                            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="zoom-in-left">
                                <h3>{{Auth::guard('web')->user()->name}}</h3>

                                <br />
                                <br />
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-lg-5">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-angles-left"></i>
                                                <strong>العمر :
                                                </strong>
                                                <span>{{Auth::guard('web')->user()->age}}</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-angles-left"></i>
                                                <strong>النوع
                                                    :</strong>
                                                <span>{{Auth::guard('web')->user()->gender}}</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-angles-left"></i>
                                                <strong>فصيلة
                                                    الدم
                                                    :</strong>
                                                <span>{{Auth::guard('web')->user()->bloodType}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-angles-left"></i>
                                                <strong>
                                                    تاريخ
                                                    الميلاد
                                                    :</strong>
                                                <span>
                                                    {{Auth::guard('web')->user()->birthDate}}
                                                </span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-angles-left"></i>
                                                <strong>البريد
                                                    الإلكتروني
                                                    :</strong>
                                                <span>{{Auth::guard('web')->user()->email}}</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-angles-left"></i>
                                                <strong>الهاتف
                                                    :</strong>
                                                <span>{{Auth::guard('web')->user()->mobileNumber}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <!-- #about -->
                </div>

                <!--bookings -->
                <?php

                $bookings = App\Models\Booking::where('user_id', Auth()->user()->id)->get();

                ?>
                @if(Auth::guard('web')->check())
                @if($bookings!=null)
                @foreach($bookings as $value)

                @php
                $doctor = App\Models\doctor::find($value->doctor_id);
                @endphp
                <div class="page-section" id="Diagnosis">
                    <div class="row">
                        <div class="section-title mb-4">
                            <h2 class="" data-aos="zoom-out-down">الحجز</h2>
                        </div>
                        <ul>
                            <li>
                                <i class="fa-solid fa-angles-left"></i>
                                <strong>مع دكتور
                                    :</strong>
                                <span>{{$doctor->name}}</span>
                            </li>
                        </ul>

                    </div>
                    <div class="row">
                        <div class="col-12 from-group fromgroup">
                            <div class="form-group form" data-aos="flip-down">

                            </div>
                            <div class="col-12 mt-3 tasks" data-aos="zoom-in">
                            </div>
                        </div>
                    </div>
                    <hr />
                </div>
                @endforeach
                @endif
                @endif
                <!-- Diagnosis -->
                <div class="page-section" id="Diagnosis">
                    <div class="row">
                        <div class="section-title mb-4">
                            <h2 class="" data-aos="zoom-out-down">التشخيصات :-</h2>
                        </div>
                    </div>
                    @if($diagnoses->isEmpty())
                    <h1> لا يوجد بيانات لعرضها </h1>
                    @else
                    <div class="row">
                        <div class="col-12 from-group fromgroup">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th scope="col">التشخيصات</th>
                                        <th scope="col">العلاج</th>
                                        <th scope="col">التاريخ</th>
                                        <th scope="col">الدكتور</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($diagnoses as $diagnosis)
                                    <tr>
                                        <th scope="row">{{$diagnosis->diagnostics}}</th>
                                        <td>{{$diagnosis->treatment}}</td>
                                        <td>
                                            @if($diagnosis->created_at)
                                            {{ $diagnosis->created_at->format('Y-m-d') }}
                                            @else
                                            N/A
                                            @endif
                                        </td>
                                        <td>{{$diagnosis->doctor_name}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="col-12 mt-3 tasks" data-aos="zoom-in">
                            </div>
                        </div>
                    </div>
                    @endif
                    <hr />
                    <div class="row  " id="footer">
                        <div class="col-md-12 text-center">
                            <p class="copyright-text">
                                جميع الحقوق محفوظة &copy; دكتور تك ٢٠٢٤
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- JavaScript Libries -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('assets/lib/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('assets/lib/twentytwenty/jquery.twentytwenty.js')}}"></script>
    <!-- Vendor Jquery -->
    <script src="{{asset('assets/Profile/js/vendor/jquery-1.10.2.min.js')}}"></script>
    <!-- Plugins -->
    <script src="{{asset('assets/Profile/js/min/plugins.min.js')}}"></script>
    <!-- AOS JavaScript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <Script>
        AOS.init({
            duration: 1500
        });
    </Script>
    <!-- JavaScript -->
    <script src="{{asset('assets/Profile/js/min/main.min.js')}}"></script>

    <script src="{{asset('assets/Profile/js/script.js')}}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alertBox = document.getElementById('alert-box');
            const closeBtn = document.getElementById('btn');

            if (alertBox) {
                setTimeout(function() {
                    alertBox.style.display = 'none';
                }, 5000);
            }

            if (closeBtn) {
                closeBtn.addEventListener('click', function() {
                    if (alertBox) {
                        alertBox.style.display = 'none';
                    }
                });
            }
        });
    </script>

</body>

</html>