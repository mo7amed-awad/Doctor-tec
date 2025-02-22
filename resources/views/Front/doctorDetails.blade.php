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
    <!-- AOS Libraiy -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

    <style>
        body {
            position: relative;
        }

        .box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #eee;
            padding: 10px 20px;
            border-radius: 10px;
            border: 2px solid #ddd;
            margin-bottom: 10px;
        }

        .img-doc {
            width: 100px;
            height: 100px;
            border: 3px solid white;
            border-radius: 50%;
            margin-top: -55px;
        }

        .info {
            flex-basis: 1;
            width: 100%;
            margin: 0 20px;
            padding: 10px;
        }

        .info span:nth-child(1) {
            color: gray;
            font-size: 15px;
            padding-left: 10px;
        }

        .info .name {
            color: #06A3DA;
            font-size: 22px;
            font-weight: 300;
        }

        @media(max-width:767px) {
            .box {
                flex-direction: column;
                margin-bottom: 20px;
            }

            .img-doc {
                margin-top: -25px;
            }

            .info .name {
                font-size: 18px;

            }


        }

        .popup {
            width: 250px;
            background-color: #fff;
            border-radius: 6px;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.1);
            z-index: 1000;
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
            border: 2px solid #ddd;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
        }

        .opon-popup {
            visibility: visible;
            top: 70%;
            transform: translate(-50%, -50%) scale(1);
        }

        .popup img {
            width: 100px;
            height: 100px;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .popup h2 {
            font-size: 22px;
            font-weight: 400;
            margin: 20px 0 0 0;
        }

        .popup button {
            width: 100%;
            margin-top: 50px;
            padding: 10px 0;
            background-color: #41ad49;
            color: #fff;
            border: 0;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
        }

        /*popup Two*/
        .popuptwo {
            width: 250px;
            background-color: #fff;
            border-radius: 6px;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.1);
            z-index: 10000;
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
            border: 2px solid #ddd;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
        }

        .opon-popup {
            visibility: visible;
            top: 70%;
            transform: translate(-50%, -50%) scale(1);
        }

        .popuptwo img {
            width: 100px;
            height: 100px;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .popuptwo h2 {
            font-size: 22px;
            font-weight: 400;
            margin: 20px 0 0 0;
        }

        .popuptwo button {
            width: 100%;
            margin-top: 50px;
            padding: 10px 0;
            background-color: #ec1d25;
            color: #fff;
            border: 0;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <!-- Start Header -->
    <header>
        <div class="container">
            <img class="logo" src="{{asset('assets/img/logo.jpg')}}" alt="">
        </div>
    </header>
    <!-- End Header -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5 ">
        @if(session()->has('succed'))

        <div class="ui-alert ui-alert--success alerting" id="alert-box">
            <div class="fa-solid fa-circle-info"></div>
            <div class="ui-alert-inner">
                <h3 style="color: white;">{{ session('succed') }}</h3>
            </div>
            <i class="fa-regular fa-circle-xmark close-btn" id="btn"></i>
        </div>

        @endif
        <div class="container-fluid bg-primary py-5 hero-header mb-5 ">
            <div class="row py-3">
                <div class="col-12 text-center pt-5">
                    <h1 class="display-3 text-white" data-aos="zoom-in-up">حجز</h1>
                    <a href="../index.html" class="h4 text-white" data-aos="zoom-in-right">الرئسية</a>
                    <i class="far fa-circle text-white px-2" data-aos="zoom-in-down"></i>
                    <a href="#card-container" class="h4 text-white" data-aos="zoom-in-right">حجز</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start Resave Section -->
    <div class="container-fluid py-5  p-relative sec  " data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 p-relative">
                <div class="section-title mb-4">
                    <h2 class="position-relative d-inline-block text-primary text-uppercase">احجز الأن</h2>
                </div>
                <div class="col-lg-7 " id="card-container" data-aos="zoom-out-right">
                    <div class="card box ">
                        <img class="img-doc" src="{{asset('storage/' .$doctor->image)}}" alt="Card image cap">
                        <div class="info">
                            <span>دكتور/</span>
                            <span class="name">{{$doctor->name}}</span>
                            <p class="information">{{$doctor->brief}}</p>
                            <span>التخصص/</span>
                            <span class="name">{{$doctor->specialization}}</span>
                            <br>
                            <span>{{$doctor->city}}/</span>
                            <span class="name">{{$doctor->address}}</span>
                            <br>
                            <span>المواعيد/</span>
                            <span class="name">{{$doctor->appoinment}}</span>
                            <br>
                            <span>رقم التليفون/</span>
                            <span class="name">{{$doctor->mobileNumber}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-center justify-content-center flex-column" data-aos="zoom-out-left">
                    <h1 class="text-center text-white bg-primary pt-2 pb-2" style="border-radius: 10px 10px 0 0;">ادخل
                        بيانات الحجز</h1>
                    <div id="form">
                        <form action="{{ route('doctor.booking')}}" method="post">
                            <input type="hidden" name="doctor" value="{{ $doctor->id }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-12 mb-3">
                                    <label for="username" style="font-size: 17px; color: #091E3E;">الاسم <span class="text-danger"> * </span></label>
                                    <input type="text" class="form-control" id="username" name="name" placeholder="الإسم بالكامل">
                                    <div class="invalid-feedback">
                                        الإسم غير صحيح
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phoneNum" style="font-size: 17px; color: #091E3E;">رقم الموبايل <span class="text-danger"> * </span></label>
                                    <input type="text" class="form-control" id="phoneNum" name="phoneNumber" placeholder="رقم الموبايل" aria-describedby="phoneNum">
                                    <div class="invalid-feedback">
                                        رقم الموبايل غير صحيح
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="useremail" style="font-size: 17px; color: #091E3E;">البريد الالكتروني <span class="text-danger"> * </span></label>
                                <input type="email" class="form-control" id="useremail" name="email" placeholder="example@domin.com">
                                <div class="invalid-feedback">
                                    البريد الالكتروني غير صحيح
                                </div>
                            </div>

                            <div class=" d-flex align-items-center justify-content-center">
                                <button class="btn btn-primary text-white" type="submit" id="submit"> احجز الأن</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Resave Section -->
    <!-- Start Footer  -->
    <footer class="footer-page">
        <div class="row  " id="footer">
            <div class="col-md-12 text-center">
                <p class="copyright-text">
                    جميع الحقوق محفوظة &copy; دكتور تك ٢٠٢٤
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->
    <!-- Popup -->


    <!-- <div class="popup" id="popup">
        <img src="img/right.png" alt="">
        <h2>شكرًا لك</h2>
        <button onclick="closePopup()">إنهاء</button>
    </div> -->

    <!-- Popup -->

    <!-- Popuptwo -->
    <!-- <div class="popuptwo" id="popuptwo">
        <img src="img/wrong.jpeg" alt="" />
        <h2>ادخل بيانات الحجز</h2>
        <button onclick="closePopupTwo()">إنهاء</button>
    </div> -->
    <!-- Popuptwo -->

    <!-- To Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>



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

    <!-- AOS JavaScript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        let carddoctor = document.getElementById("card-container");

        fetch("  http://localhost:3000/doctor?id=1")
            .then((res) => res.json())
            .then((json) => {
                json.map((data) => {
                    console.log(data.id);
                    carddoctor.append(
                        card_fun(
                            data.id,
                            data.name,
                            data.info,
                            data.title,
                            data.profile,

                        )
                    );
                });
            });;

        function card_fun(
            id,
            name,
            info,
            title,
            profile,

        ) {
            let card = document.createElement("div");
            card.innerHTML = ` 
        <div class="card box " >
                        <img class="img-doc" src="${profile}"" alt="Card image cap">
                       <div class="info">
                        <span>دكتور /</span>
                        <span class="name"> ${name} </span>
                        <p class="information">${info}</p>
                       </div>
                    </div>
    `;
            return card;
        }



        //Check Modal Code And Open Popup Message
        let name = document.querySelector("#name");
        let phoneNumber = document.querySelector("#phoneNumber");
        let email = document.querySelector("#email");

        let submit = document.getElementById("submit");
        submit.onclick = function() {
            if (username.value !== "" & phoneNum.value !== "" & useremail.value !== "") {
                openPopup();
                username.value = "";
                phoneNum.value = "";
                useremail.value = "";
            } else {
                openPopupTwo();
            }
        };




        let popup = document.getElementById("popup");

        function openPopup() {
            popup.classList.add('opon-popup');
        }

        function closePopup() {
            popup.classList.remove('opon-popup');
        }
        let popupTwo = document.getElementById("popuptwo");

        function openPopupTwo() {
            popuptwo.classList.add('opon-popup');
        }

        function closePopupTwo() {
            popuptwo.classList.remove('opon-popup');
        }



        AOS.init({
            duration: 1500
        });
    </script>

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