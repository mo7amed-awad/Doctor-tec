@extends('Dashboard.Admin.empty')
@section('shows')

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>الاسم</th>
												<th>رقم التليفون</th>
												<th>العمر</th>
												<th>التخصص</th>
												<th>الصورة الشخصية</th>
												<th>صورة الشهادة</th>
												<th>الحالة</th>
												<th>عرض الملف الشخصي</th>
											</tr>
										</thead>
										<tbody>
                                            @forelse ($acceptable_doctors as $doctor)
											<tr>
												<td>{{$doctor->name}}</td>
												<td>{{$doctor->mobileNumber}}</td>
												<td>{{$doctor->age}}</td>
												<td>{{$doctor->specialization}}</td>
												<td><img src="{{asset('storage/' .$doctor->image)}}" alt="" height="50"></td>
												<td><img src="{{asset('storage/' .$doctor->certification)}}" alt="" height="50"></td>
												<td>{{$doctor->status}}</td>
												<td>
													<a href="{{route('show_doctor',$doctor->id)}}" class="btn btn-sm btn-outline-success">عرض</a>
												</td>
											</tr>
                                            @empty
                                            <tr>
                                                <td colspan="7">No categories defined</td>
                                            </tr>
											@endforelse
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->




				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>

@endsection