<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Profile</title>
    <meta name="description" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />


     <!-- Favicon -->
     <link href="{{asset('assets/img/favicon.ico')}}" rel="icon" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300&display=swap"
         rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300&display=swap"
        rel="stylesheet" />

    <!-- Normalize -->
    <link rel="stylesheet" href="{{asset('assets/Profile/css/normalize.css')}}" />
    <!-- Font Assume -->
    <link rel="stylesheet" href="{{asset('assets/Profile/css/fontAssume.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/Profile/css/font-awesome.css')}}" />
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

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
    <script src="https://cdn.tailwindcss.com"></script>
    <style>

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
        .info .information,
        .info .title,
        .info .price,
        .info .email{
            position: relative;
        }
        .info .information::before,
        .info .title::before,
        .info .price::after,
        .info .email::after {
             font-family: "Font Awesome 5 Free";
             font-weight: 900;
             font-size: 11px;
             margin-left: auto;
             color: #06A3DA;
             padding-left: 10px;
        }
        .info .information::before{
             content: "\f0f1";
        }
        .info .title::before{
             content: "\f3c5";
        }
        .info .price::after{
             content: "\f53a";
        }
        .info .email::after{
             content: "\f0e0";
        }

        .appoinment {
            flex-basis: 1;
            width: 100%;
        }

        .appoinment table {
            width: 100%;
            text-align: center;
        }

        .appoinment table thead {
            background-color: #06A3DA;
            color: white;
        }

        @media(max-width:767px) {
            .box {
                flex-direction: column;
                margin-bottom: 20px;
            }
            .img-doc{
                margin-top: -25px;
            }
            .info .name {
                font-size: 18px;

            }

            .appoinment table thead {
                font-weight: normal;
            }
        }
    </style>
</head>

<body>

    @yield('content')

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
            AOS.init({ duration: 1500 });
        </Script>
        <!-- JavaScript -->
        <script src="{{asset('assets/Profile/js/min/main.min.js')}}"></script>

        <script src="{{asset('assets/Profile/js/script.js')}}"></script>



</body>

</html>
