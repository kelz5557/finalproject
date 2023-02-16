@extends('layout')
@section('content') 

<div class="container-fluid">
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>اضافة اعلان</h4>
                        
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">الاعلانات</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">اضافة اعلان </a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title"> تفاصيل الاعلان</h5>
							</div>
							<div class="card-body">
                                <form action="{{route('ads.store')}}" method="POST">
									@csrf
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">عنوان الاعلان </label>
												<input name="title" type="text" class="form-control">
												@error('title')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
										
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
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">محتوى الاعلان  </label>
												<textarea name="description" type="text" class="form-control"></textarea>
												@error('description')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">تاريخ بداية الدورة</label>
												<input type="date" name="startdate" class="datepicker form-control" id="datepicker1">
												@error('startdate')
												<div class="form-error">{{"الرجاء ادخال البيانات بشكل صحيح"}}</div>
											@enderror
											</div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">تاريخ نهاية الدورة</label>
												<input type="date" name="enddate" class="datepicker form-control" id="datepicker1">
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