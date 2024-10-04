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
												<th>البريد الإلكتروني</th>
												<th>العمر</th>
												<th>فصيلة الدم</th>
												<th>الصورة الشخصية</th>x
												<th>النوع</th>
											
										</thead>
										<tbody>
                                            @forelse ($users as $user)
											<tr>
												<td>{{$user->name}}</td>
												<td>{{$user->mobileNumber}}</td>
												<td>{{$user->email}}</td>
												<td>{{$user->age}}</td>
												<td>{{$user->bloodType}}</td>
									     		<td><img src="{{asset('storage/' .$user->image)}}" alt="" height="50"></td>
												<td>{{$user->gender}}</td>
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