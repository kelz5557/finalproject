@extends('layout')
@section('content')
<div >
 <h3>{{$index['first_name']}} </h3>
</div>


        <!--**********************************
            Content body start
        ***********************************-->
   
            <!-- row -->
            <div class="container-fluid">
				    
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>{{$index['first_name']}} </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">المتدربين</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">كل المتدربين</a></li>
                       
                            <li class="breadcrumb-item active"><a href="javascript:void(0);"> {{$index['first_name']}}</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title"> دورات {{$index['first_name']}}  </h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example3" class="display" style="min-width: 845px">
												<thead>
													<tr>
														<th>رقم </th>
														<th>courses</th>
														<th>تاريخ القبول</th>
														<th>تعديل</th>
														<th>حذف</th>
													</tr>
												</thead>
												<tbody>
													<?php $i=0 ?>
													@foreach($index->course as $tests)
													<?php $i++ ?>	
													<tr>
														<td><strong>{{$i}}</strong></td>
														<td>{{$tests['course_name']}}</td>
                                                        <td>{{$tests['created_at']}}</td>
														<td>1</td>
														<td>1</td>
                                                        
														
													</tr>
													
                                                    @endforeach
                                                    
											
												</tbody>
											</table>
                                            <form action="{{route('tests.store')}}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    
                                                    
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">إسم الدورة</label>
                                                            <select name="coursename" type="text" class="form-control">
                                                                @foreach ($test as $t)
                                                                <option value="{{$t->id}}">{{$t->course_name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('coursename')
                                                            <div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <button type="submit" class="btn btn-primary">إرسال</button>
                                                    </div>
                                                </div>
                                            </form>
										</div>
									</div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		
	

@endsection