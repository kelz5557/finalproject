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
                            <h4>كل المدربين</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">المدربين</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">كل المدربين</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">قائمة كل المدربين بالمركز  </h4>
										<a href="{{url('/dashboard/alltrainers/create')}}" class="btn btn-primary">إضافة جديد+</a>
										
									</div>
									<div class="mx-auto pull-right">
										<div class="">
											<form action="#" method="GET" role="search">
							
												<div class="input-group">
													<span class="input-group-btn mr-5 mt-1">
														<button class="btn btn-info" type="submit" title="Search projects">
															<span class="fas fa-search"></span>
														</button>
													</span>
													<input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term">
													<a href="#" class=" mt-1">
														<span class="input-group-btn">
															<button class="btn btn-danger" type="button" title="Refresh page">
																<span class="fas fa-sync-alt"></span>
															</button>
														</span>
													</a>
												</div>
											</form>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example3" class="display" style="min-width: 845px">
												<thead>
													<tr>
														
														<th>رقم المدرب</th>
														<th>الاسم</th>
														<th>التخصص</th>
														<th>رقم الهاتف</th>
														<th>البريد الالكتروني</th>
														<th>تعديل</th>
													</tr>
												</thead>
												<?php $i=0 ?>
												<tbody>@foreach ($test as $index)	
													<?php $i++ ?>
													<tr>
														<td><strong>{{$i}}</strong></td>
														<td><a href="{{route('alltrainers.show',['alltrainer'=>$index['id']])}}">{{$index['last_name']}} {{$index['first_name']}}</a></td>
														<td></td>
                                                        <td>{{$index['specialization']}}</td>
														
														<td><strong>{{$index['phone']}}</strong></td>
														<td>{{$index['email']}}</td>
														<td>
															<a href="{{route('alltrainers.edit',$index['id'])}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>

														</td>
														<td>															<form action="{{route('alltrainers.destroy',['alltrainer'=>$index['id']])}}" method="POST" >
															@csrf
															@method('DELETE')
															<input type="submit" value="حذف" class="btn btn-sm btn-danger"></input>
														</form></td>
													</tr>
													
                                                    @endforeach</tbody>
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