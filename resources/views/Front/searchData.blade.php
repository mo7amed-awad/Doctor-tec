@extends('Front.layouts')
@section('content')
    <!-- Start Header -->
    <header>
        <div class="container">
            <img class="logo" src="{{asset('assets/img/logo.jpg')}}" alt="">
        </div>
    </header>
    <!-- End Header -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5 ">
        <div class="row py-3">
            <div class="col-12 text-center pt-5">
                <h1 class="display-3 text-white " data-aos="zoom-in-up">الأطباء</h1>
                <a href="../index.html" class="h4 text-white" data-aos="zoom-in-right">الرئسية</a>
                <i class="far fa-circle text-white px-2" data-aos="zoom-in-down"></i>
                <a href="" class="h4 text-white" data-aos="zoom-in-right">الأطباء</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start Doctor Card  -->
    <div class="container mt-2 pb-2 m-auto ">
        <div class="section-title mb-4">
            <h2 class="position-relative d-inline-block text-primary text-uppercase " data-aos="zoom-out-down" style="font-size: 25px;">أطباؤنا</h2>
            <h1 class="display-5 mb-0" data-aos="zoom-out-down"> تعرَّف على أطبائنا المعتمدين وذوي الخبرة</h1>
        </div>
        {{-- <form action="" data-aos="zoom-out-up">
            <input class="form-control mb-10" type="text" placeholder="ابحت عن التخصص" id="filter-input">
        </form> --}}
    </div>
    <!--End  Doctor Card  -->
      <!-- Start quality -->
      <div class="quality container-fluid py-5 wow fadeInUp sec " data-wow-delay="0.1s" id="quality">
        <div class="container">
        <div class="container-box col-lg-12" id="card-container" data-aos="zoom-out-down">
            @forelse ($doctors as $value)
                <div class=" box wow zoomIn card text-white bg-info mb-3 text-center"  style="max-width: 18rem;">
                    <div class="card-header">{{ $value->name }}</div>
                    <div class="card-body">
                    <h5 class="card-title"><span><i class="fa-solid fa-user-doctor m-1"></i>
                    </span>{{ $value->specialization }}</h5>
                    <h6 class="card-title">{{ $value->brief }}</h6>
                    <br>
                    <a class="card-header" href="{{route('doctor.doctorDetails', ['id'=>$value->id])}}">تفاصيل اكثر</a>
                    </div>
                </div>
                @empty
                <tr>
                <h2>لا يوجد بيانات لعرضها</h2>
                </tr>
            @endforelse
    </div>
    </div>
</div>

    <!-- End quality -->

    <!-- Start Footer  -->
     <footer class="footer-page w-100">
        <div class="row" id="footer">
            <div class="col-md-12 text-center">
                <p class="copyright-text pb-3 text-white">
                    جميع الحقوق محفوظة &copy; دكتور تك ٢٠٢٤
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->
     <!-- To Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
@stop
