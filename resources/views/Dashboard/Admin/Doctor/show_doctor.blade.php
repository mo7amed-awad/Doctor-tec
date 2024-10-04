@extends('Dashboard.Admin.empty')
@section('shows')
<br>
<div class="table-responsive">
    <table class="table align-middle">
      <thead>
        <tr>
            <div>
                <h3>
                <h4>بيانات الدكتور</h4>
                </h3>
            </div>
        </tr>
      </thead>
      <tbody>
        
        <tr>
            <td>
                الاسم
            </td>
            <td>
             {{$doctor->name}}
            </td>
        </tr>
        <tr>
            <td>البريد الألكتروني</td>
            <td>{{$doctor->email}}</td>
            
        </tr>
        <tr>
            <td>رقم التليفون</td>
            <td>{{$doctor->mobileNumber}}</td>
            
        </tr>
        <tr>
            <td>تاريخ الميلاد</td>
            <td>{{$doctor->birthDate}}</td>
            
        </tr>
        <tr>
            <td>العمر</td>
            <td>{{$doctor->age}}</td>
            
        </tr>
        <tr>
            <td>التخصص</td>
            <td>{{$doctor->specialization}}</td>
            
        </tr>
        <tr>
            <td>المحافظة</td>
            <td>{{$doctor->province}}</td>
            
        </tr>
        <tr>
            <td>المدينة</td>
            <td>{{$doctor->city}}</td>
            
        </tr>
        <tr>
            <td>الصورة الشخصية</td>
            <td><img src="{{asset('storage/' .$doctor->image)}}" alt="" height="200"></td>
        </tr>
        <tr>
            <td>صورة الشهادة</td>
            <td><img src="{{asset('storage/' .$doctor->certification)}}" alt="" height="200"></td>
        </tr>
        <tr>
            <td>الحالة</td>
            <td>{{$doctor->status}}</td>
            
        </tr>
        @if($doctor->status=='notyet')
        <tr>
            <td>قبول</td>
            <td>
                <form action="{{route('acceptance_doctor',$doctor->id)}} " method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-success">
                        قبول
                    </button>
                </form>
            </td>
        </tr>
        <tr>
            <td>رفض</td>
            <td>
                <form action="{{route('refues_doctor',$doctor->id)}} " method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-success">
                        رفض
                    </button>
                </form>
            </td>
        </tr>
        @endif

      </tbody>
    </table>
  </div>
@endsection