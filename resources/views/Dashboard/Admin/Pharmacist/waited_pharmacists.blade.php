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
												<th>الصورة الشخصية</th>
												<th>صورة الشهادة</th>
												<th>الحالة</th>
												<th>عرض الملف الشخصي</th>
											</tr>
										</thead>
										<tbody>
                                            @forelse ($waited_pharmacists as $pharmacist)
											<tr>
												<td>{{$pharmacist->name}}</td>
												<td>{{$pharmacist->mobileNumber}}</td>
												<td>{{$pharmacist->age}}</td>
												<td><img src="{{asset('storage/' .$pharmacist->image)}}" alt="" height="50"></td>
												<td><img src="{{asset('storage/' .$pharmacist->certification)}}" alt="" height="50"></td>
												<td>{{$pharmacist->status}}</td>
												<td>
													<a href="{{route('show_pharmacist',$pharmacist->id)}}" class="btn btn-sm btn-outline-success">عرض</a>
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