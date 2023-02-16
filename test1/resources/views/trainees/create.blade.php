@extends('layout')
@section('content') 
<div class="container-fluid">
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>اضافة المتدربين</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">المتدربين</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">إضافة المتدربين</a></li>
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
                                <form action="{{route('allstudents.store')}}" method="POST">
                                    @csrf
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">الاسم  </label>
												<input name="firstname" value="{{old('firstname')}}"  type="text" class="form-control">
												@error('firstname')
													<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">المستوى التعليمي    </label>
												<input name="edlevel" value="{{old('edlevel')}}" type="text" class="form-control">
												@error('edlevel')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">البريد الالكتروني</label>
												<input value="{{old('email')}}" name="email" type="text" class="form-control">
												@error('email')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">العنوان</label>
												<input  name="address" value="{{old('address')}}" type="text" class="form-control">
												@error('address')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label   class="form-label">الجنس</label>
												<select name="gender" class="form-control">
													<option value="" disabled selected>الجنس</option>
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
												<input name="phonenumber" value="{{old('phonenumber')}}" type="text" class="form-control">
												@error('phonenumber')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">تاريخ الميلاد</label>
												<input type="date" value="{{old('bday')}}" name="bday" class="datepicker form-control" id="datepicker1">
												@error('bday')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
                                            
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="submit" class="btn btn-light">Cencel</button>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
				</div>
                
            </div>
@endsection    