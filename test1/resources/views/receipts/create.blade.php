@extends('layout')
@section('content') 

            <div class="container-fluid">
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>إضافة الرسوم</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">الرسوم</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">إضافة الرسوم</a></li>
                        </ol>
                    </div>
                </div>
				
                
				   
					<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">إضافة رسوم الاشتراك في دورة </h5>
							</div>
							<div class="card-body">
                                <form action="#" method="post">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">إسم المتدرب</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">الدورة</label>
												<select class="form-control">
													<option value="Department">الدورة</option>
												
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group mb-4">
												<label class="form-label"></label>
												<select class="form-control">
													<option value="Fess Type">نوع الدفع</option>
													<option value="Annual">نقدي</option>
													<option value="Exam">شيك</option>
													<option value="Other">أخرى</option>
												</select>
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">القيمة</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group mb-4">
												<label class="form-label">تاريخ الدفع</label>
												<input name="datepicker" class="form-control" id="datepicker" type="date">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">رقم الايصال</label>
												<input type="text" class="form-control">
											</div>
										</div>
									
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">إرسال</button>
											<button type="submit" class="btn btn-light">إلغاء</button>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                   </div>
                </div>
                @endsection
