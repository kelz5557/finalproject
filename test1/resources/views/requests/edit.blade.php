@extends('layout')
@section('content') 
<div class="container-fluid">
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>اضافة المتدرب</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">طلبات الالتحاق</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">اضافة المتدرب</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">البيانات الاساسية</h5>
							</div>
							<div class="card-body">
                                <form action="{{route('allstudents.store',['allstudent'=>$index['id']])}}" method="POST">
                                    @csrf
                                    
									
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">الاسم  </label>
												<input name="firstname" value="{{$index['first_name']}}"  type="text" class="form-control">
												@error('firstname')
													<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label"> المستوى التعليمي  </label>
												<input name="edlevel" value="{{$index['edlevel']}}" type="text" class="form-control">
												@error('edlevel')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">البريد الالكتروني</label>
												<input  name="email" value="{{$index['email']}}" type="text" class="form-control">
												@error('email')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">العنوان</label>
												<input  name="address" value="{{$index['address']}}" type="text" class="form-control">
												@error('address')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label   class="form-label">الجنس</label>
												<select name="gender" class="form-control">
													<option value="{{$index['gender']}}"> {{$index['gender']}}</option>
													<option value="ذكر">ذكر</option>
													<option value="انثى">انثى</option>
												</select>
												@error('gender')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">رقم الهاتف</label>
												<input name="phonenumber" value="{{$index['phone']}}"  type="text" class="form-control">
												@error('phonenumber')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">تاريخ الميلاد</label>
												<input type="date" value="{{$index['b_day']}}" name="bday" class="datepicker form-control" id="datepicker1">
												@error('bday')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
                                            
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
				</div>
                
            </div>
@endsection    