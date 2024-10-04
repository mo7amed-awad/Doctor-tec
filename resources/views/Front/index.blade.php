<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8" />
    <title>Doctor Tec</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="{{asset('assets/img/favicon.ico')}}" rel="icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/twentytwenty/twentytwenty.css" rel="stylesheet')}}" />
    <link href="{{asset('assets/css/fontAssume.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- BootsStrap Cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- AOS Libraiy -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
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
</head>

<body>


    <!-- Start Header -->
    <header>
        <div class="container">
            <div class=" head">
                <img class="logo" src="{{asset('assets/img/logo.jpg')}}" alt="">
                <nav class="navbar">
                    <a href="#home" class="active"> <i class="fa-solid fa-house"></i>الرئسية </a>
                    <a href="#ask"> <i class="fa-solid fa-handshake-angle"></i> إسأل الأن </a>
                    <a href="#quality"><i class="fa-solid fa-hand-holding-heart"></i> مُميزاتنا </a>
                    <a href="#resive" id="last"><i class="fa-regular fa-pen-to-square"></i> احجز الأن</a>
                    <span id="span"><i class="fa-solid fa-arrow-right-to-bracket"></i> سجل الأن </span>
                    <div class="drop-down">

                        <a href="{{route('login')}}" class="register"><i class="fa-solid fa-caret-left"></i> تسجيل دخول </a>
                        <a href="{{route('register')}}" class=" register"><i class="fa-solid fa-caret-left"></i>انضم الينا</a>

                    </div>
                </nav>
                <div class="icons">
                    <i class="fas fa-bars" id="menue-bars"></i>

                    @php
                    $isAuthenticated = Auth::guard('web')->check() ||
                    (Auth::guard('doctor')->check() && optional(Auth::guard('doctor')->user())->status == 'acceptable') ||
                    (Auth::guard('pharmacist')->check() && optional(Auth::guard('pharmacist')->user())->status == 'acceptable');
                    @endphp

                    @if($isAuthenticated)
                    <div class="buttons" id="btns">
                        @if(Auth::guard('web')->check())
                        <a href="{{ route('patiant') }}">
                            {{ Auth::guard('web')->user()->name }}
                        </a>
                        @elseif(Auth::guard('pharmacist')->check())
                        <a href="{{ route('pharmacist.page') }}">
                            {{ Auth::guard('pharmacist')->user()->name }}
                        </a>
                        @elseif(Auth::guard('doctor')->check())
                        <a href="{{ route('doctor.page') }}">
                            {{ Auth::guard('doctor')->user()->name }}
                        </a>
                        @endif
                    </div>
                    @else
                    <div class="buttons" id="btns">
                        <a href="{{ route('login') }}" class="register"> تسجيل دخول </a>
                        <a href="{{ route('register') }}" class="register"> انضم الينا </a>
                    </div>
                    @endif


                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Carousel Start -->

    <div class="landing sec" id="home">
        @if(session()->has('succed'))

        <div class="ui-alert ui-alert--success alerting" id="alert-box">
            <div class="fa-solid fa-circle-info"></div>
            <div class="ui-alert-inner">
                <h3 style="color: white;">{{ session('succed') }}</h3>
            </div>
            <i class="fa-regular fa-circle-xmark close-btn" id="btn"></i>
        </div>
        @endif
        <div class="overlay"></div>

        <div class="text">
            <div class="content">

                <h2 class="wow fadeInUp" data-wow-delay="3.5s">
                    دكتور تك

                </h2>
                <p class="wow fadeInUp" data-wow-delay="3.5s">
                    حافظ على صحتك و احصل على أفضل جودة علاجية ...
                </p>
                <a href="#book">سجل الأن</a>
            </div>
        </div>
    </div>

    <!-- Carousel End -->


    <!-- Start Ask Section -->
    <div class="container-fluid py-5 wow fadeInUp sec bg-sec" data-wow-delay="0.1s" id="ask">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h2 class="position-relative d-inline-block text-primary text-uppercase">إسأل الأن</h2>
                        <h3 class="display-5 mb-0" style="color: #091E3E; font-size: 22px;">حلول جديدة لرعاية أفضل ليك
                        </h3>
                    </div>
                    <h4 class="text-body fst-italic mb-4">لديك سؤال طبي؟</h4>
                    <p class="mb-4">ارسل سؤالك الطبى واحصل على اجابة من دكتور متخصص</p>

                    <a href="#" class="go py-3 px-5 mt-4">اسال الان</a>

                    <!-- <button class="button py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">إسأل الأن ..</button> -->
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('assets/img/Doctors.jpeg')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Ask Section -->

    <!-- Start quality -->
    <div class="quality container-fluid py-5 wow fadeInUp sec " data-wow-delay="0.1s" id="quality">
        <div class="container">
            <div class="section-title mb-5">
                <h2 class="position-relative d-inline-block text-primary text-uppercase">مُميزاتنا</h2>
                <h3 class="display-5 mb-0" style="color: #091E3E; font-size: 22px;"> استمتع بالكثير من المميزات</h3>
            </div>
            <div class="container-box">
                <div class="box wow zoomIn" data-wow-delay="0.6s">
                    <i class="fa-solid fa-handshake  fa-4x"></i>
                    <h3>كل احتياجاتك على دكتور تك</h3>
                    <p>ابحث و احجز كشف مع دكتور في عيادة، مستشفى </p>
                    <div class="info">

                    </div>
                </div>
                <div class="box wow zoomIn" data-wow-delay="0.9s">
                    <i class="fa-solid fa-user-doctor fa-4x"></i>
                    <h3>تقييمات حقيقية من المرضى</h3>
                    <p>تقييمات الدكاترة من مرضى حجزوا على دكتور تك و زاروا الدكتور.</p>
                    <div class="info">

                    </div>
                </div>
                <div class="box wow zoomIn" data-wow-delay="0.9s">
                    <i class="fas fa-calendar fa-4x"></i>
                    <h3>حجزك سيتم بالتأكيد مع الدكتور</h3>
                    <p>حجزك مؤكد بمجرد اختيارك من المواعيد المتاحة للدكتور. </p>
                    <div class="info">

                    </div>
                </div>
                <div class="box wow zoomIn" data-wow-delay="0.9s">
                    <i class="fa-solid fa-shield fa-4x"></i>
                    <h3>احجز مجاناً، و ادفع في العيادة</h3>
                    <p>سعر الكشف على دكتور تك نفس سعر الكشف في العيادة.</p>
                    <div class="info">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End quality -->
    <!-- Start Resive -->
    <div class=" Resive container-fluid  py-5  wow fadeInUp bg-sec sec" data-wow-delay="0.1s" id="resive">
        <div class="container">
            <div class="row g-5">
                <div class="section-title mb-1">
                    <h2 class="position-relative d-inline-block text-primary ">احجز الأن</h2>
                    <h3 class="display-5 mb-0"></h3>
                </div>
                <div class="col-lg-6">
                    <h4 class="text-body fst-italic mb-4"> إختار التخصص وإحجز كشف دكتور </h4>
                    <ul>
                        <li class="wow zoomIn" data-wow-delay="0.3s"><a href="#">دكتور جلدية</a><a href="#">دكتور
                                أسنان</a><a href="#">دكتور نفسى</a><a href="#">دكتور أطفال و حديثى الولادة</a></li>
                        <li class="wow zoomIn" data-wow-delay="0.6s"><a href="#">دكتور مخ و اعصاب</a><a href="#">دكتور
                                عظام</a><a href="#">دكتور أنف وأذن وحنجرة</a></li>
                        <li class="wow zoomIn" data-wow-delay="0.9s"><a href="#">دكتور قلب وأوعية دموية</a><a href="#">دكتور عيون</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h4 class="text-body fst-italic mb-4"> إختار المحافظة وإحجز كشف دكتور </h4>
                    <ul>
                        <li class="wow zoomIn" data-wow-delay="1.2s"><a href="#">القاهرة</a><a href="#">الإسكندرية</a><a href="#">الدقهلية</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Resive -->
    <!-- Start Book  -->
    <div class="book container-fluid  wow fadeInUp sec " data-wow-delay="0.1s" id="book">
        <div class="container">
            <div class="section-title mb-5">
                <h2 class="position-relative d-inline-block text-primary text-uppercase">سجل الأن</h2>
                <h3 class="display-5 mb-0" style="color: #091E3E; font-size: 22px;"> بختيار المحافظة والمدينة</h3>
            </div>
            <div class="row">
                <form class="d-flex align-items-center  flex-column  bg-sec" action="{{ route('doctor.search') }}" method="POST" id="reseve">
                    @csrf
                    <select class="form-control govern" name="province">
                        <option value="">فى محافظة</option>
                        <!-- @foreach($uniqueProvinces as $province)
                        <option value="{{$province}}">{{$province}}</option>
                        @endforeach -->
                        <option value="القاهرة">القاهرة</option>
                        <option value="الأسكندرية">الأسكندرية</option>
                        <option value="الجيزة">الجيزة</option>
                        <option value="دمياط">دمياط</option>
                        <option value="الغربية">الغربية</option>
                        <option value="الدقهلية">الدقهلية</option>
                        <option value="الشرقية">الشرقية</option>
                        <option value="المنوفية">المنوفية</option>
                        <option value="الفيوم">الفيوم</option>
                    </select>
                    <select class="form-control" name="city" id="city">
                        <option value="">اختر المدينة</option>
                        <option value="المنصورة">المنصورة</option>
                        <option value="أجا">أجا</option>
                        <option value="بلقاس">بلقاس</option>
                        <option value="دكرنس">دكرنس</option>
                        <option value="شربين">شربين</option>
                        <option value="السنبلاوين">السنبلاوين</option>
                        <option value="ميت غمر">ميت غمر</option>
                    </select>
                    <select class="form-control" name="specialization" id="specialization">
                        <option value="">اختر التخصص</option>
                        <!-- @foreach($uniqueSpecializations as $specialization)
                        <option value="{{$specialization}}">{{$specialization}}</option>
                        @endforeach -->
                        <option value="باطنة">باطنة</option>
                        <option value="كلى">كلى</option>
                        <option value="جرحة عامة">جراحة عامة</option>
                        <option value="أسنان">أسنان</option>
                        <option value="عظام">عظام</option>
                        <option value="اطفال وحديثي الولادة">اطفال وحديثي الولادة</option>
                        <option value="جلدية">جلدية</option>
                        <option value="عيون">عيون</option>
                        <option value="مسالك بولية">مسالك بولية</option>


                    </select>
                    <button class="go" tabindex="4">سجل الان </button>
                </form>
            </div>
        </div>
    </div>
    <!--  End Book  -->
    <!-- Footer Top -->
    <footer class="footer p-5">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-about">
                            <div class="">
                                <img src="{{asset('assets/img/logo-footer.jpg')}}" alt="" class="logo-footer">
                            </div>
                            <div class="footer-about-content">
                                <ul class="social">
                                    <li>
                                        <a href="https://www.facebook.com/" class="facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/" class="twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" class="instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://google.com/" class="google">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">ابحث عن طريق</h2>
                            <ul>
                                <li><a href="#home">الرئسية </a></li>
                                <li><a href="#ask"> إسأل الأن</a></li>
                                <li><a href="#quality">مُميزاتنا </a></li>
                                <li><a href="#resive"> احجز الأن</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">هل انت دكتور ؟</h2>
                            <ul>
                                <li>
                                    <a href="login/reg.html"> انضم الينا كطبيب</a>
                                </li>
                                <li>
                                    <a href="login/reg.html"> انضم الينا كصيدلى</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-contact">
                            <h2 class="footer-title"> انضم الينا الأن</h2>
                            <div class="footer-widget footer-menu">
                                <ul>
                                    <li><a href="login/index.html"> تسجيل الدخول </a></li>
                                    <li><a href="login/reg.html"> مستخدم جديد</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="footer-bottom  text-center  ">
                        <hr class="split">
                        <p class="copyright-text">جميع الحقوق محفوظة &copy; دكتور تك ٢٠٢٤ </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- To Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- Start loader Part -->
    <div class="loader-container">
        <img src="{{asset('assets/img/loader.gif')}}" alt="">
    </div>
    <!-- End loader Part -->


    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

    <!-- AOS JavaScript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <Script>
        AOS.init({
            duration: 1500
        });
    </Script>
    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
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