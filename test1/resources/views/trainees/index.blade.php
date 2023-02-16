@extends('layout')
@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
   
            <!-- row -->
            <div class="container-fluid">
				    
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>كل المتدربين</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">المتدربين</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">كل المتدربين</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">قائمة كل المتدربين بالمركز  </h4>
										<a href="{{url('/dashboard/allstudents/create')}}" class="btn btn-primary">إضافة جديد+</a>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example3" class="display" style="min-width: 845px">
												<thead>
													<tr>
														<th>رقم المتدرب</th>
														<th>الاسم</th>
														<th>المستوى التعليمي</th>
														<th>رقم الهاتف</th>
														<th>البريد الالكتروني</th>
														<th>تاريخ القبول</th>
														<th>تعديل</th>
														<th>حذف</th>
													</tr>
												</thead>
												<tbody>
													<?php $i=0 ?>
													@foreach ($test as $index)
													<?php $i++ ?>	
													<tr>
														<td><strong>{{$i}}</strong></td>
														<td><a href="{{route('allstudents.show',['allstudent'=>$index['id']])}}"> {{$index['first_name']}}</a></td>
														<td>{{$index['edlevel']}}</td>
														<td><strong>{{$index['phone']}}</strong></td>
														<td>{{$index['email']}}</td>
                                                        <td>{{$index['created_at']}}</td>
														<td>
															<a href="{{route('allstudents.edit',$index['id'])}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
														</td>
														<td>
															<form action="{{route('allstudents.destroy',['allstudent'=>$index['id']])}}" method="POST" >
																@csrf
																@method('DELETE')
																<input type="submit" value="حذف" class="btn btn-sm btn-danger"></input>
															</form>
														</td>
													</tr>
													
                                                    @endforeach

											
												</tbody>
											</table>
										</div>
									</div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		
	
@endsection