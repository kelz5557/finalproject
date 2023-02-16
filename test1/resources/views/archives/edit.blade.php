@extends('layout')
@section('content') 

<div class="container-fluid">
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>تعديل للأرشيف</h4>
                        
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">الأرشيف</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">تعديل للأرشيف</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">بيانات المتدرب</h5>
							</div>
							<div class="card-body">
                                <form action="{{route('allarchives.update',['allarchive'=>$index['id']])}}" method="POST">
									@csrf
                                    @method('PUT')
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">الاسم الرباعي</label>
												<input name="name" value="{{$index['name']}}" type="text" class="form-control">
												@error('name')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">إسم الدورة</label>
												<input name="coursename" value="{{$index['course_name']}}" type="text" class="form-control">
												@error('coursename')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">رقم الهاتف</label>
												<input name="phone" value="{{$index['phone']}}" type="text" class="form-control">
												@error('phone')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
									
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">التقدير</label>
												<input name="grade" value="{{$index['grade']}}" type="text" class="form-control">
												@error('grade')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">نسبة النجاح</label>
												<input name="percentage" value="{{$index['percentage']}}" type="text" class="form-control">
												@error('percentage')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
							
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">الجنس</label>
												<select name="gender"  class="form-control">
													<option value="{{$index['gender']}}" >{{$index['gender']}}</option>
													<option value="ذكر">ذكر</option>
													<option value="أنثى">أنثى</option>
												</select>
												@error('gender')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>

									
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">تاريخ بداية الدورة</label>
												<input type="date" name="startdate" value="{{$index['start_date']}}" class="datepicker form-control" id="datepicker1">
												@error('startdate')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">تاريخ نهاية الدورة</label>
												<input type="date" name="enddate" value="{{$index['end_date']}}" class="datepicker form-control" id="datepicker1">
												@error('enddate')
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

@endsection 