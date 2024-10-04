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
             {{$pharmacist->name}}
            </td>
        </tr>
        <tr>
            <td>البريد الألكتروني</td>
            <td>{{$pharmacist->email}}</td>
            
        </tr>
        <tr>
            <td>رقم التليفون</td>
            <td>{{$pharmacist->mobileNumber}}</td>
            
        </tr>
        <tr>
            <td>تاريخ الميلاد</td>
            <td>{{$pharmacist->birthDate}}</td>
            
        </tr>
        <tr>
            <td>العمر</td>
            <td>{{$pharmacist->age}}</td>
            
        </tr>
        <tr>
            <td>المحافظة</td>
            <td>{{$pharmacist->province}}</td>
            
        </tr>
        <tr>
            <td>المدينة</td>
            <td>{{$pharmacist->city}}</td>
            
        </tr>
        <tr>
            <td>الصورة الشخصية</td>
            <td><img src="{{asset('storage/' .$pharmacist->image)}}" alt="" height="200"></td>
        </tr>
        <tr>
            <td>صورة الشهادة</td>
            <td><img src="{{asset('storage/' .$pharmacist->certification)}}" alt="" height="200"></td>
        </tr>
        <tr>
            <td>الحالة</td>
            <td>{{$pharmacist->status}}</td>
            
        </tr>
        @if($pharmacist->status=='notyet')
        <tr>
            <td>قبول</td>
            <td>
                <form action="{{route('acceptance_pharmacist',$pharmacist->id)}} " method="POST">
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
                <form action="{{route('refues_pharmacist',$pharmacist->id)}} " method="POST">
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