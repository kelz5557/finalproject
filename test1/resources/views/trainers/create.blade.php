@extends('layout')
@section('content') 
<div class="container-fluid">
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>اضافة المدربين</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">المدربين</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">إضافة المدربين</a></li>
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
                                <form action="{{route('alltrainers.store')}}" method="POST">
                                    @csrf
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">الاسم الاخير  </label>
												<input name="lastname" value="{{old('lastname')}}" type="text" class="form-control">
												@error('lastname')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">الاسم الاول </label>
												<input name="firstname" value="{{old('firstname')}}"  type="text" class="form-control">
												@error('firstname')
													<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
												@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">البريد الالكتروني</label>
												<input value="{{old('email')}}"  name="email" type="text" class="form-control">
												@error('email')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">التخصص</label>
												<input value="{{old('specialization')}}"  name="specialization" type="text" class="form-control">
												@error('specialization')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">رقم الهاتف</label>
												<input value="{{old('phonenumber')}}"  name="phonenumber" type="text" class="form-control">
												@error('phonenumber')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
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